  <!-- Banner Area Starts -->
  <section id="home"
      class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat"
      style="background-image: url(<?php echo e($banner_image->image_url); ?>)">
      
      <h1 class="font-cursive-merie text-white text-center leading-normal text-6xl">
          <span class="text-amber-400"><?php echo e($banner->title ?? ''); ?></span><br />
          <span class="text-amber-400"><?php echo e($banner->description ?? ''); ?></span>
      </h1>
  </section>
  <!-- Banner Area End -->
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/partials/banner.blade.php ENDPATH**/ ?>