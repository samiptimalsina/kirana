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

    /* Fade out and slide up for title */
    .fade-out-title {
        animation: fadeOutUp 5s forwards;
    }

    /* Fade in and slide down for title */
    .fade-in-title {
        animation: fadeInDown 4s forwards;
    }

    /* Fade out and slide up for description */
    .fade-out-description {
        animation: fadeOutUp 5s forwards;
        animation-delay: 1s; /* Start fade-out after title animation */
    }

    /* Fade in and slide down for description */
    .fade-in-description {
        animation: fadeInDown 6s forwards;
        animation-delay: 4s; /* Start fade-in after title fades in */
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

            // Apply fade-out to both title and description
            titleText.classList.add('fade-out-title');
            descriptionText.classList.add('fade-out-description');

            // Wait for fade-out to complete
            setTimeout(() => {
                // Update content
                if (images.length > 0) {
                    currentIndex = (currentIndex + 1) % images.length;
                }

                bannerSection.style.backgroundImage = `url('${images[currentIndex]?.image_url ?? ''}')`;
                titleText.innerHTML = images[currentIndex]?.title ?? '';
                descriptionText.innerHTML = images[currentIndex]?.description ?? '';

                // Remove fade-out classes
                titleText.classList.remove('fade-out-title');
                descriptionText.classList.remove('fade-out-description');

                // Apply fade-in to title and description
                titleText.classList.add('fade-in-title');

                setTimeout(() => {
                    descriptionText.classList.add('fade-in-description');
                }, 500); // Delay before description fade-in starts

                // Clean up classes after animations complete
                setTimeout(() => {
                    titleText.classList.remove('fade-in-title');
                    descriptionText.classList.remove('fade-in-description');
                }, 10000); // Duration of the entire animation cycle

            }, 5000); // Duration of fade-out animation
        }

        // Initial content load
        changeContent();

        // Change content every 10 seconds to match the full animation cycle
        setInterval(changeContent, 10000);
    });
</script>
