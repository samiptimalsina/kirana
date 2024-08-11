<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<style>
    /* Custom styles */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4); /* Dark overlay */
    }
    .banner-content {
        position: relative;
        z-index: 2;
    }
    .banner-image {
        width: 100%;
        height: auto; /* Maintain aspect ratio */
        max-height: 600px; /* Constrain image height */
        object-fit: cover;
    }
    #bannerSection {
        height: auto; /* Adjust height based on content */
        max-height: 600px; /* Constrain section height */
    }
</style>

<section id="bannerSection" class="relative overflow-hidden">
    <!-- Image tag -->
    <img id="bannerImage" class="banner-image" src="{{ $banner_image->image_url ?? '' }}" alt="Banner Image">

    <div class="overlay"></div>

    <div class="absolute inset-0 flex items-center justify-center text-white banner-content">
        <h1 class="text-4xl font-bold">{{ $title ?? '' }}</h1>
    </div>
</section>
