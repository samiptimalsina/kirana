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
    height: 500px; /* Set height to 500px for large screens */
}

    @media (max-width: 1200px) {
        #bannerSection {
            height: 400px; /* Adjusts the height for medium-large screens */
        }
    }

    @media (max-width: 992px) {
        #bannerSection {
            height: 350px; /* Adjusts the height for medium screens */
        }
    }

    @media (max-width: 768px) {
        #bannerSection {
            height: 300px; /* Adjusts the height for tablets */
        }
    }

    @media (max-width: 576px) {
        #bannerSection {
            height: 250px; /* Adjusts the height for small mobile screens */
        }
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
