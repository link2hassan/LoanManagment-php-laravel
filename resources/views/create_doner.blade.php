@extends('layouts.admin.dashboard')
@section('content')
<div class="container w-100">
	<div class="row">
		<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto mt-5">
			<div class="card">
				<h5 class="card-header">Doner Detail</h5>
				<div class="card-body">
					<form action="{{ url('/create_doner') }}" id="basicform" data-parsley-validate="" method="post" enctype="multipart/form-data">
						@csrf
						
							<div class="row">
								<div class="col-6">
									<label for="inputUserName">Name</label>
									<input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
								</div>
								<div class="col-6">
									<label for="inputUserName">City</label>
									<input id="inputUserName" type="text" name="city" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
								</div>
							</div>
						
						<div class="row my-3">
							<div class="form-group col-6">
								<label for="inputUserName">Phone No.</label>
								<input id="inputUserName" type="number" name="phone" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
							</div>
							<div class="form-group col-6">
								<label for="inputUserName">Bank Account #</label>
								<input id="inputUserName" type="" name="bank_num" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="inputEmail">Description</label>
							<textarea rows="4" id="inputEmail"  name="description" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control"></textarea>
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
