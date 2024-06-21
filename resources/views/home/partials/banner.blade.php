  <!-- Banner Area Starts -->
  <section id="home"
      class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
      style="background-image: url({{ $banner_image->image_url ?? '' }})">
      {{-- <h6 class="font-sans-lato text-lime-600 font-bold capitalize text-base leading-loose">the most interesting food in the world</h6> --}}
      <h1 class="font-cursive-merie text-white text-center leading-normal text-6xl">
          <span class="text-amber-400">{{ $banner->title ?? '' }}</span><br />
          <span class="text-amber-400">{{ $banner->description ?? '' }}</span>
      </h1>
  </section>
  <!-- Banner Area End -->
