<!doctype html>
<html>
<head>
    <?php echo $__env->make('home.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <?php echo $__env->make('home.partials.header', ['navdata' => $navdata], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mx-auto mt-20 mb-10 px-4" style="margin-top:20px;">
        <div class="flex flex-wrap -mx-2 mt-20 bg-white p-6 rounded-lg shadow-lg">
            <br/>
            <br/>
            <br/>
            <div class="w-full md:w-5/12 px-2 mb-4 md:mb-0">
                <div class="demo">
                    <ul id="lightSlider">
                        <?php if(is_array($product->img)): ?>
                            <?php $__currentLoopData = $product->img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-thumb="<?php echo e(asset($image)); ?>">
                                    <img class="w-full rounded-lg" src="<?php echo e(asset($image)); ?>" alt="<?php echo e($product->name); ?>" />
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <li data-thumb="<?php echo e(asset($product->img)); ?>">
                                <img class=" w-full rounded-lg" src="<?php echo e(asset($product->img)); ?>" alt="<?php echo e($product->name); ?>" />
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-7/12 px-2">
            <h3 class="font-bold font-cursive-merie text-4xl">
                <span class="text-amber-400 leading-snug"><?php echo e($product->name ?? ''); ?></span> <br />
                <span class="text-amber-400 group-hover:text-slate-600 p-1 text-right">Rs<?php echo e($product->price); ?></span>
            </h3>
            <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">

                <?php echo e($product->desc ?? ''); ?>

                <span class="block mt-3"></span>

            </p>
                <form action="<?php echo e(route('reservation.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="food_id" value="<?php echo e($product->id); ?>">
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
                                <?php for($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                <?php endfor; ?>
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
    <?php echo $__env->make('home.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/details.blade.php ENDPATH**/ ?>