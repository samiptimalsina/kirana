<!doctype html>
<html>
<head>
    @include('home.partials.head')

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css">
    <style>
        .light-slider .lSSlideOuter .lSPager.lSGallery img {
            max-height: 60px;
            border-radius: 0.5rem;
        }

        .custom-button:hover {
            background-color: transparent;
            color: #d97706;
            border-color: #d97706;
        }

        .custom-button {
            transition: all 0.3s ease-in-out;
        }

        .custom-input {
            position: relative;
            padding-left: 2.5rem;
        }

        .custom-input i {
            position: absolute;
            top: 50%;
            left: 0.75rem;
            transform: translateY(-50%);
            color: #4b5563; /* Change the icon color if needed */
        }
    </style>

</head>
<body class="bg-gray-100 font-sans">
    @include('home.partials.header', ['navdata' => $navdata])
            <br/>
            <br/>
    <div class="container mx-auto mt-20 mb-10 px-4" style="margin-top:120px;">
        <div class="flex flex-wrap -mx-2 mt-20 bg-white p-6 rounded-lg shadow-lg">
            <div class="w-full md:w-5/12 px-2 mb-4 md:mb-0">
                <div class="demo">
                    <ul id="lightSlider">
                        @if(is_array($product->img))
                            @foreach($product->img as $image)
                                <li data-thumb="{{ asset($image) }}">
                                    <img class="w-full rounded-lg" src="{{ asset($image) }}" alt="{{ $product->name }}" />
                                </li>
                            @endforeach
                        @else
                            <li data-thumb="{{ asset($product->img) }}">
                                <img class=" w-full rounded-lg" src="{{ asset($product->img) }}" alt="{{ $product->name }}" />
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-7/12 px-2">
            <h3 class="font-bold font-cursive-merie text-4xl">
                <span class="text-amber-400 leading-snug">{{ $product->name ?? '' }}</span> <br />
                <span class="text-amber-400 group-hover:text-slate-600 p-1 text-right">Rs{{ $product->price }}</span>
            </h3>
            <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">

                {{ $product->desc ?? '' }}
                <span class="block mt-3"></span>

            </p>
                <form action="{{ route('reservation.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="food_id" value="{{ $product->id }}">
                    <div class=" -mx-2 mb-4">
                        <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0 custom-input">
                            <i class="fa fa-user text-sm"></i>
                            <input type="text" id="name" name="name" class="w-full rounded pl-10 py-3 text-gray-700 border focus:border-amber-500 focus:ring-amber-500" placeholder="Your name">
                        </div>
                        <div class="w-full md:w-1/2 px-2 custom-input my-2">
                            <i class="fa fa-phone text-sm"></i>
                            <input type="text" id="phone" name="phone" class="w-full rounded pl-10 py-3 text-gray-700 border focus:border-amber-500 focus:ring-amber-500" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-2 mb-4">
                        <div class="w-full md:w-1/2 px-2 custom-input">
                            <i class="fa fa-border-none text-sm"></i>
                            <select name="person" id="person" class="w-full rounded pl-10 py-3 text-gray-700 border focus:border-amber-500 focus:ring-amber-500" required>
                                <option value="0" disabled selected>QTY</option>
                                @for($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="text-left ">
                        <button type="submit" class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 mx-8 bg-amber-500 uppercase text-sm font-bold text-white border border-transparent transition ease-in-out duration-300 custom-button">
                            Book a Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('home.partials.footer')

    @include('home.partials.script')
    <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
    <script>
        $(document).ready(function() {
            $("#lightSlider").lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                thumbItem: 9,
                slideMargin: 0,
                enableDrag: false,
                currentPagerPosition: 'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#lightSlider .lslide'
                    });
                }
            });
        });
    </script>
</body>
</html>
