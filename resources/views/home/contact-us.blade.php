<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY_HERE"></script>
    <style>
        /* Customize map container size */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
        @include('home.partials.head')

</head>

<body class="bg-gray-100 ">

    @include('home.partials.header', ['navdata' => $navdata])

<div class="container mx-auto py-10 ">
    <br>
    <br>
        <h1 class="text-3xl font-bold text-center mb-8 mt-10">Contact Us</h1>
        <!-- Contact Form -->
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-md shadow-md">
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                    <textarea id="message" name="message" rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Your Message" required></textarea>
                </div>
                <div class="text-center">
<button type="submit"
    class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition" style="background-color: #0F172A;">Send</button>


                </div>
            </form>
        </div>
        <!-- Google Map -->
        <div id="map" class="mt-8"></div>
    </div>

    <script>
        // Initialize and display Google Map
        function initMap() {
            const location = { lat: 37.7749, lng: -122.4194 }; // Sample coordinates for San Francisco
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: location,
            });
            const marker = new google.maps.Marker({
                position: location,
                map: map,
            });
        }
        // Load Google Map after page is fully loaded
        google.maps.event.addDomListener(window, "load", initMap);
    </script>
    @include('home.partials.footer')

    @include('home.partials.script')
</body>

</html>

