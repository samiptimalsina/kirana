<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.head')
</head>

<body>
    @if (session()->has('msg'))
        <p class="alert alert-info" style="background: #d97706">{{ session()->get('msg') }}</p>
    @endif
    @include('home.partials.preloader')
    @include('home.partials.header', ['navdata' => $navdata])
    @include('home.partials.banner', [
        'bannerImg' => $banner_images[1]?->image_url ?? 'assets/images/banner-bg.jpg',
    ])
    @include('home.partials.welcome')
    @include('home.partials.food', ['fooddata' => $fooddata, 'foodBg' => ''])

    @include('home.partials.testimonial', [
        'testimonialdata' => $testimonialdata,
        'quoteImg' => 'assets/images/quote.png',
    ])
    @include('home.partials.deshes', ['dishesdata' => $dishesdata])


    {{-- @include('home.partials.table', ['tableBg' => $banner_images[0]?->image_url ?? 'assets/images/food-bg.png']) --}}
    {{-- <img src="{{ $banner_images[0]?->image_url}}"> --}}
    @include('home.partials.footer')

    @include('home.partials.chat-buttons')
    @include('home.partials.script')
</body>
@if (Route::currentRouteName() === 'shop')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the last scroll position
            let lastScrollPosition = parseInt(sessionStorage.getItem('scrollPosition') || '0', 10);

            // Ensure the scroll position is within 1000px from the top
            if (lastScrollPosition > 1000) {
                lastScrollPosition = 1000;
            }

            // Restore scroll position
            window.scrollTo(0, lastScrollPosition);

            // Save scroll position before unloading
            window.addEventListener('beforeunload', function() {
                sessionStorage.setItem('scrollPosition', window.scrollY);
            });
        });
    </script>
@else
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Clear scroll position in session storage if not on the 'shop' route
            sessionStorage.removeItem('scrollPosition');
        });
    </script>
@endif

</html>
