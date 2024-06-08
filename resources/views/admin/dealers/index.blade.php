<x-admin.index :user="$user" :isAdmin="$isAdmin" :dealer="$dealers" />

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Dealers</h1>
        <a href="{{ route('dealers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add Dealer</a>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($dealers as $dealer)
                <div class="max-w-sm rounded overflow-hidden shadow-lg p-4 bg-white">
                    <div class="font-bold text-xl mb-2">{{ $dealer->name }}</div>
                    <p class="text-gray-700 text-base"><strong>Contact No:</strong> {{ $dealer->contact_no }}</p>
                    <p class="text-gray-700 text-base"><strong>Contact Person:</strong> {{ $dealer->contact_person }}</p>
                    <p class="text-gray-700 text-base"><strong>Address:</strong> {{ $dealer->address }}</p>
                    <p class="text-gray-700 text-base"><strong>Proprietor Name:</strong> {{ $dealer->proprietor_name }}</p>
                    <p class="text-gray-700 text-base"><strong>Google Address:</strong> {{ $dealer->google_address }}</p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('dealers.edit', $dealer->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('dealers.destroy', $dealer->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-admin.index>
