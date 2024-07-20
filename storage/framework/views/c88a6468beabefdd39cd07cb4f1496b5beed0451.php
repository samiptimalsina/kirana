    



    <!-- Testimonial Area Starts -->
<section id="testimonial" class="relative w-full z-1 mt-28 px-10 py-24" style="background-image: url('assets/images/pexels-belle-co-99483-1000445.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <span class="overlay absolute w-full h-full left-0 top-0 z-n1" style="background-color: rgba(255, 0, 0, 0.6);"></span>
      <div class="m-4 max-w-md mt-5 p-4 text-center text-white mx-auto">
        <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">Our Team <span class="text-amber-400 leading-snug">Members</span>...</h3>
        <p class="pt-2 text-[14px] font-sans-lato text-slate-100 leading-relaxed">Beast kind form divide night above let moveth bearing darkness.</p>
      </div>
      <div class="flex flex-wrap justify-center mt-5 owl-carousel testimonial-slider">
        <?php $__currentLoopData = $testimonialdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="bg-white bg-no-repeat bg-right-top flex flex-wrap flex-col items-start md:flex-row m-5 max-w-[530px] px-6 py-5 rounded h-auto" style="background-image: url(<?php echo e($quoteImg); ?>)">
            <div class="mr-6 mb-4 w-24 h-24 overflow-hidden rounded-full border border-gray-300">
              <img src="<?php echo e(\App\Models\Team::renderImage($data['photo'])); ?>" class="w-full h-full object-cover" alt="">

            </div>
            <div class="flex-grow flex-shrink basis-auto md:basis-[22rem]">
              <h5 class='font-cursive-merie text-lg p-1 leading-normal capitalize font-semibold'><?php echo e($data['name']); ?></h5>
              <span class="pt-4 text-[14px] text-slate-600 font-sans-lato leading-relaxed"><i><?php echo e($data['role']); ?></i></span>
              <p class="pt-3.5 text-[14px] text-slate-500 font-sans-lato leading-relaxed "><?php echo e($data['description']); ?></p>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      </div>
    </section>
    <!-- Testimonial Area End -->
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/partials/teams.blade.php ENDPATH**/ ?>