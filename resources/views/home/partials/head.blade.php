<!-- Required Meta Tags -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<!-- Page Title -->
<!-- Page Title -->
<title>High-Quality Spices and Food Products | Maha Spice and Food Product Industries Pvt. Ltd.</title>

<!-- Meta Description -->
<meta name="description"
    content="Discover premium spices and food products at Maha Spice and Food Product Industries Pvt. Ltd. We offer the finest quality ingredients sourced with care to enhance your culinary experience. Visit us today!" />

<!-- Meta Author -->
<meta name="author" content="Maha Spice and Food Product Industries Pvt. Ltd." />

<!-- Meta Keywords -->
<meta name="keywords"
    content="spices, food products, premium spices, culinary ingredients, Maha Spice, food industries, quality spices, Maha Spice and Food Product Industries" />
<!-- Favicon -->
@if (isset($settings->logo))
    <!-- If the logo exists, use it as the favicon -->
    <link rel="icon" type="image/png" href="{{ $settings->getLogo($settings->logo) }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ $settings->getLogo($settings->logo) }}" sizes="16x16">
@else
    <!-- Default favicon links if logo doesn't exist -->
    <link rel="apple-touch-icon" sizes="180x180" href="/default/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/default/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/default/favicon-16x16.png">
@endif

<link rel="manifest" href="/site.webmanifest">
<!-- CSS libraries -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" />
{{-- google fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Lato:wght@300;400;700&family=Marck+Script&family=Merienda:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
    rel="stylesheet">
{{-- my css --}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@livewireStyles
<!-- Scripts -->
<script src="https://kit.fontawesome.com/7d5e6558a7.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
