@extends('layouts.admin.dashboard')
@section('content')

<body style="margin-top: 40px;">
	<div class="c" style="width: 90%; margin: 20px auto;">
		
	
	<a href="{{ url('/borrower-details-pdf/'.$borrower['id']) }}" style=" text-decoration: none;background: #0798ff; margin-bottom: 20px; color: #fff; padding: 10px 5px; border-radius: 5px; margin-top: 20px;">Download PDF</a>
	</div>
	@include('details_pdf')

</body>
@endsection