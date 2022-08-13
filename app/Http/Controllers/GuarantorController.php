<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Guarantor;
use Illuminate\Support\Facades\Storage;

class GuarantorController extends Controller
{
    //
   public function index(){
   	$guarantors = Guarantor::all();
		$data = [];
		$data['guarantors'] = $guarantors;
		return view('guarantor', $data);
	}
	public function create(Request $request, $id=null){
		if($request->isMethod('post')){

		$data = $request->all();
		$obj = new Guarantor();
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
		unset($data['_token']);
		// dd($data);
		$obj->create($data);
		$response = array('flag'=>true,'msg'=>'Blog added sucessfully.','action'=>'reload');
            echo json_encode($response); return redirect(url('/guarantor'));
		}
		$guarantors = Guarantor::all();
		$data = [];
		$data['guarantors'] = $guarantors;
		return view('create_guarantor', $data);
		
	}
	public function update(Request $request, $id){
		$guarantor = Guarantor::find($id);
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
			$guarantor->update($data);
				$response = array('flag'=>true,'msg'=>'Blog Updated sucessfully.','action'=>'reload');
            echo json_encode($response); return redirect(url('/guarantor'));

		}

		$data = [];
		$data['guarantor'] = $guarantor;
		$data['id'] = $id;
		return view('update_guarantor', $data);

	}


	public function delete($id){
		Guarantor::destroy($id);
		$response = array('flag'=>true,'msg'=>'Blog  Deleted sucessfully.','action'=>'reload');
            echo json_encode($response); return redirect(url('/guarantor'));
	}
}
