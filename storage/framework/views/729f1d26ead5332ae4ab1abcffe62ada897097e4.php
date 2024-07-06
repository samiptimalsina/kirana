<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin)]); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Blogs</h1>
        <a href="<?php echo e(route('blogs.create')); ?>" class="btn btn-primary">Create Blog</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td>
                        <?php if($blog->image): ?>
                            <img src="<?php echo e(asset('assets/images/' . $blog->image)); ?>" class="img-fluid" style="max-width: 100px;" alt="<?php echo e($blog->title); ?>">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($blog->title); ?></td>
                    <td><?php echo e(Str::limit($blog->content, 100)); ?></td>
                    <td>
                        <a href="<?php echo e(route('blogs.edit', $blog->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('blogs.destroy', $blog->id)); ?>" method="POST" class="d-inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/blogs/index.blade.php ENDPATH**/ ?>