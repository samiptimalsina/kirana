<!-- resources/views/settings.blade.php -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin,'settings' => $settings]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin),'settings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($settings)]); ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update Settings</div>

                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <form id="settingsForm" action="<?php echo e(route('settings')); ?>" method="POST"
                            enctype="multipart/form-data">

                            <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

                            <div class="form-group">
                                <label for="logo">Logo:</label>
                                <input type="file" id="logo" name="logo" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="fabIcon">Fab Icon:</label>
                                <input type="file" id="fabIcon" name="fab_icon" class="form-control-file">
                            </div>

                            <?php $__errorArgs = ['site_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group">
                                <label for="site_name">Site Name:</label>
                                <input type="text" id="site_name" name="site_name" class="form-control" required
                                    value="<?php echo e(old('site_name', $settings ? $settings->site_name : '')); ?>">
                            </div>

                            <?php $__errorArgs = ['about_us'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group">
                                <label for="about_us">About Us:</label>
                                <textarea id="about_us" name="about_us" style="height: 300px;" class="form-control" rows="4" required><?php echo e(old('about_us', $settings ? $settings->about_us : '')); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="about_us_image">About Us Image:</label>
                                <input type="file" id="about_us_image" name="about_us_image"
                                    class="form-control-file">
                            </div>

                            <?php $__errorArgs = ['contact_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group">
                                <label for="contact_address">Contact Address:</label>
                                <input type="text" id="contact_address" name="contact_address" class="form-control"
                                    required
                                    value="<?php echo e(old('contact_address', $settings ? $settings->contact_address : '')); ?>">
                            </div>

                            <?php $__errorArgs = ['contact_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group">
                                <label for="contact_phone">Contact Phone:</label>
                                <input type="text" id="contact_phone" name="contact_phone" class="form-control"
                                    required
                                    value="<?php echo e(old('contact_phone', $settings ? $settings->contact_phone : '')); ?>">
                            </div>

                            <?php $__errorArgs = ['contact_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group">
                                <label for="contact_email">Contact Email:</label>
                                <input type="email" id="contact_email" name="contact_email" class="form-control"
                                    required
                                    value="<?php echo e(old('contact_email', $settings ? $settings->contact_email : '')); ?>">
                            </div>

                            <?php $__errorArgs = ['opening_hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-group">
                                <label for="opening_hours">Opening Hours:</label>
                                <textarea type="text" id="opening_hours" name="opening_hours" class="form-control" required><?php echo e(old('opening_hours', $settings ? $settings->opening_hours : '')); ?></textarea>
                            </div>

                            <button type="button" class="btn btn-primary submitBtn">Save Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<style>
    /* Custom CSS for CKEditor height */
    .ck-editor__editable {
        min-height: 300px;
        /* Adjust the height as needed */
    }
</style>

<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('.submitBtn').click(function() {
            $('#settingsForm').submit();
        });

        ClassicEditor
            .create(document.querySelector('#about_us'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#opening_hours'))
            .catch(error => {
                console.error(error);
            });
    });
</script>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/setting/update.blade.php ENDPATH**/ ?>