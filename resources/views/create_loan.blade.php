@extends('layouts.admin.dashboard')
@section('content')
<div class="container w-100">
	<div class="row">
		<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto mt-5">
			<div class="card">
				<h5 class="card-header">Doner Detail</h5>
				<div class="card-body">
					<form action="{{ url('/create_loan') }}" id="basicform" data-parsley-validate="" method="post" enctype="multipart/form-data">
						@csrf
						
							<div class="row">
								<div class="col-6">
									<label for="inputUserName">Select Borrower</label>
									<select name="borrower_id" class="form-control">
										@foreach($borrowers as $borrower)
										<option class="form-control" value="{{ $borrower->id }}">{{ $borrower->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-6">
									<label for="inputUserName">Select Guarantor</label>
									<select name="guarantor_id" class="form-control">
										@foreach($guarantors as $guarantor)
										<option class="form-control" value="{{ $guarantor->id }}">{{ $guarantor->guarantor_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						
						<div class="row my-3">
							<div class="form-group col-6">
								<label for="inputUserName">Loan Amount</label>
								<input id="inputUserName" type="number" onchange="document.getElementById('installments').value = document.getElementById('inputUserName').value/12" name="loan_amount" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
							</div>
							
							<div class="form-group col-6">
								<label for="inputUserName">installments</label>
								<select class="form-control" name="loan_installments">
									<option value="12 month">12 Month</option>
								</select>
							</div>
						</div>
						<div class="form-group col-6">
								<label for="inputEmail">Monthly Installments (Rs.)</label>
								<input type="text" readonly="" rows="4" id="installments" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
							</div>
						<div class="form-group">
							<label for="inputEmail">Loan Purpose</label>
							<textarea rows="4" id="inputEmail"  name="loan_purpose" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-6 pl-0 ml-auto">
								<p class="text-right">
									<button type="submit" class="btn btn-space btn-primary">Submit</button>
									<button class="btn btn-space btn-secondary">Cancel</button>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection