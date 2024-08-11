<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<style>
    /* Custom styles */
    .banner-image {
        width: 100%;
        height: auto; /* Maintain aspect ratio */
        max-height: 600px; /* Constrain image height */
        object-fit: cover;
    }
    #bannerSection {
        height: auto; /* Adjust height based on content */
        max-height: 600px; /* Constrain section height */
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    .banner-content {
        position: absolute; /* Ensure content stays centered */
        z-index: 2;
        text-align: center;
    }
</style>
@if(Route::currentRouteName() === 'shop')

<section id="bannerSection">
    <!-- Image tag -->
    <img id="bannerImage" class="banner-image" src="{{ $banner_image->image_url ?? '' }}" alt="Banner Image" style="height: 400px;">

    <div class="absolute inset-0 bg-black opacity-40"></div>

    <div class="banner-content text-white">
        <h1 class="text-4xl font-bold">{{ $title ?? '' }}</h1>
    </div>
</section>
@else
<section id="bannerSection">
    <!-- Image tag -->
    <img id="bannerImage" class="banner-image" src="{{ $banner_image->image_url ?? '' }}" alt="Banner Image">

    <div class="absolute inset-0 bg-black opacity-40"></div>

    <div class="banner-content text-white">
        <h1 class="text-4xl font-bold">{{ $title ?? '' }}</h1>
    </div>
</section>
@endif
