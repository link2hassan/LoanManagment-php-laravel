<?php

namespace App\Http\Controllers;
use App\Loan;
use PDF;
use App\Borrower;
use App\Guarantor;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    //
    public function index(){
		$loans = Loan::with('borrower')->get()->toArray();
		// dd($loans);
		$data = [];
		$data['loans'] = $loans;
		return view('loan', $data);
	}
	public function create(Request $request, $id=null){
		if($request->isMethod('post')){

			$data = $request->all();
			$obj = new Loan();
			unset($data['_token']);
			$obj->create($data);
			$response = array('flag'=>true,'msg'=>'Blog added sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/loans'));
		}
		$loans = Loan::all();
		$borrowers = Borrower::all();
		$guarantors = Guarantor::all();
		$data = [];
		$data['borrowers'] = $borrowers;
		$data['guarantors'] = $guarantors;
		$data['loans'] = $loans;
		return view('create_loan', $data);
		
	}
	public function update(Request $request, $id){
		$loan = Loan::find($id);
		// dd($blog);
		if($request->isMethod('post')){
			$data = $request->all();
			$loan->update($data);
			$response = array('flag'=>true,'msg'=>'Blog Updated sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/loans'));

		}

		$borrowers = Borrower::all();
		$guarantors = Guarantor::all();
		$data = [];
		
		$data['borrowers'] = $borrowers;
		$data['guarantors'] = $guarantors;
		$data['loan'] = $loan;
		$data['id'] = $id;

		return view('update_loan', $data);

	}


	public function delete($id){
		Loan::destroy($id);
		$response = array('flag'=>true,'msg'=>'Blog  Deleted sucessfully.','action'=>'reload');
		echo json_encode($response); return redirect(url('/loans'));
	}

   public function detail($id){
   	$borrower = Borrower::with('loans.borrower')->with('loans.guarantor')->with('loans.recoveries')->where('id', $id)->get()->first()->toArray();
   	$data = [];
   	$data['borrower'] = $borrower;
   	return view('borrower_detail', $data);
   }
}
