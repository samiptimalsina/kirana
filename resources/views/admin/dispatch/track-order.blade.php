                            <x-admin.index :user="$user" :isAdmin="$isAdmin">

                                <div class="max-w-5xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-8">

                                    <!-- Header -->
                                    <h1 class="text-3xl font-semibold text-center text-blue-600 mb-6">Order Tracking
                                        Details</h1>
                                    <div>
                                        <img src="{{ $order->barcodeImage }}" alt="Barcode" class="h-16">
                                        <p class="text-sm text-gray-500 text-center">{{ $order->barcodeNumber ?? '' }}
                                        </p>
                                    </div>
                                    <!-- Order Information Section -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <div class="space-y-2">
                                            <h2 class="text-xl font-medium">Order Information</h2>
                                            <table class="min-w-full table-auto border-collapse border border-gray-300">
                                                <tbody>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Order ID:</td>
                                                        <td class="px-4 py-2">{{ $order->orderId }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Ref ID:</td>
                                                        <td class="px-4 py-2">{{ $order->refId }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Status:</td>
                                                        <td class="px-4 py-2">{{ $order->status }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Client:</td>
                                                        <td class="px-4 py-2">{{ $order->clientName }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Receiver:</td>
                                                        <td class="px-4 py-2">{{ $order->receiverName }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Product
                                                            Category:</td>
                                                        <td class="px-4 py-2">{{ $order->productCategory }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Product
                                                            Description:</td>
                                                        <td class="px-4 py-2">{{ $order->productDescription }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="space-y-2">
                                            <h2 class="text-xl font-medium">Contact Details</h2>
                                            <table class="min-w-full table-auto border-collapse border border-gray-300">
                                                <tbody>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Client
                                                            Contact:</td>
                                                        <td class="px-4 py-2">{{ $order->clientContact }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Receiver
                                                            Contact:</td>
                                                        <td class="px-4 py-2">{{ $order->receiverContact }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Receiver
                                                            Address:</td>
                                                        <td class="px-4 py-2">{{ $order->receiverAddress }}</td>
                                                    </tr>
                                                    <tr class="border-b">

                                                        <td class="px-4 py-2 font-semibold text-gray-700">Receiver
                                                            Landmark:</td>
                                                        <td class="px-4 py-2">{{ $order->receiverLandmark }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Receiver Hub:
                                                        </td>
                                                        <td class="px-4 py-2">{{ $order->receiverHub }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Shipment Details Section -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <div class="space-y-2">
                                            <h2 class="text-xl font-medium">Shipment Information</h2>
                                            <table class="min-w-full table-auto border-collapse border border-gray-300">
                                                <tbody>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Created Date:
                                                        </td>
                                                        <td class="px-4 py-2">{{ $order->createdDate }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">
                                                            Delivery/Return Date:</td>
                                                        <td class="px-4 py-2">{{ $order->deliveryOrReturnDate }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Latest Update:
                                                        </td>
                                                        <td class="px-4 py-2">{{ $order->latestUpdateDate }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Item Value:
                                                        </td>
                                                        <td class="px-4 py-2">{{ $order->itemValue }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Chargeable
                                                            Weight:</td>
                                                        <td class="px-4 py-2">{{ $order->chargeableWeight }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Dimensions:
                                                        </td>
                                                        <td class="px-4 py-2">{{ $order->dimensions }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="space-y-2">
                                            <h2 class="text-xl font-medium">Charges</h2>
                                            <table class="min-w-full table-auto border-collapse border border-gray-300">
                                                <tbody>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">COD Amount:
                                                        </td>
                                                        <td class="px-4 py-2">{{ $order->codAmount }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Service
                                                            Charge:</td>
                                                        <td class="px-4 py-2">{{ $order->serviceCharge }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Extra Charge:
                                                        </td>
                                                        <td class="px-4 py-2">{{ $order->extraCharge }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">COD Settlement
                                                            Status:</td>
                                                        <td class="px-4 py-2">{{ $order->codSettlementStatus }}</td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-4 py-2 font-semibold text-gray-700">Service Charge
                                                            Status:</td>
                                                        <td class="px-4 py-2">{{ $order->serviceChargeStatus }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Tracking History Section -->
                                    <div class="space-y-4 mb-6">
                                        <h2 class="text-xl font-medium">Tracking History</h2>
                                        @foreach ($order->trackingHistory as $history)
                                            <div
                                                class="bg-gray-50 p-4 rounded-lg shadow-sm mb-4 border border-gray-300">
                                                <p><strong>Date:</strong>
                                                    {{ \Carbon\Carbon::parse($history->createdAt)->format('d-M-Y, H:i:s') }}
                                                </p>
                                                <p><strong>Status:</strong> {{ $history->status }}</p>
                                                <p><strong>Activity Type:</strong> {{ $history->activityType }}</p>
                                                <p><strong>Activity By:</strong> {{ $history->activityBy }}</p>
                                                <p><strong>Hub Name:</strong> {{ $history->hubName }}</p>
                                                <p><strong>Remarks:</strong> {{ $history->actionRemarks ?: 'N/A' }}</p>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Proof Section -->
                                    <div class="space-y-4 mb-6">
                                        <h2 class="text-xl font-medium">Proof of Pickup/Delivery/Return</h2>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                            <div class="space-y-2">
                                                <h3 class="text-lg font-medium">Proof of Pickup</h3>
                                                <p><strong>Signature:</strong>
                                                    {{ $order->proof->proofOfPickup->signature ?: 'N/A' }}</p>
                                                <p><strong>Images:</strong>
                                                    @foreach ($order->proof->proofOfPickup->images as $image)
                                                        <img src="{{ $image }}" alt="Pickup Image"
                                                            class="w-20 h-20 inline-block border border-gray-300 rounded-md">
                                                    @endforeach
                                                </p>
                                            </div>
                                            <div class="space-y-2">
                                                <h3 class="text-lg font-medium">Proof of Delivery</h3>
                                                <p><strong>Signature:</strong>
                                                    {{ $order->proof->proofOfDelivery->signature ?: 'N/A' }}</p>
                                                <p><strong>Images:</strong>
                                                    @foreach ($order->proof->proofOfDelivery->images as $image)
                                                        <img src="{{ $image }}" alt="Delivery Image"
                                                            class="w-20 h-20 inline-block border border-gray-300 rounded-md">
                                                    @endforeach
                                                </p>
                                            </div>
                                            <div class="space-y-2">
                                                <h3 class="text-lg font-medium">Proof of Return</h3>
                                                <p><strong>Signature:</strong>
                                                    {{ $order->proof->proofOfReturn->signature ?: 'N/A' }}</p>
                                                <p><strong>Images:</strong>
                                                    @foreach ($order->proof->proofOfReturn->images as $image)
                                                        <img src="{{ $image }}" alt="Return Image"
                                                            class="w-20 h-20 inline-block border border-gray-300 rounded-md">
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Remarks Section -->
                                    <div class="space-y-4">
                                        <h2 class="text-xl font-medium">Remarks</h2>
                                        <p class="p-4 bg-gray-50 rounded-lg shadow-sm border border-gray-300">
                                            {{ $order->remarks ?: 'No remarks available' }}</p>
                                    </div>

                                </div>
                            </x-admin.index>
