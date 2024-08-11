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
        #bannerSection {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            position: relative;
            height: 500px;
        }
        .banner-content {
            position: relative;
            z-index: 2;
        }
    </style>

<section id="bannerSection" class="relative h-96 overflow-hidden">
    <div class="overlay"></div>

    <div class="absolute inset-0 flex items-center justify-center text-white">
        <h1 class="text-4xl font-bold">{{ $title ?? '' }}</h1>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageUrl = @json($banner_image->image_url ?? '');
        if (imageUrl) {
            document.getElementById('bannerSection').style.backgroundImage = `url(${imageUrl})`;
        }
    });
</script>
