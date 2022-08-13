@extends('layouts.admin.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<a href="{{ url('/create_loan') }}" class="btn btn-primary">Add Loan</a>
		</div>
	</div>
	<div class="row">   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
		<div class="card">
			<h5 class="card-header">Loans</h5>
			<div class="card-body">
				<div class="table-responsive">
					<table class="datatable table table-striped table-bordered first">
						<thead>
							<tr>
								<th style="text-align: center;">Borrower Name</th>
								<th style="text-align: center;">Loan Amount</th>
								<th style="text-align: center;">Loan Purpose</th>
								<th style="text-align: center;">Loan Installments</th>
								<th style="text-align: center;">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($loans as $loan)
							<tr>
								<td style="text-align: center;">{{ $loan['borrower']['name'] }}</td>
								<td style="text-align: center;">{{ $loan['loan_amount'] }}</td>
								<td style="width: 40%; text-align: center;">{{ $loan['loan_purpose'] }}</td>
								<td style="text-align: center;">{{ $loan['loan_installments'] }}</td>
								<td style="text-align: center;">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{ url('/recovery?loan_id='.$loan['id']) }}">View Details</a>
											<a class="dropdown-item" href="{{ url('/delete_loan/'.$loan['id']) }}">Delete</a>
											<a class="dropdown-item" href="{{ url('/update_loan/'.$loan['id']) }}">Update</a>
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