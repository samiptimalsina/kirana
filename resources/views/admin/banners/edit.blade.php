<x-admin.index :user="$user" :isAdmin="$isAdmin">

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Banner</h1>
                <form action="{{ route('banners.update', $banner->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="image_url">Image URL</label>
                        <input type="text" class="form-control" id="image_url" name="image_url"
                            value="{{ $banner->image_url }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $banner->title }}" required>
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
