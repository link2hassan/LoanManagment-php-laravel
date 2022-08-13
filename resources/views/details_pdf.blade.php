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
						{{ $borrower['name'] }}
					</td>
					<td></td>
					<th style="padding-left: 6px;">
						Bank Ac. #
					</th>
					<td style="padding-left: 6px;">
						{{ $borrower['bank_num'] }}
					</td>
					<td></td>
				</tr>
				<tr>
					<th style="padding-left: 6px;">
						CNIC
					</th>
					<td style="padding-left: 6px;">
						{{ $borrower['cnic'] }}
					</td>
					<td></td>
					<th style="padding-left: 6px;">
						Father
					</th>
					<td style="padding-left: 6px;">
						{{ $borrower['father_name'] }}
					</td>
					<td></td>
				</tr>
				<tr>
					<th style="padding-left: 6px;">
						Cheque No.
					</th>
					<td style="padding-left: 6px;">
						{{ $borrower['cheque_num'] }}
					</td><td></td>
					<th style="padding-left: 6px;">
						Bank
					</th>
					<td style="padding-left: 6px;">
						{{ $borrower['bank_branch'] }}
					</td><td></td>
				</tr>
				<tr>
					<th style="padding-left: 6px;">
						Phone
					</th>
					<td style="padding-left: 6px;">
						{{ $borrower['phone'] }}
					</td><td></td>
					<th style="padding-left: 6px;">
						Email
					</th>
					<td style="padding-left: 6px;">
						{{ $borrower['email'] }}
					</td><td></td>
				</tr>
				<tr>
					<th style="padding-left: 6px;">
						
					</th>
					<td style="padding-left: 6px;">
						
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
							Loan Amount
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Guarantor Name
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Total Installments
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Loan Purpose
						</th>
						<th style="border: 1px solid #ddd;padding-left: 6px;">
							Date
						</th>
						<th style="border: 1px solid #ddd; padding-left: 6px;">
							Total Recoveries
						</th>
						
					</tr>
					@php $i = 1;@endphp
					@foreach($borrower['loans'] as $loan)
					<tr>
						<td style="border:1px solid #ddd;">{{ $i }}</td>
						<td style="border:1px solid #ddd;">{{ $loan['loan_amount'] }}</td>
						<td style="border:1px solid #ddd;">{{ $loan['guarantor']['name'] }}</td>
						<td style="border:1px solid #ddd;">{{ '12' }}</td>
						<td style="border: 1px solid #ddd;padding-left: 6px;">{{ $loan['loan_purpose'] }}</td>
						<td style="border: 1px solid #ddd;padding-left: 6px;">@php
						$date=date_create($loan['created_at']);
						echo date_format($date,"d M, Y");
					@endphp</td> <td>{{ count($loan['recoveries']) }}</td>
					
				</tr >
				@php $i++;@endphp
				@endforeach
			</tbody>
		</table >

	</div >