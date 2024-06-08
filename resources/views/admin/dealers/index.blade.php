<x-admin.index :user="$user" :isAdmin="$isAdmin" :dealers="$dealers" >
<div class="container-fluid mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Dealers</h1>

            <a href="{{ route('dealers.create') }}" class="btn btn-primary mb-3">Add Dealers</a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th>Contact Person</th>
                    <th>Address</th>
                    <th>Proprietor Name</th>
                    <th>Google Address</th>
                    <th>Google Map<th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($dealers)
                @foreach ($dealers as $dealer)
                <tr>
                    <td>{{ $dealer->name }}</td>
                    <td>{{ isset($dealer->contact_no) ? $dealer->contact_no : 'N/A' }}</td>
                    <td>{{ isset($dealer->contact_person) ? $dealer->contact_person : 'N/A' }}</td>
                    <td>{{ isset($dealer->address) ? $dealer->address : 'N/A' }}</td>
                    <td>{{ isset($dealer->proprietor_name) ? $dealer->proprietor_name : 'N/A' }}</td>
                    <td>{{ isset($dealer->google_address) ? $dealer->google_address : 'N/A' }}</td>
                    <td>{{ isset($dealer->google_address) ? $dealer->google_map : 'N/A' }}</td>

                    <td>
                            <a href="{{ route('dealers.edit', $dealer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('dealers.destroy', $dealer->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this team member?')">Delete</button>
                            </form>
                    </td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>

</x-admin.index>
