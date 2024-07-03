<section id="teams" class="bg-cover bg-center bg-no-repeat mt-28 px-10 py-24 relative w-full z-1" style="background-image: url('assets/images/pexels-belle-co-99483-1000445.jpg')">
    <div class="overlay absolute w-full h-full bg-slate-900/70 left-0 top-0 z-n1"></div>
    <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Our Team <span class="text-amber-400 leading-snug">Member</span>...</h3>
        <p class="pt-2 text-sm font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
    </div>
    <div class="flex flex-wrap justify-center mt-5">
        @foreach ($testimonialdata as $data)
        <div class="bg-white flex flex-wrap flex-col items-start md:flex-row m-5 max-w-[530px] px-6 py-5 rounded h-auto shadow-lg">
            <div class="mr-6 mb-4 w-24 h-24 overflow-hidden rounded-full border border-gray-300">
                <img src=" {{ \App\Models\Team::renderImage($data['photo']) }}" class="w-full h-full object-cover" alt="">
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
