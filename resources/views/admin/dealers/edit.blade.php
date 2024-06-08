<x-admin.index :user="$user" :isAdmin="$isAdmin" :dealer="$dealer" />

<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">{{ isset($dealer) ? 'Edit Dealer' : 'Add Dealer' }}</h1>
    <form action="{{ isset($dealer) ? route('dealers.update', $dealer->id) : route('dealers.store') }}" method="POST">
        @csrf
        @if(isset($dealer))
            @method('PUT')
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $dealer->name ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact_no">Contact No</label>
            <input type="text" name="contact_no" value="{{ old('contact_no', $dealer->contact_no ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" value="{{ old('contact_person', $dealer->contact_person ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
            <input type="text" name="address" value="{{ old('address', $dealer->address ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="proprietor_name">Proprietor Name</label>
            <input type="text" name="proprietor_name" value="{{ old('proprietor_name', $dealer->proprietor_name ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="google_address">Google Address</label>
            <input type="text" name="google_address" value="{{ old('google_address', $dealer->google_address ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="google_address">Google Map</label>
            <input type="text" name="google_address" value="{{ old('google_address', $dealer->google_map ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ isset($dealer) ? 'Update Dealer' : 'Add Dealer' }}
            </button>
            <a href="{{ route('dealers.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
        </div>
    </form>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>
    function initMap() {
        var geocoder = new google.maps.Geocoder();
        var address = document.getElementById('google_address').value;
        var mapOptions = {
            zoom: 15,
            center: { lat: -34.397, lng: 150.644 } // Default center
        };
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                console.log('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initMap);
</script>

</x-admin.index>
