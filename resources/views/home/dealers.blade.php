<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.head')
</head>

<body>
    @include('home.partials.preloader')
    @include('home.partials.header', ['navdata' => $navdata])
    @include('home.partials.page-bannner', ['title' => 'Deallers'])


    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Dealers</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($dealers as $dealer)
                <div class="max-w-sm rounded overflow-hidden shadow-lg p-4 bg-white">
                    <div class="font-bold text-xl mb-2">{{ $dealer->name }}</div>
                    <p class="text-gray-700 text-base"><strong>Contact No:</strong> {{ $dealer->contact_no }}</p>
                    <p class="text-gray-700 text-base"><strong>Contact Person:</strong> {{ $dealer->contact_person }}</p>
                    <p class="text-gray-700 text-base"><strong>Address:</strong> {{ $dealer->address }}</p>
                    <p class="text-gray-700 text-base"><strong>Proprietor Name:</strong> {{ $dealer->proprietor_name }}</p>
                    <p class="text-gray-700 text-base"><strong>Google Address:</strong> {{ $dealer->google_address }}</p>
                    <div class="mt-4">
                        <iframe
                            width="100%"
                            height="200"
                            frameborder="0" style="border:0"
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q={{ urlencode($dealer->google_address) }}" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('home.partials.footer')

    @include('home.partials.script')
</body>

</html>
