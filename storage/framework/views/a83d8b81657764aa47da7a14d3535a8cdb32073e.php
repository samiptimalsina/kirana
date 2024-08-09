<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin,'teams' => $teams]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin),'teams' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($teams)]); ?>
    <div class="container-fluid">
        <h1>Team Members</h1>
        <a href="<?php echo e(route('teams.create')); ?>" class="btn btn-primary mb-3">Add Team Member</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($team->name); ?></td>
                        <td><?php echo e($team->role); ?></td>
                        <td><?php echo e($team->contact_no); ?></td>
                        <td><?php echo e($team->email); ?></td>
                        <td>
                            <?php if($team->photo): ?>
                                <img src="<?php echo e(\App\Models\Team::renderImage($team->photo)); ?>" alt="Team Photo" style="max-width: 100px;">
                            <?php else: ?>
                                No photo
                            <?php endif; ?>
                        </td>
                        <td> <?php echo Str::words( $team->description, 12, ' ...'); ?>

</td>
                        <td>
                            <a href="<?php echo e(route('teams.edit', $team->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <form action="<?php echo e(route('teams.destroy', $team->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this team member?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/samiptimalsina/betal.techzillasoft.com/resources/views/admin/teams/index.blade.php ENDPATH**/ ?>