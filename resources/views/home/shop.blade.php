<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.head')
</head>

<body>
    					@if(session()->has('msg'))
					<p class="alert alert-info">{{ session()->get('msg') }}</p>
					@endif
    @include('home.partials.preloader')

    @include('home.partials.header', ['navdata' => $navdata])
        @include('home.partials.page-bannner', ['title' => "Our Shop"])
{{-- assets/images/food-bg.png --}}

    @include('home.partials.food', ['fooddata' => $fooddata, 'foodBg' => ''])



    @include('home.partials.footer')

    @include('home.partials.script')
</body>



</html>
