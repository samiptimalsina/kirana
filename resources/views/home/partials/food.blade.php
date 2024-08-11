    <!-- Food Area starts -->
    <section id="menu" class="bg-no-repeat bg-[right_top_15rem] md:bg-right-top pt-8  w-full"
        style="background-image: url({{ $foodBg }})">
        <div class="flex flex-col justify-around items-center food-sm:items-start max-w-[980px] mx-auto">
            <div class="food-sm:text-left m-4 max-w-sm mt-5 p-4 text-center">
<h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">
    <span class="text-amber-400 leading-snug">we provide</span> <br /><span class="leading-normal">quality groceries</span>
</h3>

                <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">They're fill divide i their
                    yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly
                    divide mids fish firmament on net.
                </p>
            </div>
            <div class="flex flex-wrap justify-center lg:justify-between  mt-5">

                @foreach ($fooddata as $data)
                    <div class="max-w-[290px] m-4 shadow-md group transition">
                        <a href="{{ route('admin.details', $data->slug) }}">
                            @if(is_array($data->img))
                                <img src="{{ asset(collect($data->img)->first()) }}" alt="{{ $data->name }}" style="width: 300px; height: 362px;" class="w-[300px] h-[362px]  w-full h-auto" >
                            @else
                                <img src="{{ asset($data->img) }}" alt="{{ $data->name }}" style="width: 300px; height: 362px;" class="w-[300px] h-[362px] w-full h-auto" >
                            @endif

                            <div
                                class="p-7 bg-slate-100 group-hover:bg-amber-400 transition duration-300 min-h-[170px]">
                                <div class="flex flex-wrap justify-between font-bold font-cursive-merie text-lg">
                                    <h5 class='p-1 leading-normal capitalize'>{{ $data['name'] }}</h5>
                                    <span
                                        class="text-amber-400 group-hover:text-slate-600 p-1 text-right">Rs{{ $data['price'] }}</span>
                                </div>
                                <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">
                                    {{ $data['desc'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
           <div class="mt-10">
                {{ $fooddata->links()  }}
            </div>
        </div>

    </section>
    <br/>
    <br/>
    <!-- Food Area End -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get the last scroll position
    let lastScrollPosition = parseInt(sessionStorage.getItem('scrollPosition') || '0', 10);

    // Ensure the scroll position is within 600px from the top
    if (lastScrollPosition > 1000) {
      lastScrollPosition = 1000;
    }

    // Restore scroll position
    window.scrollTo(0, lastScrollPosition);

    // Save scroll position before unloading
    window.addEventListener('beforeunload', function() {
      sessionStorage.setItem('scrollPosition', window.scrollY);
    });
  });
</script>
