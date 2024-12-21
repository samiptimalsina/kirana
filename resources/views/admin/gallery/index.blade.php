<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Gallery List</h1>
                <div class="text-right mb-3">
                    <a href="{{ route('galleries.create') }}" class="btn btn-success btn-sm">
                        Create Gallery
                    </a>
                </div>

                <!-- Display Success Message -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Gallery Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gallery Name</th>
                            <th>Images</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($galleries))
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>{{ $gallery->gallery_name }}</td>
                                    <td>
                                        <!-- Display Gallery Images -->
                                        @foreach ($gallery->images as $image)
                                            <img src="{{ asset($image) }}" alt="Image"
                                                style="width: 50px; height: 50px; object-fit: cover; margin-right: 5px;">
                                        @endforeach
                                    </td>
                                    <td>{{ $gallery->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('galleries.edit', $gallery->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>

                                        <!-- Delete Button (with confirmation) -->
                                        <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST"
                                            style="display: inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this gallery?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>

                <!-- Pagination Links -->
                <div class="d-flex justify-content-center">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin.index>
