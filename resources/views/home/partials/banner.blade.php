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
        animation: fadeOut 2s forwards;
    }

    .fade-in {
        animation: fadeIn 2s forwards;
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

            // Apply fade-out animation to the text
            titleText.classList.add('fade-out');
            descriptionText.classList.add('fade-out');

            // Wait for the fade-out to finish
            setTimeout(() => {
                // Update the currentIndex for the next slide
                if (images.length > 0) {
                    currentIndex = (currentIndex + 1) % images.length;
                }

                // Change background image and text content after fade-out
                bannerSection.style.backgroundImage = `url('${images[currentIndex]?.image_url ?? ''}')`;
                titleText.innerHTML = images[currentIndex]?.title ?? '';
                descriptionText.innerHTML = images[currentIndex]?.description ?? '';

                // Remove fade-out class to reset the animation
                titleText.classList.remove('fade-out');
                descriptionText.classList.remove('fade-out');

                // Apply fade-in animation to the text
                titleText.classList.add('fade-in');
                descriptionText.classList.add('fade-in');

                // Remove fade-in class after animation to reset
                setTimeout(() => {
                    titleText.classList.remove('fade-in');
                    descriptionText.classList.remove('fade-in');
                }, 1000); // Duration of fade-in animation

            }, 1000); // Duration of fade-out animation
        }

        // Initial content load
        changeContent();

        // Change content every 3 seconds
        setInterval(changeContent, 3000);
    });
</script>
