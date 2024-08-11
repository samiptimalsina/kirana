<style>
/* Improved CSS specificity */
.basis-\[400px\] p {
    padding-top: 1rem; /* 4 * 0.25rem = 1rem */
    font-size: 14px;
    font-family: 'Lato', sans-serif;
    color: #64748b; /* slate-600 */
    line-height: 1.625; /* leading-relaxed */
}
</style>


<section id="about" class="flex flex-wrap items-center justify-center lg:justify-between max-w-[960px] mx-auto p-5">
    <div class="flex justify-center basis-[500px] grow-0 pr-5">
        <img class="h-auto w-full max-w-full object-cover" src="{{ $settings->about_us_image($settings->about_us_image) ?? '' }}" alt="welcome food image" />
    </div>

    <div class="basis-[400px] grow max-w-[650px] p-5">
        <h3 class="font-bold text-4xl">
            <span class="text-amber-400 leading-snug">welcome</span> <br /><span class="leading-normal">Maha spice and food Product</span>
        </h3>

            {!! $settings->about_us !!}

    </div>
</section>


