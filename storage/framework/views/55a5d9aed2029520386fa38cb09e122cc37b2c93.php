<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('home.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    					<?php if(session()->has('msg')): ?>
					<p class="alert alert-info"><?php echo e(session()->get('msg')); ?></p>
					<?php endif; ?>
    <?php echo $__env->make('home.partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.partials.header', ['navdata' => $navdata], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('home.partials.page-bannner', ['title' => "Our Shop"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->make('home.partials.food', ['fooddata' => $fooddata, 'foodBg' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php echo $__env->make('home.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/samiptimalsina/betal.techzillasoft.com/resources/views/home/shop.blade.php ENDPATH**/ ?>