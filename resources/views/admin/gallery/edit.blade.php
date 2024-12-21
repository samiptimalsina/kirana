<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <style>
        .dropzone {
            border: 2px dashed #e5e7eb;
            background-color: #f9fafb;
            padding: 1.5rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .dropzone:hover {
            background-color: #f3f4f6;
        }

        .text-danger {
            color: red;
        }

        .file-input {
            display: none;
        }

        .file-label {
            display: inline-block;
            padding: 1rem;
            background-color: #f3f4f6;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .image-preview {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .image-preview img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 0.5rem;
        }
    </style>

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ isset($gallery) ? 'Edit Gallery' : 'Create Gallery' }}</h1>

                <!-- Display Success Message -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Main Form -->
                <form action="{{ isset($gallery) ? route('galleries.update', $gallery->id) : route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($gallery))
                        @method('PUT') <!-- Use PUT method for update -->
                    @endif

                    <!-- Gallery Name Input -->
                    <div class="form-group">
                        <label for="gallery_name">Gallery Name</label>
                        <input type="text" class="form-control" id="gallery_name" name="gallery_name" value="{{ old('gallery_name', $gallery->gallery_name ?? '') }}" required>
                        <!-- Display validation error for gallery_name -->
                        @error('gallery_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- File Input Styled as Dropzone -->
                    <div id="galleryDropzone" class="dropzone">
                        <label for="gallery_images" class="file-label">Click to upload images or drag & drop here</label>
                        <input type="file" id="gallery_images" name="file[]" class="file-input" multiple>
                    </div>
                    <!-- Display validation error for files -->
                    @error('file.*')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Image Previews -->
                    <div class="image-preview" id="imagePreview">
                        <!-- If editing, display current images -->
                        @if(isset($gallery))
                            @foreach($gallery->images as $image)
                                <img src="{{ asset($image) }}" alt="Image" />
                            @endforeach
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-4 text-right">
                        <button type="submit" class="btn btn-primary" id="submitBtn">{{ isset($gallery) ? 'Update Gallery' : 'Submit Gallery' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Handle file selection
        document.getElementById("gallery_images").addEventListener("change", function (event) {
            const previewContainer = document.getElementById("imagePreview");
            previewContainer.innerHTML = ''; // Clear previous previews

            // Loop through selected files and create image previews
            Array.from(event.target.files).forEach(file => {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const imgElement = document.createElement("img");
                    imgElement.src = e.target.result; // Set the source of the image
                    previewContainer.appendChild(imgElement); // Append the image to the preview container
                };

                reader.readAsDataURL(file); // Read the selected file as a data URL
            });
        });
    </script>
</x-admin.index>
