@extends('layouts.admin.dashboard')
@section('content')

<body style="margin-top: 40px;">
	<div class="c" style="width: 90%; margin: 20px auto;">
		
	
	<a href="{{ url('/monthly_pdf') }}" style=" text-decoration: none;background: #0798ff; margin-bottom: 20px; color: #fff; padding: 10px 5px; border-radius: 5px; margin-top: 20px;">Download Statement</a>
	</div>
	@include('monthly')

</body>
@endsection