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
    @include('home.partials.welcome')

    @include('home.partials.testimonial', [
        'testimonialdata' => $testimonialdata,
        'quoteImg' => 'assets/images/quote.png',
    ])


    @include('home.partials.table', ['tableBg' => 'assets/images/table-bg.jpg'])
    @include('home.partials.footer')

    @include('home.partials.script')
</body>

</html>
