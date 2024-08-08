<section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
    style="background-image: url(<?php echo e($banner_images[0]?->image_url ?? ''); ?>)">
    <h1 id="banner-title" class="font-cursive-merie text-white text-center leading-normal text-6xl">
        <span id="banner-title-text" class="text-amber-400"><?php echo e($banner_images[0]->title ?? ''); ?></span><br />
        <span id="banner-description" class="text-amber-400"><?php echo isset($banner_images[0]->description) ? $banner_images[0]->description : ''; ?></span>
    </h1>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = <?php echo json_encode($banner_images ?? [], 15, 512) ?>;
        let currentIndex = 0;

        function changeContent() {
            currentIndex = (currentIndex + 1) % images.length;
            const bannerSection = document.getElementById('home');
            const titleText = document.getElementById('banner-title-text');
            const descriptionText = document.getElementById('banner-description');

            bannerSection.style.backgroundImage = `url(${images[currentIndex].image_url})`;
            titleText.textContent = images[currentIndex].title;
            descriptionText.textContent = images[currentIndex].description;
        }

        setInterval(changeContent, 5000);
    });
</script>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/partials/banner.blade.php ENDPATH**/ ?>