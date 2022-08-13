
	{{-- @dd($doner['payments']) --}}
<div class="salary-slip" style=" font-style: oblique; color: #978978; height:100vh;border:1px solid #ddd; width: 90%; margin:20px auto;" >
		<table style='width: 100%; margin: 0px auto 10px auto;  text-align: left; border: 1px solid #ddd; border-collapse: collapse;table-layout: fixed;'>
			<tr height="100px" style='background-color: #c2d69b; '>
				<td style=" width:0%;padding-left: 6px;" colspan='4'>
					{{-- <img height="90px" src='https://organisationmedia.toggleflow.com/demo/logo.png' /></td> --}}
					<td  colspan='4' style=" text-align: center;font-size: 25px;font-weight: bold;text-align: center;font-size: 27px; font-weight: 900;  "> Shameem Naz (Memorial) Trust.</td>
				</tr>
			</table>
			<table style='width: 100%; margin: 30px 20px;  text-align: left; border: 0px solid black; padding: 10px; border-collapse: collapse;table-layout: fixed;'> 
				<tr style="margin-top: 10px;">
					<th style="padding-left: 6px;">
						Name
					</th>
					<td style="padding-left: 6px;">
						{{ $doner['name'] }}
					</td>
					<td></td>
					<th style="padding-left: 6px;">
						
					</th>
					<td style="padding-left: 6px;">
						
					</td>
					<td></td>
				</tr>
				<tr>
					<th style="padding-left: 6px;">
						Phone
					</th>
					<td style="padding-left: 6px;">
					{{ $doner['phone'] }}
					</td>
					<td></td>
				</tr>
				<tr>
					<th style="padding-left: 6px;">
						Bank Ac. #
					</th>
					<td style="padding-left: 6px;">
						{{ $doner['bank_num'] }}
					</td><td></td>
				</tr>
				<tr>
					<th style="padding-left: 6px;">
						City
					</th>
					<td style="padding-left: 6px;">
						{{ $doner['city'] }}
					</td><td></td>
					<th style="padding-left: 6px;">

					</th>
					<td style="padding-left: 6px;">
						
					</td><td></td>
				</tr>
			</table>
			<table style='width: 100%; margin: 10px auto 0px auto;  text-align: left; border: 1px solid #ddd; border-collapse: collapse;table-layout: fixed;'>
				<tbody style="text-align:center; margin-top: 10px;" class="border-center">
					<tr>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							#
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Donation  Amount
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Date
						</th>
						
					</tr>
					@php $i = 1;@endphp
					@foreach($doner['payments'] as $payment)
					<tr>
						<td style="border:1px solid #ddd;">{{ $i }}</td>
						<td style="border:1px solid #ddd;">{{ $payment['amount'] }}</td>
						<td style="border:1px solid #ddd;">@php
						$date=date_create($payment['created_at']);
						echo date_format($date,"d M, Y");
					@endphp</td>
				</tr >
				@php $i++;@endphp
				@endforeach
			</tbody>
		</table >

	</div >