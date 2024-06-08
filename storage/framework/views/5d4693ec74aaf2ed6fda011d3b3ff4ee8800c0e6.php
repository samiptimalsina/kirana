<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.index','data' => ['user' => $user,'isAdmin' => $isAdmin,'dealer' => $dealer]]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user),'isAdmin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAdmin),'dealer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($dealer)]); ?>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4"><?php echo e(isset($dealer) ? 'Edit Dealer' : 'Add Dealer'); ?></h1>
        <form action="<?php echo e(isset($dealer) ? route('dealers.update', $dealer->id) : route('dealers.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(isset($dealer)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input type="text" name="name" value="<?php echo e(old('name', $dealer->name ?? '')); ?>" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact_no">Contact No</label>
                <input type="text" name="contact_no" value="<?php echo e(old('contact_no', $dealer->contact_no ?? '')); ?>" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact_person">Contact Person</label>
                <input type="text" name="contact_person" value="<?php echo e(old('contact_person', $dealer->contact_person ?? '')); ?>" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
                <input type="text" name="address" value="<?php echo e(old('address', $dealer->address ?? '')); ?>" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="proprietor_name">Proprietor Name</label>
                <input type="text" name="proprietor_name" value="<?php echo e(old('proprietor_name', $dealer->proprietor_name ?? '')); ?>" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="google_address">Google Address</label>
                <input type="text" name="google_address" value="<?php echo e(old('google_address', $dealer->google_address ?? '')); ?>" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="google_map">Google Map</label>
                <input type="text" name="google_map" value="<?php echo e(old('google_map', $dealer->google_map ?? '')); ?>" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="btn btn-primary font-bold py-2 px-4 rounded">
                    <?php echo e(isset($dealer) ? 'Update Dealer' : 'Add Dealer'); ?>

                </button>
                <a href="<?php echo e(route('dealers.index')); ?>" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
            </div>
        </form>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>
    function initMap() {
        var geocoder = new google.maps.Geocoder();
        var address = document.getElementById('google_address').value;
        var mapOptions = {
            zoom: 15,
            center: { lat: -34.397, lng: 150.644 } // Default center
        };
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                console.log('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initMap);
</script>
<?php /**PATH /home/rishi/Desktop/restaurant-site-laravel/resources/views/admin/dealers/edit.blade.php ENDPATH**/ ?>