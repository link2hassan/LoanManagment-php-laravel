<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doner;
use PDF;
// use Barryvdh\DomPDF\Facade\Pdf;
class DonerController extends Controller
{
    //
	public function index(){
		$doners = Doner::all();
		$data = [];
		$data['doners'] = $doners;
		return view('doner', $data);
	}
	public function create(Request $request, $id=null){
		if($request->isMethod('post')){

			$data = $request->all();
			$obj = new Doner();
			unset($data['_token']);
		// dd($data);
			$obj->create($data);
			$response = array('flag'=>true,'msg'=>'Blog added sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/doner'));
		}
		$doners = Doner::all();
		$data = [];
		$data['doners'] = $doners;
		return view('create_doner', $data);
		
	}
	public function update(Request $request, $id){
		$doner = Doner::find($id);
		// dd($blog);
		if($request->isMethod('post')){
			$data = $request->all();
			$doner->update($data);
			$response = array('flag'=>true,'msg'=>'Blog Updated sucessfully.','action'=>'reload');
			echo json_encode($response); return redirect(url('/doner'));

		}

		$data = [];
		$data['doner'] = $doner;
		$data['id'] = $id;

		return view('update_doner', $data);

	}


	public function delete($id){
		Doner::destroy($id);
		$response = array('flag'=>true,'msg'=>'Blog  Deleted sucessfully.','action'=>'reload');
		echo json_encode($response); return redirect(url('/doner'));
	}

	public function detail($id){
		$doner = Doner::with('payments')->where('id', $id)->get()->toArray();
		$data = [];
		// dd($doner);
		$data['doner'] = $doner;
		return view('doner_detail', $data);
	}

	public function details(Request $request, $id)
	{
		$doner = Doner::with('payments')->where('id', $id)->get()->first()->toArray();
		$data = [];
		$data['doner'] = $doner;
		$pdf = PDF::loadView('doner_pdf', $data)->setOptions(['defaultFont' => 'sans-serif']);
		return $pdf->download('Doner.pdf');
	}
}
