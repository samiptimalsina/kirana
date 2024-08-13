<section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ $banner_images[0]->image_url ?? '' }}')">
    <h1 id="banner-title" class="font-cursive-merie text-white text-center leading-normal text-6xl">
        <span id="banner-title-text" class="text-amber-400">{!! $banner_images[0]->title ?? '' !!}</span><br />
        <span id="banner-description" class="text-amber-400">{!! $banner_images[0]->description ?? '' !!}</span>
    </h1>
</section>

<style>
    /* Fade out animation */
    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    /* Fade in animation */
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    /* Apply fade out and fade in animations */
    .fade-out {
        animation: fadeOut 1s forwards;
    }

    .fade-in {
        animation: fadeIn 4s forwards;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = @json($banner_images ?? []);
        let currentIndex = 0;

        function changeContent() {
            const bannerSection = document.getElementById('home');
            const titleText = document.getElementById('banner-title-text');
            const descriptionText = document.getElementById('banner-description');

            // Fade out the title first
            titleText.classList.add('fade-out');

            // After the title fades out, fade out the description
            setTimeout(() => {
                descriptionText.classList.add('fade-out');
            }, 2000); // Delay before starting description fade out

            // Wait for both to finish fading out
            setTimeout(() => {
                // Update the currentIndex for the next slide
                if (images.length > 0) {
                    currentIndex = (currentIndex + 1) % images.length;
                }

                // Change background image and text content after fade-out
                bannerSection.style.backgroundImage = `url('${images[currentIndex]?.image_url ?? ''}')`;
                titleText.innerHTML = images[currentIndex]?.title ?? '';
                descriptionText.innerHTML = images[currentIndex]?.description ?? '';

                // Fade in the title first
                titleText.classList.remove('fade-out');
                titleText.classList.add('fade-in');

                // After the title fades in, fade in the description
                setTimeout(() => {
                    descriptionText.classList.remove('fade-out');
                    descriptionText.classList.add('fade-in');
                }, 3000); // Delay before starting description fade in

                // Remove fade-in classes after animations complete
                setTimeout(() => {
                    titleText.classList.remove('fade-in');
                    descriptionText.classList.remove('fade-in');
                }, 9000); // Duration of fade-in + delay

            }, 3000); // Duration of fade-out animation
        }

        // Initial content load
        changeContent();

        // Change content every 3 seconds
        setInterval(changeContent, 12000);
    });
</script>
