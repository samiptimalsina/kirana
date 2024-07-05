<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin)]); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Food-Menu Form</h4>
                        <p class="card-description">Add food menu info</p>
                        <form action="<?php echo e(route('foodmenu.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="productname">Name</label>
                                <input type="text" class="form-control" id="productname" name="productname"
                                    placeholder="Input product name" required />
                            </div>

                            <div class="form-group">
                                <label for="productprice">Price</label>
                                <input type="number" class="form-control" id="productprice" name="productprice"
                                    placeholder="Input product price up to 2 decimal places"
                                    pattern="[0-9]+([\.,][0-9]+)?" step="0.01" required />
                            </div>

                            <div class="form-group">
                                <label>Image upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info"
                                        placeholder="Upload product images" id="productimage" name="productimages[]"
                                        multiple required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="image-preview" class="d-flex flex-wrap">
                                    <!-- Image previews will be added here -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="productdescription">Description</label>
                                <textarea class="form-control" id="productdescription" name="productdescription" rows="4" required
                                    placeholder="Input product description"></textarea>
                            </div>

                            <?php if($isAdmin === false): ?>
                                <button type="submit" class="btn btn-primary mr-2">Add</button>
                            <?php else: ?>
                                <button onclick="alert('Only admin can add food menu')" type="button"
                                    class="btn btn-primary mr-2">Add</button>
                            <?php endif; ?>
                            <a href="<?php echo e(route('foodmenu.index')); ?>" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("productimage").addEventListener('change', function(event) {
            const imagePreview = document.getElementById("image-preview");
            imagePreview.innerHTML = ''; // Clear existing previews

            if (event.target.files) {
                Array.from(event.target.files).forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement("img");
                        img.setAttribute("src", e.target.result);
                        img.classList.add("h-auto", "shadow-sm", "w-1/4", "m-2"); // Styling classes
                        imagePreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                });
            }
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/pages/foodmenu/createfoodmenu.blade.php ENDPATH**/ ?>