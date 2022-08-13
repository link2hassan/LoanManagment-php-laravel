<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expence;
use App\Payment;
use DB;

class ExpenceController extends Controller
{
    //
	public function index(){
		$expences = Expence::all();
		$data = [];
		$data['expences'] = $expences;
		return view('expence', $data);
	}
	public function create(Request $request, $id=null){
		if($request->isMethod('post')){

			$data = $request->all();
			$obj = new Expence();
			unset($data['_token']);
		// dd($data);
			$obj->create($data);
			$response = array('flag'=>true,'msg'=>'Blog added sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/expence'));
		}
		return view('create_expence');
		
	}
	public function update(Request $request, $id){
		$expence = Expence::find($id);
		// dd($blog);
		if($request->isMethod('post')){
			$data = $request->all();
			$expence->update($data);
			$response = array('flag'=>true,'msg'=>'Blog Updated sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/expence'));

		}

		$data = [];
		$data['expence'] = $expence;
		$data['id'] = $id;

		return view('update_expence', $data);

	}


	public function delete($id){
		Expence::destroy($id);
		$response = array('flag'=>true,'msg'=>'Blog  Deleted sucessfully.','action'=>'reload');
		echo json_encode($response); return redirect(url('/expence'));
	}


	public function monthly(){
		$items = Expence::select(
			DB::raw("SUM(amount) as amount"),
			DB::raw("MONTHNAME(created_at) as month_name")
		)
		->whereYear('created_at', date('Y'))
		->groupBy('month_name')
		->get()
		->toArray();

		$donations = Payment::select(
			DB::raw("SUM(amount) as donation"),
			DB::raw("MONTHNAME(created_at) as month_name")
		)
		->whereYear('created_at', date('Y'))
		->groupBy('month_name')
		->get()
		->toArray();

		// dd($donations);
		$data = [];
		$data['expences'] = $items;
		$data['donations'] = $donations;
		return view('monthly_statement', $data);

	}

	public function monthly_pdf(){
		$items = Expence::select(
			DB::raw("SUM(amount) as amount"),
			DB::raw("MONTHNAME(created_at) as month_name")
		)
		->whereYear('created_at', date('Y'))
		->groupBy('month_name')
		->get()
		->toArray();
		$donations = Payment::select(
			DB::raw("SUM(amount) as donation"),
			DB::raw("MONTHNAME(created_at) as month_name")
		)
		->whereYear('created_at', date('Y'))
		->groupBy('month_name')
		->get()
		->toArray();
		$data = [];
		$data['expences'] = $items;
		$data['donations'] = $donations;
		$pdf = \PDF::loadView('monthly', $data)->setOptions(['defaultFont' => 'sans-serif']);

		return $pdf->download('statement.pdf');
	}
}
