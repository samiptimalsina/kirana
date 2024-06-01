<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('home.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('home.partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.header', ['navdata' => $navdata], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.page-bannner', ['title' => 'Blogs'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <main class="container mx-auto py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog cards here -->
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white shadow-md rounded-lg p-4">
                <div class="mb-4">
                    <img src="<?php echo e(asset('assets/image/'. $blog->image )); ?>" alt="<?php echo e($blog->title); ?>" class="w-full rounded-lg">
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-2"><?php echo e($blog->title); ?></h2>
                <p class="text-gray-600 mb-4"><?php echo e($blog->excerpt); ?></p>
                <a href="<?php echo e(route('blogs.detail', $blog->id)); ?>" class="text-blue-500 hover:underline">Read more</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>
    <!-- End Blog List Section -->

    <?php echo $__env->make('home.partials.table', ['tableBg' => 'assets/images/table-bg.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/home/blogs.blade.php ENDPATH**/ ?>