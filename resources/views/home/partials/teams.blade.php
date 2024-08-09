    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Your section code -->
<section id="teams" class="bg-cover bg-center bg-no-repeat mt-28 px-10 py-24 relative w-full z-1" style="background-image: url('assets/images/pexels-belle-co-99483-1000445.jpg')">
    <div class="overlay absolute w-full h-full bg-slate-900/70 left-0 top-0 z-n1"></div>
    <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Our Team <span class="text-amber-400 leading-snug">Members</span>...</h3>
        <p class="pt-2 text-sm font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
    </div>
    <div class="flex flex-wrap justify-center mt-5 team-slider">
        @foreach ($testimonialdata as $data)
        <div class="owl-item bg-white flex flex-wrap flex-col items-start md:flex-row m-5 max-w-[530px] px-6 py-5 rounded h-auto shadow-lg">
            <div class="mr-6 mb-4 w-24 h-24 overflow-hidden rounded-full border border-gray-300">
                <img src="{{ \App\Models\Team::renderImage($data['photo']) }}" class="w-full h-full object-cover" alt="">
            </div>
            <div class="flex-grow">
                <h5 class="font-cursive-merie text-lg p-1 leading-normal capitalize font-semibold">{{ $data['name'] }}</h5>
                <span class="pt-2 text-sm text-gray-700 font-sans-lato italic leading-relaxed">{{ $data['role'] }}</span>
                <p class="pt-3 text-sm text-gray-700 font-sans-lato leading-relaxed">{{ $data['email'] }}</p>
                <span class="pt-2 text-sm text-gray-700 font-sans-lato italic leading-relaxed">{{ $data['description'] }}</span>
            </div>
        </div>
        @endforeach
    </div>
</section>

    <script>
        $(document).ready(function(){
            $('.team-slider').owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        dots: true
                    },
                    600: {
                        items: 2,
                        nav: false,
                        dots: true
                    },
                    1000: {
                        items: 3,
                        nav: false,
                        dots: true,
                        loop: false
                    }
                }
            });
        });
    </script>
 --}}



    <!-- Testimonial Area Starts -->
<section id="testimonial" class="relative w-full z-1 mt-28 px-10 py-24" style="background-image: url('assets/images/pexels-belle-co-99483-1000445.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <span class="overlay absolute w-full h-full left-0 top-0 z-n1" style="background-color:rgba(0, 0, 0, 0.88)"></span>
      <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Our Team <span class="text-amber-400 leading-snug">Members</span>...</h3>
        <p class="pt-2 text-[14px] font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
      </div>
      <div class="flex flex-wrap justify-center mt-5 owl-carousel testimonial-slider">
        @foreach ($testimonialdata as $data)
          <div class="bg-white bg-no-repeat bg-right-top flex flex-wrap flex-col items-start md:flex-row m-5 max-w-[530px] px-6 py-5 rounded h-auto" style="background-image: url({{ $quoteImg }})">
            <div class="mr-6 mb-4 w-24 h-24 overflow-hidden rounded-full border border-gray-300">
              <img src="{{ \App\Models\Team::renderImage($data['photo']) }}" class="w-full h-full object-cover" alt="">

            </div>
            <div class="flex-grow flex-shrink basis-auto md:basis-[22rem]">
              <h5 class='font-cursive-merie text-lg p-1 leading-normal capitalize font-semibold'>{{ $data['name'] }}</h5>
              <span class="pt-4 text-[14px] text-slate-600 font-sans-lato leading-relaxed"><i>{{ $data['role'] }}</i></span>
              <p class="pt-3.5 text-[14px] text-slate-500 font-sans-lato leading-relaxed ">{{ $data['description'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
      </div>
    </section>
    <!-- Testimonial Area End -->
