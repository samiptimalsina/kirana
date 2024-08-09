<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('home.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('home.partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.header', ['navdata' => $navdata], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home.partials.page-bannner', ['title' => 'Deallers'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Dealers</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php $__currentLoopData = $dealers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dealer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="max-w-sm rounded overflow-hidden shadow-lg p-4 bg-white">
                <div class=" items-center mb-2">
                    <i class="fas fa-check-circle text-green-500 "></i>
                    <strong class="text-xl">Dealer Name:</strong>
                    <span class="ml-2"><?php echo e($dealer->name); ?></span>
                </div>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-phone mr-2"></i>
                    <strong>Contact No:</strong>
                    <span class="ml-2 hidden"><?php echo e($dealer->contact_no); ?></span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-user-friends mr-2"></i>
                    <strong>Contact Person:</strong>
                    <span class="ml-2"><?php echo e($dealer->contact_person); ?></span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <strong>Address:</strong>
                    <span class="ml-2"><?php echo e($dealer->address); ?></span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-user-tie mr-2"></i>
                    <strong>Proprietor Name:</strong>
                    <span class="ml-2"><?php echo e($dealer->proprietor_name); ?></span>
                </p>
                <p class="flex items-center text-gray-700 text-base">
                    <i class="fas fa-globe mr-2"></i>
                    <strong>Google Address:</strong>
                    <span class="ml-2"><?php echo $dealer->google_address; ?></span>
                </p>
                <div class="mt-4">
               <?php echo $dealer->google_address; ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>



    <?php echo $__env->make('home.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('home.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/samiptimalsina/betal.techzillasoft.com/resources/views/home/dealers.blade.php ENDPATH**/ ?>