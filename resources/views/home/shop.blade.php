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
{{-- <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get the last scroll position
    let lastScrollPosition = parseInt(sessionStorage.getItem('scrollPosition') || '0', 10);

    // Ensure the scroll position is within 600px from the top
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
</script> --}}
</html>
