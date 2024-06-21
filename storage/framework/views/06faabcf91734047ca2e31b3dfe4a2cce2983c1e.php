    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Dark overlay */
        }
        #bannerSection{
            margin-top: 50px;
        }
    </style>

<section id="bannerSection" class="relative h-64 overflow-hidden">
        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content inside the banner -->
        <div class="absolute inset-0 flex items-center justify-center text-white">
            <h1 class="text-4xl font-bold"><?php echo e($title ?? ''); ?></h1>
        </div>
    </section>



        <script>
        // Function to fetch a random background image from Unsplash API
        async function fetchRandomImage() {
            const response = await fetch('https://source.unsplash.com/random/1600x900');
            const imageUrl = response.url;
            document.getElementById('bannerSection').style.backgroundImage = `url(${imageUrl})`;
        }

        // Call the function to set the random background image
        fetchRandomImage();
    </script>
<?php /**PATH /home/samiptimalsina/betal.techzillasoft.com/resources/views/home/partials/page-bannner.blade.php ENDPATH**/ ?>