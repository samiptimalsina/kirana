<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="short_desc">Short Desc</label>
                                <textarea name="short_desc" id="short_desc" rows="5" class="form-control">{{ old('short_desc', $blog->short_desc) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" rows="5" class="form-control editor">{{ old('content', $blog->content) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                @if($blog->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" width="100">
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dynamically load Summernote JS using $.getScript()
            $.getScript('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js', function () {
                // Initialize Summernote once the script is loaded
                $('.editor').summernote({
                    height: 300,  // Set the editor height
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview']]
                    ]
                });
            }).fail(function () {
                console.error('Failed to load Summernote script');
            });
        });
    </script>
</x-admin.index>
