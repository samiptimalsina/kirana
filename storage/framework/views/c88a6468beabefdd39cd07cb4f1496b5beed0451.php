<section id="teams" class="bg-cover bg-center bg-no-repeat mt-28 px-10 py-24 relative w-full z-1" style="background-image: url('assets/images/testimonial-bg.jpg')">
    <div class="overlay absolute w-full h-full bg-slate-900/70 left-0 top-0 z-n1"></div>
    <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Our Teams <span class="text-amber-400 leading-snug">say</span>...</h3>
        <p class="pt-2 text-sm font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
    </div>
    <div class="flex flex-wrap justify-center mt-5">
        <?php $__currentLoopData = $testimonialdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white flex flex-wrap flex-col items-start md:flex-row m-5 max-w-[530px] px-6 py-5 rounded h-auto shadow-lg">
            <div class="mr-6 mb-4 w-24 h-24 overflow-hidden rounded-full border border-gray-300">
                <img src="<?php echo e($data['img']); ?>" class="w-full h-full object-cover" alt="">
            </div>
            <div class="flex-grow">
                <h5 class="font-cursive-merie text-lg p-1 leading-normal capitalize font-semibold"><?php echo e($data['name']); ?></h5>
                <span class="pt-2 text-sm text-gray-700 font-sans-lato italic leading-relaxed"><?php echo e($data['bio']); ?></span>
                <p class="pt-3 text-sm text-gray-700 font-sans-lato leading-relaxed"><?php echo e($data['review']); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/partials/teams.blade.php ENDPATH**/ ?>