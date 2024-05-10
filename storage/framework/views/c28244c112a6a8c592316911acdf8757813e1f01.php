<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin)]); ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Banners</h1>
                <a href="<?php echo e(route('banners.create')); ?>" class="btn btn-primary">Create Banner</a>
                <?php if(session('success')): ?>
                    <div class="alert alert-success mt-3">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($banner->id); ?></td>
                                <td><?php echo e($banner->title); ?></td>
                                <td><img src="<?php echo e($banner->image_url); ?>" class="img-fluid"></td>
                                <td><?php echo e($banner->description); ?></td>
                                <td>
                                    <a href="<?php echo e(route('banners.show', $banner->id)); ?>" class="btn btn-info">View</a>
                                    <a href="<?php echo e(route('banners.edit', $banner->id)); ?>" class="btn btn-warning">Edit</a>
                                    <form action="<?php echo e(route('banners.destroy', $banner->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this banner?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/banners/index.blade.php ENDPATH**/ ?>