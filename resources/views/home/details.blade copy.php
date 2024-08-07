<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.head')

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css">
    <style>
        .light-slider .lSSlideOuter .lSPager.lSGallery img {
            max-height: 60px;
            border-radius: 0.5rem;
        }
    </style>
    <style>
        /* Custom CSS for login form */
        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .login-form {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <!-- Welcome Area Starts -->
    @include('home.partials.header', ['navdata' => $navdata])
    <section id="about" class="flex flex-wrap item-center justify-center lg-p-0 lg:justify-between lg:p-0 lg:pt-28 max-w-[960px] mx-auto p-5">
        <div class="basis-[500px] grow-0 pr-5">
            <ul id="lightSlider">
                @if(is_array($product->img))
                @foreach($product->img as $image)
                <li data-thumb="{{ asset($image) }}">
                    <img class="h-auto w-full rounded-lg" src="{{ asset($image) }}" alt="{{ $product->name }}" />
                </li>
                @endforeach
                @else
                <li data-thumb="{{ asset($product->img) }}">
                    <img class="h-auto w-full rounded-lg" src="{{ asset($product->img) }}" alt="{{ $product->name }}" />
                </li>
                @endif
            </ul>
        </div>

        <div class="basis-[400px] grow max-w-[650px] p-5">
            <h3 class="font-bold font-cursive-merie text-4xl">
                <span class="text-amber-400 leading-snug">{{ $product->name ?? '' }}</span> <br />
                <span class="text-amber-400 group-hover:text-slate-600 p-1 text-right">Rs{{ $product->price }}</span>
            </h3>
            <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">

                {{ $product->desc ?? '' }}
                <span class="block mt-3"></span>

            </p>

            <form action="{{ route('reservation.store') }}" method="post" enctype="multipart/form-data" class="">
                @csrf
                <div class="flex flex-wrap items-start justify-start">
                    <div class="m-3 relative">
                        <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-user text-[14px]"></i></span>
                        <input type="text" id="name" name="name" class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Your name">

                        <input type="hidden" id="name" name="food_id" class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" value="{{$product->id}}">
                    </div>
                    <div class="m-3 relative">
                        <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-phone text-[14px]"></i></span>
                        <input type="text" id="phone" name="phone" class="w-48 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="flex flex-wrap items-start justify-start">

                    <div class="m-3 relative">
                        <span class="absolute top-0 left-0 px-2.5 py-2 text-slate-700"><i class="fa-solid fa-border-none text-[14px]"></i></span>
                        <select name="person" required id="person" class="w-48 md:w-32 rounded pl-8 text-[14px] font-sans-lato text-slate-700 leading-relaxed">
                            <option value="0" disabled selected>QTY</option>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                            <option value="5">5 </option>
                            <option value="6">6 </option>
                        </select>
                    </div>
                </div>
                <div class="text-start ml-3">
                    <button type="submit" class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 bg-lime-400 uppercase font-sans-monts text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400 hover:text-slate-900">book
                        a Product</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Welcome Area End -->

    @include('home.partials.footer')

    @include('home.partials.script')



</body>

</html>