<x-admin.index :user="$user" :isAdmin="$isAdmin">

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Banner</h1>
                <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="current_image">Current Image</label><br>
                        <img src="{{ $banner->image_url }}" alt="Banner Image" id="current_image" class="img-fluid mb-3" style="max-width: 300px;">
                    </div>
                    <div class="form-group">
                        <label for="image_url">Upload New Image</label>
                        <input type="file" class="form-control" id="image_url" name="image_url">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $banner->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="page">Page:</label>
                        <select name="page" class="form-control">
                        <option value="">Select a page</option>
                        @foreach($pageOptions as $option)
                            <option value="{{ $option }}" {{ $banner->page === $option ? 'selected' : '' }}>{{ $option }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $banner->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-admin.index>
