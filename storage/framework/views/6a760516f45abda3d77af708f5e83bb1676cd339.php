<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin,'dealer' => $dealers]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin),'dealer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($dealers)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Dealers</h1>
        <a href="<?php echo e(route('dealers.create')); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add Dealer</a>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php $__currentLoopData = $dealers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dealer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="max-w-sm rounded overflow-hidden shadow-lg p-4 bg-white">
                    <div class="font-bold text-xl mb-2"><?php echo e($dealer->name); ?></div>
                    <p class="text-gray-700 text-base"><strong>Contact No:</strong> <?php echo e($dealer->contact_no); ?></p>
                    <p class="text-gray-700 text-base"><strong>Contact Person:</strong> <?php echo e($dealer->contact_person); ?></p>
                    <p class="text-gray-700 text-base"><strong>Address:</strong> <?php echo e($dealer->address); ?></p>
                    <p class="text-gray-700 text-base"><strong>Proprietor Name:</strong> <?php echo e($dealer->proprietor_name); ?></p>
                    <p class="text-gray-700 text-base"><strong>Google Address:</strong> <?php echo e($dealer->google_address); ?></p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="<?php echo e(route('dealers.edit', $dealer->id)); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="<?php echo e(route('dealers.destroy', $dealer->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal)): ?>
<?php $component = $__componentOriginal; ?>
<?php unset($__componentOriginal); ?>
<?php endif; ?>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/dealers/index.blade.php ENDPATH**/ ?>