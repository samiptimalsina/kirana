<section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
    style="background-image: url('<?php echo e($banner_images[0]->image_url ?? ''); ?>')">
    <h1 id="banner-title" class="font-cursive-merie text-white text-center leading-normal text-6xl">
        <span id="banner-title-text" class="text-amber-400"> <?php echo $banner_images[0]->title ?? ''; ?></span><br />
        <span id="banner-description" class="text-amber-400"><?php echo $banner_images[0]->description ?? ''; ?></span>
    </h1>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = <?php echo json_encode($banner_images ?? [], 15, 512) ?>;
        let currentIndex = 0;

        function changeContent() {
            if (images.length === 0) return;

            currentIndex = (currentIndex + 1) % images.length;
            const bannerSection = document.getElementById('home');
            const titleText = document.getElementById('banner-title-text');
            const descriptionText = document.getElementById('banner-description');

            // Set background image
            bannerSection.style.backgroundImage = `url('${images[currentIndex].image_url}')`;

            // Set title and description, ensuring HTML content is correctly handled
            titleText.innerHTML = images[currentIndex].title; // Using innerHTML to handle any HTML in title
            descriptionText.innerHTML = images[currentIndex].description; // Using innerHTML to handle any HTML in description
        }

        // Initial content load
        changeContent();

        // Change content periodically
        setInterval(changeContent, 5000);
    });
</script>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/partials/banner.blade.php ENDPATH**/ ?>