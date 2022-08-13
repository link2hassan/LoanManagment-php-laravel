<div class="salary-slip" style="background: #fff; padding: 10px; font-style: oblique; color: #978978; height:100vh;border:1px solid #ddd; width: 90%; margin:20px auto;" >
		<table style='width: 100%; margin: 0px auto 10px auto;  text-align: left; border: 1px solid #ddd; border-collapse: collapse;table-layout: fixed;'>
			<tr height="100px" style='background-color: #c2d69b; '>
				<td style=" width:0%;padding-left: 6px;" colspan='4'>
					{{-- <img height="90px" src='https://organisationmedia.toggleflow.com/demo/logo.png' /></td> --}}
					<td  colspan='4' style=" text-align: center;font-size: 25px;font-weight: bold;text-align: center;font-size: 27px; font-weight: 900;  "> Shameem Naz (Memorial) Trust.</td>
				</tr>
			</table>
			<table style='width: 100%; margin:0px;  text-align: left; border: 1px solid #ddd; border-collapse: collapse;table-layout: fixed;'>
				<tbody style="text-align:center; margin-top: 10px;" class="">
					<h2 style="margin-top: 20px; color: #719132;border: none !important;">Total Expence:</h2>
					<tr>
						<th style="border: 1px solid #ddd;padding-left: 6px; padding: 0px 5px;">
							#
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Total Expence
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Month
						</th>	
					</tr>
					@php $i = 1;@endphp
					@foreach($expences as $expence)
					<tr>
						<td style="border:1px solid #ddd;">{{ $i }}</td>
						<td style="border:1px solid #ddd;">{{ $expence['amount'] }}</td>
						<td style="border:1px solid #ddd;">{{ $expence['month_name'] }}</td>
						{{-- <td style="border: 1px solid #ddd;padding-left: 6px;">@php
						$date=date_create($loan['created_at']);
						echo date_format($date,"d M, Y");
					@endphp</td> --}} 
					
				</tr >
				@php $i++;@endphp
				@endforeach
				
			</tbody>
		</table >
					<table style='width: 100%; margin:0px;  text-align: left; border: 1px solid #ddd; border-collapse: collapse;table-layout: fixed;'>
				<tbody style="text-align:center; margin-top: 10px;" class="">
					<h2 style="margin-top:20px; color: #719132;border: none !important;">Total Donations:</h2>
					<tr>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							#
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Total Expence
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Month
						</th>	
					</tr>
					@php $i = 1;@endphp
					@foreach($donations as $donation)
					<tr>
						<td style="border:1px solid #ddd;">{{ $i }}</td>
						<td style="border:1px solid #ddd;">{{ $donation['donation'] }}</td>
						<td style="border:1px solid #ddd;">{{ $donation['month_name'] }}</td>
						{{-- <td style="border: 1px solid #ddd;padding-left: 6px;">@php
						$date=date_create($loan['created_at']);
						echo date_format($date,"d M, Y");
					@endphp</td> --}} 
					
				</tr >
				@php $i++;@endphp
				@endforeach
				
			</tbody>
		</table >

	</div >