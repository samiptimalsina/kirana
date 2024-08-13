<section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ $banner_images[0]->image_url ?? '' }}')">
    <h1 id="banner-title" class="font-cursive-merie text-white text-center leading-normal text-6xl">
        <span id="banner-title-text" class="text-amber-400">{!! $banner_images[0]->title ?? '' !!}</span><br />
        <span id="banner-description" class="text-amber-400">{!! $banner_images[0]->description ?? '' !!}</span>
    </h1>
</section>

<style>
    /* Fade out and slide up animation */
    @keyframes fadeOutUp {
        0% {
            opacity: 1;
            transform: translateY(0);
        }
        100% {
            opacity: 0;
            transform: translateY(-20px);
        }
    }

    /* Fade in and slide down animation */
    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Apply fade out and slide up animations */
    .fade-out {
        animation: fadeOutUp 1s forwards;
    }

    /* Apply fade in and slide down animations */
    .fade-in {
        animation: fadeInDown 2s forwards;
    }

    /* Additional fade-in delay for description */
    .fade-in-description {
        animation: fadeInDown 2s forwards;
        animation-delay: 1s; /* Delay before the description fades in */
    }

    /* Additional delay for fade out of both title and description */
    .fade-out-description {
        animation: fadeOutUp 1s forwards;
        animation-delay: 1s; /* Delay before the description fades out */
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
            }, 500); // Delay before starting description fade out

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
                }, 700); // Delay before starting description fade in

                // Remove fade-in classes after animations complete
                setTimeout(() => {
                    titleText.classList.remove('fade-in');
                    descriptionText.classList.remove('fade-in');
                }, 1500); // Duration of fade-in + delay

            }, 1000); // Duration of fade-out animation
        }

        // Initial content load
        changeContent();

        // Change content every 3 seconds
        setInterval(changeContent, 3000);
    });
</script>
