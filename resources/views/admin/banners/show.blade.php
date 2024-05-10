<x-admin.index :user="$user" :isAdmin="$isAdmin">

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Banner Details</h1>
                <ul>
                    <li><strong>ID:</strong> {{ $banner->id }}</li>
                    <li><strong>Image URL:</strong> <img src="{{ $banner->image_url }}" class="img-fluid"
                            style="height: 400px;">
                    </li>
                    <li><strong>Title:</strong> {{ $banner->title }}</li>
                    <li><strong>Description:</strong> {{ $banner->description }}</li>
                </ul>
                <a href="{{ route('banners.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</x-admin.index>
