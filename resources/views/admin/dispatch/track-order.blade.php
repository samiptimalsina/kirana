<x-admin.index :user="$user" :isAdmin="$isAdmin">

    <div class="max-w-5xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-8">

        <!-- Header -->
        <h1 class="text-3xl font-semibold text-center text-blue-600 mb-6">Order Tracking Details</h1>

        <!-- Order Information Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="space-y-2">
                <h2 class="text-xl font-medium">Order Information</h2>
                <table class="w-full">
                    <tr><td><strong>Order ID:</strong></td><td>{{ $order->orderId }}</td></tr>
                    <tr><td><strong>Ref ID:</strong></td><td>{{ $order->refId }}</td></tr>
                    <tr><td><strong>Status:</strong></td><td>{{ $order->status }}</td></tr>
                    <tr><td><strong>Client:</strong></td><td>{{ $order->clientName }}</td></tr>
                    <tr><td><strong>Receiver:</strong></td><td>{{ $order->receiverName }}</td></tr>
                    <tr><td><strong>Product Category:</strong></td><td>{{ $order->productCategory }}</td></tr>
                    <tr><td><strong>Product Description:</strong></td><td>{{ $order->productDescription }}</td></tr>
                </table>
            </div>
            <div class="space-y-2">
                <h2 class="text-xl font-medium">Contact Details</h2>
                <table class="w-full">
                    <tr><td><strong>Client Contact:</strong></td><td>{{ $order->clientContact }}</td></tr>
                    <tr><td><strong>Receiver Contact:</strong></td><td>{{ $order->receiverContact }}</td></tr>
                    <tr><td><strong>Receiver Address:</strong></td><td>{{ $order->receiverAddress }}</td></tr>
                    <tr><td><strong>Receiver Landmark:</strong></td><td>{{ $order->receiverLandmark }}</td></tr>
                    <tr><td><strong>Receiver Hub:</strong></td><td>{{ $order->receiverHub }}</td></tr>
                </table>
            </div>
        </div>

        <!-- Shipment Details Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="space-y-2">
                <h2 class="text-xl font-medium">Shipment Information</h2>
                <table class="w-full">
                    <tr><td><strong>Created Date:</strong></td><td>{{ $order->createdDate }}</td></tr>
                    <tr><td><strong>Delivery/Return Date:</strong></td><td>{{ $order->deliveryOrReturnDate }}</td></tr>
                    <tr><td><strong>Latest Update:</strong></td><td>{{ $order->latestUpdateDate }}</td></tr>
                    <tr><td><strong>Item Value:</strong></td><td>{{ $order->itemValue }}</td></tr>
                    <tr><td><strong>Chargeable Weight:</strong></td><td>{{ $order->chargeableWeight }}</td></tr>
                    <tr><td><strong>Dimensions:</strong></td><td>{{ $order->dimensions }}</td></tr>
                </table>
            </div>
            <div class="space-y-2">
                <h2 class="text-xl font-medium">Charges</h2>
                <table class="w-full">
                    <tr><td><strong>COD Amount:</strong></td><td>{{ $order->codAmount }}</td></tr>
                    <tr><td><strong>Service Charge:</strong></td><td>{{ $order->serviceCharge }}</td></tr>
                    <tr><td><strong>Extra Charge:</strong></td><td>{{ $order->extraCharge }}</td></tr>
                    <tr><td><strong>COD Settlement Status:</strong></td><td>{{ $order->codSettlementStatus }}</td></tr>
                    <tr><td><strong>Service Charge Status:</strong></td><td>{{ $order->serviceChargeStatus }}</td></tr>
                </table>
            </div>
        </div>

        <!-- Tracking History Section -->
        <div class="space-y-4 mb-6">
            <h2 class="text-xl font-medium">Tracking History</h2>
            @foreach($order->trackingHistory as $history)
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm mb-4">
                <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($history->createdAt)->format('d-M-Y, H:i:s') }}</p>
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
                    <p><strong>Signature:</strong> {{ $order->proof->proofOfPickup->signature ?: 'N/A' }}</p>
                    <p><strong>Images:</strong> @foreach($order->proof->proofOfPickup->images as $image) <img src="{{ $image }}" alt="Pickup Image" class="w-20 h-20 inline-block"> @endforeach</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-lg font-medium">Proof of Delivery</h3>
                    <p><strong>Signature:</strong> {{ $order->proof->proofOfDelivery->signature ?: 'N/A' }}</p>
                    <p><strong>Images:</strong> @foreach($order->proof->proofOfDelivery->images as $image) <img src="{{ $image }}" alt="Delivery Image" class="w-20 h-20 inline-block"> @endforeach</p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-lg font-medium">Proof of Return</h3>
                    <p><strong>Signature:</strong> {{ $order->proof->proofOfReturn->signature ?: 'N/A' }}</p>
                    <p><strong>Images:</strong> @foreach($order->proof->proofOfReturn->images as $image) <img src="{{ $image }}" alt="Return Image" class="w-20 h-20 inline-block"> @endforeach</p>
                </div>
            </div>
        </div>

        <!-- Remarks Section -->
        <div class="space-y-4">
            <h2 class="text-xl font-medium">Remarks</h2>
            <p class="p-4 bg-gray-50 rounded-lg shadow-sm">{{ $order->remarks ?: 'No remarks available' }}</p>
        </div>

    </div>
</x-admin.index>
