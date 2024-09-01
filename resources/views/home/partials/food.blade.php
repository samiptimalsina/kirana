    <!-- Food Area starts -->
    <section id="menu" class="bg-no-repeat bg-[right_top_15rem] md:bg-right-top pt-8  w-full"
        style="background-image: url({{ $foodBg }})">
        <div class="flex flex-col justify-around items-center food-sm:items-start max-w-[980px] mx-auto">
            <div class="food-sm:text-left m-4 max-w-sm mt-5 p-4 text-center">
<h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">
    <span class="text-amber-400 leading-snug">We provide </span> <br /><span class="leading-normal">quality product</span>
</h3>

                <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">
                    Our snacks comes with many varients and unique taste. Our snacks includes crunchy sticks, Noodle crunch, Namkeen, Dalmotes, kurkure . We give utmost importance towards the packaging of whole assortment in order to protect our snacks from moisture and dust.
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

@if(Route::currentRouteName() === 'index')
    <div class="mt-10" style="text-align: center; background: yellow; margin-left: auto; margin-right: auto;">
        <a href="{{ route('shop') }}"
           class="bg-yellow-400 text-white py-2 px-4 rounded hover:bg-yellow-500 transition focus:outline-none"
           style="margin-left: auto; margin-right: auto; display: inline-block; color: black;">
            View More
        </a>
    </div>
    @else
        <div class="mt-10">
                {{ $fooddata->links()  }}
        </div>

@endif

        </div>

    </section>
    <br/>
    <br/>
    <!-- Food Area End -->



