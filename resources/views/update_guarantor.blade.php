
@extends('layouts.admin.dashboard')
@section('content')
<div class="container w-100">
	<div class="row">
		<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto mt-5">
			<div class="card">
				<h5 class="card-header">Basic Form</h5>
				<div class="card-body">
					<form action="{{ url('/update_guarantor/'.$guarantor->id) }}" id="basicform" data-parsley-validate="" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group" style="display: flex; justify-content: space-around;">
							<div>
								<label for="inputUserName">Name</label>
								<input value="{{ $guarantor->guarantor_name }}" id="inputUserName" type="text" name="guarantor_name" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
							</div>
							<div>
								<label for="inputUserName">Father Name</label>
								<input value="{{ $guarantor->guarantor_father_name }}" id="inputUserName" type="text" name="guarantor_father_name" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
							</div>
							<div>
								<label for="inputUserName">City</label>
								<input value="{{ $guarantor->guarantor_city }}" id="inputUserName" type="text" name="guarantor_city" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputUserName">Address</label>
							<input value="{{ $guarantor->guarantor_address }}" id="inputUserName" type="text" name="guarantor_address" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
						</div>
						
						<div class="row">
						<div class="form-group col-6">
							<label for="inputUserName">CNIC</label>
							<input value="{{ $guarantor->guarantor_cnic }}" id="inputUserName" type="number" name="guarantor_cnic" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
						</div>
						<div class="form-group col-6">
							<label for="inputUserName">Phone No.</label>
							<input value="{{ $guarantor->guarantor_phone }}" id="inputUserName" type="number" name="guarantor_phone" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
						</div>
						
						</div>
						<div class="form-group ">
							<label for="inputUserName">Email</label>
							<input value="{{ $guarantor->guarantor_email }}" id="inputUserName" type="email" name="guarantor_email" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
						</div>
						<div class="form-group">
							<label for="inputUserName">Bank Account #</label>
							<input value="{{ $guarantor->guarantor_bank_num }}" id="inputUserName" type="" name="guarantor_bank_num" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
						</div>
						<div class="row">
						<div class="form-group col-6">
							<label for="inputEmail">Cheque Number</label>
							<input value="{{ $guarantor->guarantor_cheque_num }}" id="inputEmail" type="text" name="guarantor_cheque_num" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
						</div>
						<div class="form-group col-6">
							<label for="inputEmail">Bank Branch</label>
							<input value="{{ $guarantor->guarantor_bank_branch }}" id="inputEmail" type="text" name="guarantor_bank_branch" data-parsley-trigger="change" required="" autocomplete="off" class="form-control">
						</div>
						</div>
						<div class="form-group">
							<label for="inputEmail">guarantor Picture</label>
							<input  id="inputEmail" type="file" name="guarantor_image" data-parsley-trigger="change"  placeholder="Enter email" autocomplete="off" class="form-control">
						</div>
						<div class="form-group">
							<label for="inputEmail">CNIC Front Picture</label>
							<input id="inputEmail" type="file" name="guarantor_cnic_front" data-parsley-trigger="change"  placeholder="Enter email" autocomplete="off" class="form-control">
						</div>
						<div class="form-group">
							<label for="inputEmail">CNIC Back Picture</label>
							<input  id="inputEmail" type="file" name="guarantor_cnic_back" data-parsley-trigger="change"  placeholder="Enter email" autocomplete="off" class="form-control">
						</div>
						<div class="form-group">
							<label for="inputEmail">Cheque Picture</label>
							<input id="inputEmail" type="file" name="guarantor_cheque_image" data-parsley-trigger="change"  placeholder="Enter email" autocomplete="off" class="form-control">
						</div>
						<div class="form-group">
							<label for="inputEmail">Description</label>
							<textarea rows="4" id="inputEmail"  name="guarantor_description" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">{{ $guarantor->guarantor_description }}</textarea>
						</div>
						<div class="row">
							<div class="col-sm-6 pl-0">
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