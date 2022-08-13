<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrower;
use App\Guarantor;
use Illuminate\Support\Facades\Storage;
use PDF;
class BarrowerController extends Controller
{
	public function index(){
		$borrowers = Borrower::all();
		$data = [];
		$data['borrowers'] = $borrowers;
		return view('borrower', $data);
	}
	public function create(Request $request, $id=null){
		if($request->isMethod('post')){

			// $data = $request->all();
			$data = [
				'name' => $request->name,
				'father_name' => $request->father_name,
				'city' => $request->city,
				'address' => $request->address,
				'cnic' => $request->cnic,
				'phone' => $request->phone,
				'email' => $request->email,
				'bank_num' => $request->bank_num,
				'cheque_num' => $request->cheque_num,
				'bank_branch' => $request->bank_branch,
				'description' => $request->description
			];
			$obj = new Borrower();
			if ($request->hasFile('image')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['image'] = $filename;
			}
			if ($request->hasFile('cnic_front')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['cnic_front'] = $filename;
			}
			if ($request->hasFile('cnic_back')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['cnic_back'] = $filename;
			}
			if ($request->hasFile('cheque_image')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['cheque_image'] = $filename;
			}
						if ($request->hasFile('form1')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['form1'] = $filename;
			}
			if ($request->hasFile('form2')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['form2'] = $filename;
			}
			unset($data['_token']);
		// dd($data);

			$obj->create($data);
			$data2 = [
				'guarantor_name' => $request->guarantor_name,
				'guarantor_father_name' => $request->guarantor_father_name,
				'guarantor_city' => $request->guarantor_city,
				'guarantor_address' => $request->guarantor_address,
				'guarantor_cnic' => $request->guarantor_cnic,
				'guarantor_phone' => $request->guarantor_phone,
				'guarantor_email' => $request->guarantor_email,
				'guarantor_bank_num' => $request->guarantor_bank_num,
				'guarantor_cheque_num' => $request->guarantor_cheque_num,
				'guarantor_bank_branch' => $request->guarantor_bank_branch,
				'guarantor_description' => $request->guarantor_description
			];
				if ($request->hasFile('guarantor_image')) {
				$file = $request->file('guarantor_image');
				$filename = Storage::putFile('img', $file);
				$data2['guarantor_image'] = $filename;
			}
			if ($request->hasFile('guarantor_cnic_front')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data2['guarantor_cnic_front'] = $filename;
			}
			if ($request->hasFile('guarantor_cnic_back')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data2['guarantor_cnic_back'] = $filename;
			}
			if ($request->hasFile('guarantor_cheque_image')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data2['guarantor_cheque_image'] = $filename;
			}
			// dd($data2);
			$obj2 = new Guarantor();
			$obj2->create($data2);
			$response = array('flag'=>true,'msg'=>'Blog added sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/borrower'));
		}
		$borrowers = Borrower::all();
		$data = [];
		$data['borrowers'] = $borrowers;
		return view('create_borrower', $data);
		
	}
	public function update(Request $request, $id){
		$borrower = Borrower::find($id);
		// dd($blog);
		if($request->isMethod('post')){
			$data = $request->all();
			if ($request->hasFile('image')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['image'] = $filename;
			}
			if ($request->hasFile('cnic_front')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['cnic_front'] = $filename;
			}
			if ($request->hasFile('cnic_back')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['cnic_back'] = $filename;
			}
			if ($request->hasFile('cheque_image')) {
				$file = $request->file('image');
				$filename = Storage::putFile('img', $file);
				$data['cheque_image'] = $filename;
			}
			$borrower->update($data);
			$response = array('flag'=>true,'msg'=>'Blog Updated sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/borrower'));

		}

		$data = [];
		$data['borrower'] = $borrower;
		$data['id'] = $id;

		return view('update_borrower', $data);

	}


	public function delete($id){
		Borrower::destroy($id);
		$response = array('flag'=>true,'msg'=>'Blog  Deleted sucessfully.','action'=>'reload');
		echo json_encode($response); return redirect(url('/borrower'));
	}

	public function details_pdf(Request $request, $id)
	{
		$borrower = Borrower::with('loans.borrower')->with('loans.guarantor')->with('loans.recoveries')->where('id', $id)->get()->first()->toArray();
		$data = [];
		$data['borrower'] = $borrower;
		$pdf = \PDF::loadView('details_pdf', $data)->setOptions(['defaultFont' => 'sans-serif']);

		return $pdf->download('Nicesnippets.pdf');
	}
}
