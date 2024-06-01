<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Blogs</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        @if ($blog->image)
                            <img src="{{ asset('assets/images/' . $blog->image) }}" class="img-fluid" style="max-width: 100px;" alt="{{ $blog->title }}">
                        @endif
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->content, 100) }}</td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin.index>
