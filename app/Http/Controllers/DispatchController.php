<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Milon\Barcode\DNS1D;
use Illuminate\Support\Facades\File;


class DispatchController extends Controller
{
    private $apiKey;
    private $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('upaye.api_key');
        $this->baseUrl = config('upaye.base_url');
    }

    public function getOrderRates(Request $request)
    {
        $requestData = [
            'initial_weight' => $request->input('initial_weight', 10),
            'order_type' => $request->input('order_type', 'delivery_order'),
            'service_type_id' => $request->input('service_type_id', 1),
            'location_id' => $request->input('location_id', 606),
            'length' => $request->input('length', null),
            'breadth' => $request->input('breadth', null),
            'height' => $request->input('height', null),
        ];

        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->post("{$this->baseUrl}/api/v1/client/order-rates", $requestData);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([
                'error' => 'Unable to fetch order rates',
                'details' => $response->json(),
            ], $response->status());
        }
    }


    public function dispatchSetup($id)
    {
        $reservation = Reservation::where('id', $id)->with('food')->first();
        $locations = $this->getLocations();
        $locations = $locations->getData(true);
        return view('admin.dispatch.create', compact('locations', 'reservation'));
    }

    public function addNewOrder(Request $request,$id)
    {
        $request->validate([
            'hub_id' => 'nullable|string',
            'area_id' => 'required|string',
            'receiver_name' => 'required|string|max:255',
            'receiver_contact' => 'required|string|max:15',
            'receiver_alternate_number' => 'nullable|string|max:15',
            'product_price' => 'required|numeric|min:0',
            'cod_amount' => 'required|numeric|min:0',
            'weight' => 'nullable|numeric|min:0',
            'length' => 'nullable|numeric|min:0',
            'breadth' => 'required|numeric|min:0',
            'height' => 'nullable|numeric|min:0',
            'product_description' => 'required|string|max:500',
            'receiver_address' => 'required|string|max:500',
            'receiver_landmark' => 'nullable|string|max:255',
            'remarks' => 'nullable|string|max:500',
            'client_note' => 'nullable|string|max:500',
        ]);
        $reqArr = $request->except('_token'); // Get all request data except '_token'

        $defaultOrder = array_merge($reqArr, [
            'order_type' => 'delivery_order',
            'service_type_id' => 3,
            'product_category_id' => 8,
            'order_reference_id' => $this->generateOrderReferenceId(),
        ]);

        $arr = [
            "orders" => [
                $defaultOrder
            ]
        ];

        $order = json_encode($arr);
        \Log::info($order);

        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->withBody($order, 'application/json')
        ->post("{$this->baseUrl}/api/v1/client/add-order");

        $responseBody = $response->body();

        $decodedResponse = json_decode($responseBody, true);

        \Log::info('Decoded API Response: ', $decodedResponse);

        if ($response->successful() && isset($decodedResponse['data'])) {

            $trackingCode = $decodedResponse['data']['data'][0]['trackingCode'] ?? null;
            $orderReferenceId = $decodedResponse['data']['data'][0]['orderReferenceId'] ?? null;

            $reservation = Reservation::find($id);

            if ($reservation) {
                $reservation->update([
                    'tracking_code' => $trackingCode,
                    'order_reference_id' => $orderReferenceId,
                ]);
            }

            return redirect()->route('reservation.index')->with('msg', $decodedResponse['data']['message']);

        } else {
            return response()->json([
                'error' => 'Unable to add new order',
                'details' => $response->json(),
            ], $response->status());
        }
    }


    public function getLocations()
    {
        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->get("{$this->baseUrl}/api/v1/client/locations");

        if ($response->successful()) {
            $response->json(['data'] ?? []);

            return response()->json($response->json(['data']));
        } else {
            return response()->json([
                'error' => 'Unable to fetch locations',
                'details' => $response->json(),
            ], $response->status());
        }
    }

    // Method to track an order by its ID
    public function trackOrder($orderId)
    {
        // Fetch order data from API
        $response = Http::withHeaders([
            'X-API-Key' => $this->apiKey,
        ])->get("{$this->baseUrl}/api/v1/client/track-order/{$orderId}");

        // Decode the response body safely
        $responseBody = json_decode($response->body());

        // Handle potential errors in API response
        if (!$response->successful() || !isset($responseBody->data)) {
            return redirect()->back()->with('error', 'Unable to fetch order details.');
        }

        $order = $responseBody->data;

        // Generate barcode image
        $d = new DNS1D();

        $barcodeDir = public_path('images/barcodes');
        if (!File::isDirectory($barcodeDir)) {
            File::makeDirectory($barcodeDir, 0755, true, true);
        }

        $barcodeImagePath = 'images/barcodes/order-' . $orderId . '.png';
        $barcodeFullPath = public_path($barcodeImagePath);
        file_put_contents($barcodeFullPath, base64_decode($d->getBarcodePNG('123456789', 'C39')));

        $order->barcodeImage = $barcodeImagePath;


        return view('admin.dispatch.track-order', compact('order'));
    }

    // Method to show the delivery locations on a view (for frontend)
    public function showLocations()
    {
        $locations = $this->getLocations();  // Get locations data
        return view('locations.index', compact('locations'));
    }

    // Method to display order tracking status on a view (for frontend)
    public function showOrderStatus($orderId)
    {
        $orderStatus = $this->trackOrder($orderId);  // Get order tracking status
        return view('orders.track', compact('orderStatus'));
    }

    private function generateRandomString(int $length): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateOrderReferenceId(): string
    {
        $prefix = 'OR'; // Static prefix
        $randomText = $this->generateRandomString(8); // 8 random alphabetic characters
        $randomNumbers = rand(10, 99) . rand(1, 9) . rand(10, 99); // Custom numeric pattern

        return $prefix . $randomText . $randomNumbers;
    }
}
