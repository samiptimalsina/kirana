<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin,'dealers' => $dealers]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin),'dealers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($dealers)]); ?>
<div class="container-fluid mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Dealers</h1>

            <a href="<?php echo e(route('dealers.create')); ?>" class="btn btn-primary mb-3">Add Dealers</a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th>Contact Person</th>
                    <th>Address</th>
                    <th>Proprietor Name</th>
                    <th>Google Address</th>
                    <th>Google Map<th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($dealers)): ?>
                <?php $__currentLoopData = $dealers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dealer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($dealer->name); ?></td>
                    <td><?php echo e(isset($dealer->contact_no) ? $dealer->contact_no : 'N/A'); ?></td>
                    <td><?php echo e(isset($dealer->contact_person) ? $dealer->contact_person : 'N/A'); ?></td>
                    <td><?php echo e(isset($dealer->address) ? $dealer->address : 'N/A'); ?></td>
                    <td><?php echo e(isset($dealer->proprietor_name) ? $dealer->proprietor_name : 'N/A'); ?></td>
                    <td><?php echo e(isset($dealer->google_address) ? $dealer->google_address : 'N/A'); ?></td>
                    <td><?php echo e(isset($dealer->google_address) ? $dealer->google_map : 'N/A'); ?></td>

                    <td>
                            <a href="<?php echo e(route('dealers.edit', $dealer->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <form action="<?php echo e(route('dealers.destroy', $dealer->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this team member?')">Delete</button>
                            </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/dealers/index.blade.php ENDPATH**/ ?>