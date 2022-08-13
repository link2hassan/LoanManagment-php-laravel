@extends('layouts.admin.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<a href="{{ url('/create_doner') }}" class="btn btn-primary">Add Doner</a>
		</div>
	</div>
	<div class="row">   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
		<div class="card">
			<h5 class="card-header">Basic Table</h5>
			<div class="card-body">
				<div class="table-responsive">
					<table class=" datatable table table-striped table-bordered first">
						<thead>
							<tr>
								<th style="text-align: center;">Name</th>
								<th style="text-align: center;">City</th>
								<th style="text-align: center;">Bank Account</th>
								<th style="text-align: center;">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($doners as $doner)
							<tr>
								<td style="text-align: center;">{{ $doner->name }}</td>
								<td style="text-align: center;">{{ $doner->city }}</td>
								<td style="width: 40%; text-align: center;">{{ $doner->bank_num }}</td>
								<td style="text-align: center;">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{ url('/delete_doner/'.$doner->id) }}">Delete</a>
											<a class="dropdown-item" href="{{ url('/update_doner/'.$doner->id) }}">Update</a>
											<a class="dropdown-item" href="{{ url('/doner_detail/'.$doner->id) }}">View Detail</a>
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