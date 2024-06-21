    <section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
        style="background-image: url(<?php echo e($banner_images[0]->image_url ?? ''); ?>)">
        <h1 class="font-cursive-merie text-white text-center leading-normal text-6xl">
            <span class="text-amber-400"><?php echo e($banner->title ?? ''); ?></span><br />
            <span class="text-amber-400"><?php echo e($banner->description ?? ''); ?></span>
        </h1>
    </section>
    <!-- Banner Area End -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const images = <?php echo json_encode($banner_images, 15, 512) ?>;
            let currentIndex = 0;

            function changeBackgroundImage() {
                currentIndex = (currentIndex + 1) % images.length;
                const bannerSection = document.getElementById('home');
                bannerSection.style.backgroundImage = `url(${images[currentIndex].image_url})`;
            }

            setInterval(changeBackgroundImage, 5000);
        });
    </script>

<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/partials/banner.blade.php ENDPATH**/ ?>