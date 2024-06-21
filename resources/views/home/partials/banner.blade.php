    <section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ $banner_images[0]->image_url ?? '' }})">
        <h1 class="font-cursive-merie text-white text-center leading-normal text-6xl">
            <span class="text-amber-400">{{ $banner->title ?? '' }}</span><br />
            <span class="text-amber-400">{{ $banner->description ?? '' }}</span>
        </h1>
    </section>
    <!-- Banner Area End -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const images = @json($banner_images);
            let currentIndex = 0;

            function changeBackgroundImage() {
                currentIndex = (currentIndex + 1) % images.length;
                const bannerSection = document.getElementById('home');
                bannerSection.style.backgroundImage = `url(${images[currentIndex].image_url})`;
            }

            setInterval(changeBackgroundImage, 5000);
        });
    </script>
