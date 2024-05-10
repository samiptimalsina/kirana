<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin)]); ?>

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Banner Details</h1>
                <ul>
                    <li><strong>ID:</strong> <?php echo e($banner->id); ?></li>
                    <li><strong>Image URL:</strong> <img src="<?php echo e($banner->image_url); ?>" class="img-fluid"
                            style="height: 400px;">
                    </li>
                    <li><strong>Title:</strong> <?php echo e($banner->title); ?></li>
                    <li><strong>Description:</strong> <?php echo e($banner->description); ?></li>
                </ul>
                <a href="<?php echo e(route('banners.index')); ?>" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/banners/show.blade.php ENDPATH**/ ?>