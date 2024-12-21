<x-admin.index :user="$user" :isAdmin="$isAdmin">

    <style>

.select2-container--default, .select2-selection--multiple{
    height: auto !important;
}
.select2-container--default,.select2-container--focus, .select2-selection--multiple {
    border: solid #22a7f054 1px;
    outline: 0;
    border-radius: 5px;
}
.select2-selection--multiple:focus {
    outline: none;
}

#hub-select, #area-select {
    background-color: white;
    border: solid #22a7f054 1px;
    border-radius: 5px;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #22a7f054 1px;
    outline: 0;
}
</style>
    <!-- Ensure proper version of Select2 CSS is included -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-center mb-6">Dynamic Location Selector</h1>
        <div class="bg-white p-6 shadow-md rounded-md">
            <form action="{{ route('add.new.order', $reservation->id) }}" method="POST" class="bg-white p-6 shadow-md rounded-md">

                @csrf
                <!-- Hub Selector -->
                <div class="mb-4">
                    <label for="hub-select" class="block text-sm font-medium text-gray-700">Select Hub</label>
                    <select name="hub_id" id="hub-select" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('hub_id') border-red-500 @enderror">
                        <option value="">Choose a hub</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location['id'] }}" {{ old('hub_id') == $location['id'] ? 'selected' : '' }}>{{ $location['hubName'] }}</option>
                        @endforeach
                    </select>
                    @error('hub_id')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Area Selector -->
                <div class="mb-4">
                    <label for="area-select" class="block text-sm font-medium text-gray-700">Select Area</label>
                    <select name="area_id" id="area-select" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('area_id') border-red-500 @enderror">
                        <option value="">Choose an area</option>
                    </select>
                    @error('area_id')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="receiver_name" class="block text-sm font-medium text-gray-700">Receiver Name</label>
                    <input type="text" name="receiver_name" value="{{ old('receiver_name', $reservation->name ?? '') }}" id="receiver_name" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('receiver_name') border-red-500 @enderror" required>
                    @error('receiver_name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="receiver_contact" class="block text-sm font-medium text-gray-700">Receiver Contact</label>
                    <input type="text" name="receiver_contact" value="{{ old('receiver_contact', $reservation->phone_number ?? '') }}" id="receiver_contact" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('receiver_contact') border-red-500 @enderror" required>
                    @error('receiver_contact')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="receiver_alternate_number" class="block text-sm font-medium text-gray-700">Alternate Contact</label>
                    <input type="text" name="receiver_alternate_number" value="{{ old('receiver_alternate_number') }}" id="receiver_alternate_number" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('receiver_alternate_number') border-red-500 @enderror">
                    @error('receiver_alternate_number')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="product_price" class="block text-sm font-medium text-gray-700">Product Price</label>
                    <input type="number" step="0.01" name="product_price" value="{{ old('product_price', $reservation->food?->price ?? '') }}" id="product_price" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('product_price') border-red-500 @enderror" required>
                    @error('product_price')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="cod_amount" class="block text-sm font-medium text-gray-700">COD Amount</label>
                    <input type="number" step="0.01" name="cod_amount" value="{{ old('cod_amount') }}" id="cod_amount" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('cod_amount') border-red-500 @enderror">
                    @error('cod_amount')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="weight" class="block text-sm font-medium text-gray-700">Weight(Kg)</label>
                    <input type="number" step="0.01" name="weight" value="{{ old('weight') }}" id="weight" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('weight') border-red-500 @enderror">
                    @error('weight')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="length" class="block text-sm font-medium text-gray-700">Length (CM)</label>
                    <input type="number" step="0.01" name="length" value="{{ old('length') }}" id="length" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('length') border-red-500 @enderror">
                    @error('length')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="breadth" class="block text-sm font-medium text-gray-700">Breadth (CM)</label>
                    <input type="number" step="0.01" name="breadth" value="{{ old('breadth') }}" id="breadth" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('breadth') border-red-500 @enderror">
                    @error('breadth')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="height" class="block text-sm font-medium text-gray-700">Height(CM)</label>
                    <input type="number" step="0.01" name="height" value="{{ old('height') }}" id="height" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('height') border-red-500 @enderror">
                    @error('height')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="product_description" class="block text-sm font-medium text-gray-700">Product Description</label>
                    <textarea name="product_description" id="product_description" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('product_description') border-red-500 @enderror" rows="3">{{ old('product_description', $reservation->food?->desc ?? '') }}</textarea>
                    @error('product_description')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="receiver_address" class="block text-sm font-medium text-gray-700">Receiver Address</label>
                    <textarea name="receiver_address" id="receiver_address" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('receiver_address') border-red-500 @enderror" rows="3">{{ old('receiver_address', $reservation->address ?? '') }}</textarea>
                    @error('receiver_address')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="receiver_landmark" class="block text-sm font-medium text-gray-700">Landmark</label>
                    <input type="text" name="receiver_landmark" id="receiver_landmark" value="{{ old('receiver_landmark', $reservation->address ?? '') }}" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('receiver_landmark') border-red-500 @enderror">
                    @error('receiver_landmark')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Repeat for other fields -->
                <div class="mb-4">
                    <label for="remarks" class="block text-sm font-medium text-gray-700">Remarks</label>
                    <textarea name="remarks" id="remarks" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('remarks') border-red-500 @enderror" rows="3">{{ old('remarks') }}</textarea>
                    @error('remarks')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="client_note" class="block text-sm font-medium text-gray-700">Client Note</label>
                    <textarea name="client_note" id="client_note" class="w-full mt-2 p-2 border border-gray-300 rounded-md @error('client_note') border-red-500 @enderror" rows="3">{{ old('client_note') }}</textarea>
                    @error('client_note')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full py-2 px-4 bg-amber-500 text-white font-semibold rounded-md hover:bg-amber-700">
                    Submit Order
                </button>
            </form>
        </div>
    </div>

    <!-- Include JS scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        const locationData = @json($locations);

        $(document).ready(function() {
            $('#hub-select, #area-select').select2();
            $('#select2-area-select-container').css({
                'margin-top': '-15px',
                'padding': '0'
            });
            $('#select2-hub-select-container').css({
                'margin-top': '-15px',
                'padding': '0'
            });

            $('#hub-select').on('change', function() {
                const hubId = $(this).val();
                const areas = locationData.find(location => location.id == hubId)?.areas || [];
                $('#area-select').empty().append('<option value="">Choose an area</option>');
                areas.forEach(area => {
                    $('#area-select').append(`<option value="${area.id}">${area.name}</option>`);
                });
                $('#area-select').trigger('change');
            });
        });


    </script>


</x-admin.index>
