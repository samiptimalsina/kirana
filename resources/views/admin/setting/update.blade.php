<!-- resources/views/settings.blade.php -->
<x-admin.index :user="$user" :isAdmin="$isAdmin" :settings="$settings">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update Settings</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form id="settingsForm" action="{{ route('settings') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf @method('PUT')

                            <div class="form-group">
                                <label for="logo">Logo:</label>
                                <input type="file" id="logo" name="logo" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="fabIcon">Fab Icon:</label>
                                <input type="file" id="fabIcon" name="fab_icon" class="form-control-file">
                            </div>

                            @error('site_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="site_name">Site Name:</label>
                                <input type="text" id="site_name" name="site_name" class="form-control" required
                                    value="{{ old('site_name', $settings ? $settings->site_name : '') }}">
                            </div>

                            @error('about_us')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="about_us">About Us:</label>
                                <textarea id="about_us" name="about_us" style="height: 300px;" class="form-control" rows="4" required>{{ old('about_us', $settings ? $settings->about_us : '') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="about_us_image">About Us Image:</label>
                                <input type="file" id="about_us_image" name="about_us_image"
                                    class="form-control-file">
                            </div>

                            @error('contact_address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="contact_address">Contact Address:</label>
                                <input type="text" id="contact_address" name="contact_address" class="form-control"
                                    required
                                    value="{{ old('contact_address', $settings ? $settings->contact_address : '') }}">
                            </div>

                            @error('contact_phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="contact_phone">Contact Phone:</label>
                                <input type="text" id="contact_phone" name="contact_phone" class="form-control"
                                    required
                                    value="{{ old('contact_phone', $settings ? $settings->contact_phone : '') }}">
                            </div>

                            @error('contact_email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="contact_email">Contact Email:</label>
                                <input type="email" id="contact_email" name="contact_email" class="form-control"
                                    required
                                    value="{{ old('contact_email', $settings ? $settings->contact_email : '') }}">
                            </div>

                            @error('opening_hours')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="opening_hours">Opening Hours:</label>
                                <textarea type="text" id="opening_hours" name="opening_hours" class="form-control" required>{{ old('opening_hours', $settings ? $settings->opening_hours : '') }}</textarea>
                            </div>

                            <button type="button" class="btn btn-primary submitBtn">Save Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.index>

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
