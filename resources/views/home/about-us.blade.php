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
    @include('home.partials.page-bannner', ['title' => 'Maha spice and food Product
'])

    @include('home.partials.welcome')

    @include('home.partials.teams', [
        'testimonialdata' => $testimonialdata,
        'quoteImg' => 'assets/images/quote.png',
    ])


    {{-- @include('home.partials.table', ['tableBg' => 'https://betal.techzillasoft.com/assets/images/banner/5M6qu_1718908856.jpeg']) --}}
    @include('home.partials.footer')

    @include('home.partials.script')
</body>

</html>
