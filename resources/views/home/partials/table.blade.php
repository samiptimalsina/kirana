  <section id="book" class="py-32 px-4 md:px-32 bg-no-repeat bg-center bg-cover w-full relative z-1 text-center"
      style="background-image: url('assets/images/green-peas.jpg')">
      <span class="overlay absolute w-full h-full bg-slate-900/70 left-0 top-0 z-n1"></span>
      <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
          <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Book <span
                  class="text-amber-400 leading-snug">your</span> Product</h3>
          <p class="pt-2 text-[14px] font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above
              let moveth bearing darkness.</p>
      </div>

        <form action="{{ route('reservation.product') }}" method="post" enctype="multipart/form-data"
            class="bg-slate-800/75 border-2 inline-block mx-5 md:mx-0 px-1.5 md:px-6 py-4 pb-5 md:py-8 md:pb-8 shadow-md">
            @csrf
            <div class="flex flex-wrap items-center justify-center">
                <div class="m-3 relative">
                    <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-user text-[14px]"></i></span>
                    <input type="text" id="name" name="name"
                        class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed @error('name') border-red-500 @enderror"
                        placeholder="Your name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="m-3 relative">
                    <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-phone text-[14px]"></i></span>
                    <input type="text" id="phone" name="phone"
                        class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed @error('phone') border-red-500 @enderror"
                        placeholder="Phone Number" value="{{ old('phone') }}" required>
                    @error('phone')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-center">
                <div class="m-3 relative">
                    <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-shopping-cart text-[14px]"></i></span>
                    <input type="text" id="product" name="product_name"
                        class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed @error('product_name') border-red-500 @enderror"
                        placeholder="Product Name" value="{{ old('product_name') }}" required>
                    @error('product_name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="m-3 relative">
                    <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-border-none text-[14px]"></i></span>
                    <select name="person" required id="person"
                        class="w-48 md:w-32 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed @error('person') border-red-500 @enderror">
                        <option value="" disabled selected>QTY</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    @error('person')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
    <div class="m-3 relative">
        <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-home text-[14px]"></i></span>
        <input type="text" id="address" name="address"
            class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed @error('address') border-red-500 @enderror"
            placeholder="Your Address" value="{{ old('address') }}">
        @error('address')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
    </div>
            <div class="text-center">
                <button type="submit"
                    class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 bg-lime-400 uppercase font-sans-monts text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400 hover:text-slate-100">Book
                    a Product</button>
            </div>
        </form>


  </section>
