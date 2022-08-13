@extends('layouts.admin.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			{{-- <a href="{{ url('/create_guarantor') }}" class="btn btn-primary">Add Guarantor</a> --}}
		</div>
	</div>
	<div class="row">   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
		<div class="card">
			<h5 class="card-header">Basic Table</h5>
			<div class="card-body">
				<div class="table-responsive">
					<table class="datatable table table-striped table-bordered first">
						<thead>
							<tr>
								<th style="text-align: center;">Image</th>
								<th style="text-align: center;">Name</th>
								<th style="text-align: center;">City</th>
								<th style="text-align: center;">CNIC</th>
								<th style="text-align: center;">Start date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($guarantors as $guarantor)
							<tr>

								<td style="text-align: center;"><img style="width: 70px; height: 70px;" src="{{ url('/storage/app/'.$guarantor->guarantor_image) }}"></td>
								<td style="text-align: center;">{{ $guarantor->guarantor_name }}</td>
								<td style="text-align: center;">{{ $guarantor->guarantor_city }}</td>
								<td style="width: 40%; text-align: center;">{{ $guarantor->guarantor_cnic }}</td>
								<td style="text-align: center;">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{ url('/delete_guarantor/'.$guarantor->id) }}">Delete</a>
											<a class="dropdown-item" href="{{ url('/update_guarantor/'.$guarantor->id) }}">Update</a>
											<a class="dropdown-item" href="#">View Detail</a>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection