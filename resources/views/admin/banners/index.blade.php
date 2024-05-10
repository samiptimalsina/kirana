<x-admin.index :user="$user" :isAdmin="$isAdmin">


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Banners</h1>
                <a href="{{ route('banners.create') }}" class="btn btn-primary">Create Banner</a>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{ $banner->id }}</td>
                                <td>{{ $banner->title }}</td>
                                <td><img src="{{ $banner->image_url }}" class="img-fluid"></td>
                                <td>{{ $banner->description }}</td>
                                <td>
                                    <a href="{{ route('banners.show', $banner->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this banner?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.index>
