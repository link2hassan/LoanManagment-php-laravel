<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Doner;

class PaymentController extends Controller
{
	public function index(){
		$payment = Payment::with('doner')->get()->toArray();
		$data = [];
		$data['payments'] = $payment;
		return view('payment', $data);
	}
	public function create(Request $request, $id=null){
		if($request->isMethod('post')){

			$data = $request->all();
			$obj = new Payment();
			unset($data['_token']);
		// dd($data);
			$obj->create($data);
			$response = array('flag'=>true,'msg'=>'Blog added sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/payment'));
		}
		$doners = Doner::all();
		$data = [];
		$data['doners'] = $doners;
		return view('create_payment', $data);
		
	}
	public function update(Request $request, $id){
		$payment = Payment::find($id);
		// dd($blog);
		if($request->isMethod('post')){
			$data = $request->all();
			$payment->update($data);
			$response = array('flag'=>true,'msg'=>'Blog Updated sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/payment'));

		}

		$data = [];
		$doners = Doner::all();
		$data['doners'] = $doners;
		$data['payment'] = $payment;
		$data['id'] = $id;

		return view('update_payment', $data);

	}


	public function delete($id){
		Payment::destroy($id);
		$response = array('flag'=>true,'msg'=>'Blog  Deleted sucessfully.','action'=>'reload');
		echo json_encode($response); return redirect(url('/payment'));
	}
}
