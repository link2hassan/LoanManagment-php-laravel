@extends('layouts.admin.dashboard')
@section('content')
<div class="container w-100">
	<div class="row">
		<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto mt-5">
			<div class="card">
				<h5 class="card-header">Recovery Detail</h5>
				<div class="card-body">
					<form action="{{ url('/update_recovery/'.$recoveries['id']) }}" id="basicform" data-parsley-validate="" method="post" enctype="multipart/form-data">
						@csrf
							<div class="row">
								<div class="col-6">
									<label for="inputUserName">Select Borrower</label>
										<select name="loan_id" class="form-control">
											{{-- @dd($recoveries) --}}
										<option class="form-control" value="{{ $recoveries[]['id'] }}">{{ $recoveries['loan']['borrower']['name'] }}</option>
									</select>
								</div>
								<div class="form-group col-6">
								<label for="inputUserName">Recovery Amount</label>
								<input id="inputUserName" type="number" name="recovery_amount" data-parsley-trigger="change" required=""  value="{{ $recoveries['recover_amount'] }}" autocomplete="off" class="form-control">
							</div>
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