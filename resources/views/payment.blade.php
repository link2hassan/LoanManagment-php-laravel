@extends('layouts.admin.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<a href="{{ url('/create_payment') }}" class="btn btn-primary">Add Payment</a>
		</div>
	</div>
	<div class="row">   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
		<div class="card">
			<h5 class="card-header">Payment</h5>
			<div class="card-body">
				<div class="table-responsive">
					<table class="datatable table table-striped table-bordered first">
						<thead>
							<tr>
								<th style="text-align: center;">Doner Name</th>
								<th style="text-align: center;">Amount</th>
								<th style="text-align: center;">Action</th>
							</tr>
						</thead>
						<tbody>
							{{-- @dd($payments) --}}
							@foreach($payments as $payment)
							<tr style="text-align: center;">
								{{-- @dd($payment['doner']['name']) --}}
								<td style="text-align: center; width: 50%;">{{ $payment['doner']['name'] }}</td>
								<td style="text-align: center;">{{ $payment['amount'] }}</td>
								<td>
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Action
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="{{ url('/delete_payment/'.$payment['id']) }}">Delete</a>
										<a class="dropdown-item" href="{{ url('/update_payment/'.$payment['id']) }}">Update</a>
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