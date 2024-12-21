<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Booked request</h4>
                    <p class="card-description">
                        Booking information
                    </p>

                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <table class="table table-hover overflow-auto block">
                        <thead>
                            <tr class="bg-slate-800">
                                @foreach (['Customer Name', 'Phone number', 'Product Name', 'Qty', 'Created at', 'feedback', 'Dispatch'] as $heading)
                                    <th class="font-bold text-white">{{ $heading }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data && $data->count() > 0)
                                @foreach ($data as $reservation)
                                    <tr>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->phone_number }}</td>
                                        <td>{{ $reservation->food ? $reservation->food->name : $reservation->product_name }}</td>
                                        <td>{{ $reservation->person }}</td>
                                        <td>{{ $reservation->created_at }}</td>
                                        <td>{{ $reservation->feedback?->feedback ?? '' }}</td>
                                        <td>
                                            @if ($reservation->tracking_code)
                                                <a class="bg-black font-bold p-2.5 rounded text-white"
                                                    href="{{ route('track.order', $reservation->tracking_code) }}" style="background: rebeccapurple; text-decoration:none">Track Order</a>
                                            @else
                                                <a class="badge-primary bg-amber-500 font-bold p-2.5 rounded text-white"
                                                    href="{{ route('dispatch.order', $reservation->id) }}">Dispatch</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    @if ($data && $data->count() > 0)
                        <div class="d-flex justify-content-center">
                            {{ $data->links() }} <!-- Display pagination controls -->
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-admin.index>
