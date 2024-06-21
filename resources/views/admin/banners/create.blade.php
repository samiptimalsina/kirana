<x-admin.index :user="$user" :isAdmin="$isAdmin">

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Banner</h1>
                <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image_url">Image </label>
                        <input type="file" class="form-control" id="image_url" name="image_url" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                            <div class="form-group">
                               <label for="title">Page</label>

                                <select name="page" class="form-control">
                                    <option value="">Select a page</option>
                                    @foreach($pageOptions as $option)
                                        <option value="{{ $option }}">{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-admin.index>
