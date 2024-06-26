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
    @include('home.partials.banner', ['bannerImg' => $banner_images[1]?->image_url ?? 'assets/images/banner-bg.jpg'])
    @include('home.partials.welcome')
    @include('home.partials.food', ['fooddata' => $fooddata, 'foodBg' => ''])

    @include('home.partials.testimonial', [
        'testimonialdata' => $testimonialdata,
        'quoteImg' => 'assets/images/quote.png',
    ])
    @include('home.partials.deshes', ['dishesdata' => $dishesdata])


    @include('home.partials.table', ['tableBg' => $banner_images[0]?->image_url ?? 'assets/images/food-bg.png'])
    @include('home.partials.footer')

    @include('home.partials.script')
</body>

</html>
