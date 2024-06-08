<x-admin.index :user="$user" :isAdmin="$isAdmin" :team="$team">

    <div class="container">
        <h1>Edit Team Member</h1>
        <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <input type="text" id="role" name="role" class="form-control" value="{{ old('role', $team->role) }}">
            </div>

            <div class="form-group">
                <label for="contact_no">Contact No:</label>
                <input type="text" id="contact_no" name="contact_no" class="form-control" value="{{ old('contact_no', $team->contact_no) }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $team->email) }}">
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" class="form-control-file">
                @if ($photoPath)
                    <img src="{{ asset($photoPath) }}" alt="Current Photo" style="max-width: 200px;">
                @else
                    <p>No photo uploaded</p>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control">{{ old('description', $team->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-admin.index>
