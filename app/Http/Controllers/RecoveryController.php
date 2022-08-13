<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Recovery;

class RecoveryController extends Controller
{
     public function index(Request $request){
		$recoveries = Recovery::with('loan.borrower');
		// dd($loans);
		if(@$request->loan_id){
			// dd($request->all());
			$recoveries = $recoveries->where('loan_id', $request->loan_id);
		}
		$data = [];
		$data['recoveries'] = $recoveries->get()->toArray();
		return view('recovery', $data);
	}
	public function create(Request $request, $id=null){
		if($request->isMethod('post')){

			$data = $request->all();
			$obj = new Recovery();
			unset($data['_token']);
			$obj->create($data);
			$response = array('flag'=>true,'msg'=>'Blog added sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/recovery'));
		}
		$loans = Loan::with('borrower')->get()->toArray();
		$data = [];
		$data['loans'] = $loans;
		// dd($data);
		return view('create_recovery', $data);
		
	}
	public function update(Request $request, $id){
		$recoveries = Recovery::with('loan.borrower')->where('id', $request->id)->get()->first();
		if($request->isMethod('post')){
			$data = $request->all();
			$recoveries->update($data);
			$response = array('flag'=>true,'msg'=>'Blog Updated sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/recovery'));

		}
			// dd($request->id);
		// dd($recoveries);
		$data = [];
		$data['recoveries'] = $recoveries->toArray();
		$data['id'] = $id;

		return view('update_recovery', $data);

	}


	public function delete($id){
		Recovery::destroy($id);
		$response = array('flag'=>true,'msg'=>'Blog  Deleted sucessfully.','action'=>'reload');
		echo json_encode($response); return redirect(url('/recovery'));
	}
}
