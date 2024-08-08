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
                <div class=" items-center mb-2">
                    <i class="fas fa-check-circle text-green-500 "></i>
                    <strong class="text-xl">Dealer Name:</strong>
                    <span class="ml-2">{{ $dealer->name }}</span>
                </div>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-phone mr-2"></i>
                    <strong>Contact No:</strong>
                    <span class="ml-2 hidden">{{ $dealer->contact_no }}</span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-user-friends mr-2"></i>
                    <strong>Contact Person:</strong>
                    <span class="ml-2">{{ $dealer->contact_person }}</span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <strong>Address:</strong>
                    <span class="ml-2">{{ $dealer->address }}</span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-user-tie mr-2"></i>
                    <strong>Proprietor Name:</strong>
                    <span class="ml-2">{{ $dealer->proprietor_name }}</span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-globe mr-2"></i>
                    <strong>Google Address:</strong>
                    <span class="ml-2">{!!$dealer->google_address !!}</span>
                </p>
                <div class="mt-4">
               {!! $dealer->google_address !!}
                </div>
            </div>
        @endforeach
    </div>
</div>



    @include('home.partials.footer')

    @include('home.partials.script')
</body>

</html>
