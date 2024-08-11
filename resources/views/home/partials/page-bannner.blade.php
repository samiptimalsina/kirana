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
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        height: 500px; /* Set initial height to auto */
    }
</style>

<section id="bannerSection" class="relative overflow-hidden">
    <div class="overlay"></div>
    <div class="absolute inset-0 flex items-center justify-center text-white">
        <h1 class="text-3xl md:text-4xl font-bold">{{ $title ?? '' }}</h1>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bannerSection = document.getElementById('bannerSection');
        const imageUrl = @json($banner_image->image_url ?? '');

        function adjustBannerHeight() {
            const screenHeight = window.innerHeight;
            const bannerHeight = Math.max(300, Math.min(500, screenHeight * 0.5));
            bannerSection.style.height = `${bannerHeight}px`;
        }

        if (imageUrl) {
            bannerSection.style.backgroundImage = `url(${imageUrl})`;
        }

        adjustBannerHeight(); // Adjust height on initial load
        window.addEventListener('resize', adjustBannerHeight); // Adjust height on window resize
    });
</script>
