@extends('layouts.admin.dashboard')
@section('content')
<div class="container w-100">
	<div class="row">
		<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto mt-5">
			<div class="card">
				<h5 class="card-header">Doner Detail</h5>
				<div class="card-body">
					<form action="{{ url('/create_payment') }}" id="basicform" data-parsley-validate="" method="post" enctype="multipart/form-data">
						@csrf
						
							<div class="row">
								<div class="col-6">
									<label for="inputUserName">Title</label>
									<select class="form-control" name="doner_id">
										@foreach($doners as $doner)
										<option value="{{ $doner->id }}">{{ $doner->name }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-6">
									<label for="inputUserName">Amount</label>
									<input id="inputUserName" type="number" name="amount" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
								</div>
							</div>
						<div class="row">
							<div class="col-sm-6 pl-0 ml-auto mt-3">
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
