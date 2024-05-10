<?php $__env->startSection('content'); ?>
    <div class="container">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/banners/index.blade.php ENDPATH**/ ?>