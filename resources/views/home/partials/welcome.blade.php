<!-- Welcome Area Starts -->
<style>
/* Desktop styles */
#about-desktop {
    display: flex;
    flex-direction: row;
    padding: 50px 150px 0 150px;
}

#about-mobile {
    display: none;
    flex-direction: column;
    padding: 30px 20px;
}

.basis-\[400px\] p {
    padding-top: 1rem;
    font-size: 14px;
    font-family: 'Lato', sans-serif;
    color: #64748b; /* slate-600 */
    line-height: 1.625; /* leading-relaxed */
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

/* Mobile-specific adjustments */
@media (max-width: 1024px) {
    #about-desktop {
        display: none; /* Hide desktop layout */
    }

    #about-mobile {
        display: flex; /* Show mobile layout */
    }

    .ceo-content {
        text-align: center; /* Center text on mobile */
        padding-top: 1.5rem; /* Add spacing between image and text */
    }
}
</style>

<section id="about" class="my-16 mx-8 md:mx-16 lg:my-20 lg:mx-32">
    <!-- Desktop View -->
    <div id="about-desktop" class="w-full py-8 lg:py-12">
        <!-- Image Container -->
        <div class="w-1/2 px-4">
            <img class="h-auto w-full object-cover" src="{{ $settings->about_us_image($settings->about_us_image) ?? '' }}" alt="welcome food image" />
        </div>

        <!-- Text Container -->
        <div class="w-1/2 px-4 flex flex-col justify-center">
            <h3 class="font-bold text-4xl mb-4">
                <span class="text-amber-400 leading-snug">Welcome</span> <br /><span class="leading-normal">Maha Spice and Food Product</span>
            </h3>

            {!! \Illuminate\Support\Str::limit($settings->about_us, 800, '....') !!}
            <br>
            <a href="{{ route('about') }}" class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 bg-lime-400 uppercase text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400" style="background-color:#F9EA50;">
                Read More
            </a>
        </div>
    </div>

    <!-- Mobile View -->
    <div id="about-mobile" class="w-full py-8 lg:py-12">
        <!-- Image Container -->
        <div class="w-full px-4">
            <img class="h-auto w-full object-cover" src="{{ $settings->about_us_image($settings->about_us_image) ?? '' }}" alt="welcome food image" />
        </div>

        <!-- Text Container -->
        <div class="w-full px-4 flex flex-col justify-center">
            <h3 class="font-bold text-4xl mb-4">
                <span class="text-amber-400 leading-snug">Welcome</span> <br /><span class="leading-normal">Maha Spice and Food Product</span>
            </h3>

            {!! \Illuminate\Support\Str::limit($settings->about_us, 800, '....') !!}
            <br>
            <a href="{{ route('about') }}" class="inline-block rounded-sm shadow-md mt-7 px-5 py-3  uppercase text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400"
             style="background-color:#F9EA50;">
                Read More
            </a>
        </div>
    </div>
</section>
<!-- Welcome Area End -->
