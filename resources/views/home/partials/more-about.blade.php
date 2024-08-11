<style>
    /* Improved CSS specificity */
    .basis-\[400px\] p {
        padding-top: 1rem;
        /* 4 * 0.25rem = 1rem */
        font-size: 14px;
        font-family: 'Lato', sans-serif;
        color: #64748b;
        /* slate-600 */
        line-height: 1.625;
        /* leading-relaxed */
    }
</style>

<section id="about" class="py-12 px-6 md:px-12 lg:py-16 lg:px-24 bg-gray-50">


    <div class="py-12 px-6 md:px-12 lg:py-16 lg:px-24 bg-gray-50">
        <h3 class="text-3xl lg:text-4xl font-bold mb-4">
            <span class="text-amber-400">Welcome</span> <br />
            <span class="text-gray-800">Maha Spice and Food Product</span>
        </h3>

        <p class="text-lg text-gray-700 leading-relaxed">
            {!! $settings->about_us !!}
        </p>
    </div>
        <div class="relative">
        <img class="h-auto w-full max-w-full object-cover rounded-lg shadow-lg" src="{{ $settings->about_us_image($settings->about_us_image) ?? '' }}" alt="Welcome Food Image" />
    </div>
</section>

