<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin,'team' => $team]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin),'team' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team)]); ?>

    <div class="container">
        <h1>Edit Team Member</h1>
        <form action="<?php echo e(route('teams.update', $team->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', $team->name)); ?>" required>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <input type="text" id="role" name="role" class="form-control" value="<?php echo e(old('role', $team->role)); ?>">
            </div>

            <div class="form-group">
                <label for="contact_no">Contact No:</label>
                <input type="text" id="contact_no" name="contact_no" class="form-control" value="<?php echo e(old('contact_no', $team->contact_no)); ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email', $team->email)); ?>">
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" class="form-control-file">

                <?php if($team->photo): ?>

                    <img src="<?php echo e(\App\Models\Team::renderImage($team->photo)); ?>" alt="Current Photo" style="max-width: 200px;" class="mt-2">
                <?php else: ?>
                    <p>No photo uploaded</p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control"><?php echo e(old('description', $team->description)); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/samiptimalsina/betal.techzillasoft.com/resources/views/admin/teams/edit.blade.php ENDPATH**/ ?>