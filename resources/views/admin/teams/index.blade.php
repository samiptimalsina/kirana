<x-admin.index :user="$user" :isAdmin="$isAdmin" :teams="$teams">

    <div class="container">
        <h1>Team Members</h1>
        <a href="{{ route('teams.create') }}" class="btn btn-primary mb-3">Add Team Member</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->role }}</td>
                        <td>{{ $team->contact_no }}</td>
                        <td>{{ $team->email }}</td>
                        <td>
                            @if ($team->photo_url)
                                <img src="{{ asset($team->photo_url) }}" alt="Team Photo" style="max-width: 100px;">
                            @else
                                No photo
                            @endif
                        </td>
                        <td>{{ $team->description }}</td>
                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <!-- Add delete button or form here -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.index>
