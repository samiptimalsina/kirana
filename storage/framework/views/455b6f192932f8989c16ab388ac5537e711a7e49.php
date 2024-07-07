<!-- Welcome Area Starts -->
<style>
/* Improved CSS specificity */
.basis-\[400px\] p {
    padding-top: 1rem; /* 4 * 0.25rem = 1rem */
    font-size: 14px;
    font-family: 'Lato', sans-serif;
    color: #64748b; /* slate-600 */
    line-height: 1.625; /* leading-relaxed */
}
#ceo-message {
    max-width: 1200px;
    margin: 0 auto;
    padding:2rem; /* Adjust padding as needed */
}

/* Flexbox layout for the CEO message */
.ceo-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 2rem; /* Space between image and content */
}

/* Image styles */
.ceo-image {
    flex: 1 1 40%; /* Flex grow, shrink, basis */
    max-width: 300px;
    margin: 0 auto; /* Center the image */
}

.ceo-image img {
    width: 100%;
    height: auto;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Content styles */
.ceo-content {
    flex: 1 1 60%; /* Flex grow, shrink, basis */
    text-align: left;
    color: #64748b; /* Text color */
}

.ceo-content h3 {
    font-family: 'Cursive Merie', cursive;
    font-size: 2rem; /* Adjust as needed */
    margin-bottom: 0.5rem;
    color: #1e293b; /* Darker text color */
}

.ceo-content p {
    font-family: 'Lato', sans-serif;
    font-size: 1rem;
    line-height: 1.625; /* Leading relaxed */
    margin-bottom: 1rem;
}

.ceo-content .ceo-name {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.25rem;
    font-weight: bold;
    color: #1e293b; /* Darker text color */
}

.ceo-content .ceo-position {
    font-family: 'Montserrat', sans-serif;
    font-size: 1rem;
    color: #a3e635; /* Lime color */
}
</style>

<section id="about" class="flex flex-wrap item-center justify-center lg-p-0 lg:justify-between lg:p-0 lg:pt-28  max-w-[960px] mx-auto p-5">
    <div class="basis-[500px] grow-0 pr-5">
        <img class="h-auto w-full" src="<?php echo e($settings->about_us_image($settings->about_us_image) ?? ''); ?>" alt="welcome food image" />
    </div>

    <div class="basis-[400px] grow max-w-[650px] p-5">
        <h3 class="font-bold font-cursive-merie text-4xl">
            <span class="text-amber-400 leading-snug">welcome</span> <br /><span class="leading-normal">Maha spice and food Product</span>
        </h3>

        <?php if(Route::currentRouteName() == 'about'): ?>
            <?php echo $settings->about_us; ?>

        <?php else: ?>
            <?php echo \Illuminate\Support\Str::limit($settings->about_us, 822, ''); ?>

            <br>

            <a href="<?php echo e(route('about')); ?>"
            class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 bg-lime-400 uppercase font-sans-monts text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400">
                Read More
            </a>
        <?php endif; ?>


    </div>
</section>

<?php if(Route::currentRouteName() == 'about'): ?>

<section id="ceo-message">
    <div class="ceo-container">
        <div class="ceo-content">
            <h3>Welcome Message</h3>
            <p>
                Welcome to our company! At Maha Spice and Food Product, we are dedicated to providing the highest quality products and exceptional service. Our commitment to excellence drives everything we do, and we are proud to serve our customers with passion and integrity.
            </p>
            <p class="ceo-name">Madan Raj Neupane</p>
            <p class="ceo-position">Chief Executive Officer</p>
        </div>
        <div class="ceo-image">
            <img src="<?php echo e($settings->about_us_image($settings->about_us_image) ?? ''); ?>" alt="CEO Image" />
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Welcome Area End -->
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/partials/welcome.blade.php ENDPATH**/ ?>