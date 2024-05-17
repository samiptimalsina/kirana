<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Booked request</h4>
					<p class="card-description">
						Booking  information
					</p>
					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								@foreach(["Customer Name", "Phone number",  "Product Name", "Qty", "Created at"] as $heading)
									<th class="font-bold text-white">{{$heading}}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@if ($data)

								@foreach($data as $data)
								<tr>
									<td>{{$data->name}}</td>
									<td>{{$data->phone_number}}</td>
                                   <td>{{ $data->food ? $data->food->name : $data->product_name }}</td>
									<td>{{$data->person}}</td>
									<td>{{$data->created_at}}</td>
								</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-admin.index>
