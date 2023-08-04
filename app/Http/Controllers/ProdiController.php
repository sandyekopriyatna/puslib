<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_prodi = \App\Models\Prodi::where('prodi', 'LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_prodi = \App\Models\Prodi::all();
    	}
    	
    	
    	return view('prodi.index',['data_prodi' => $data_prodi]);
        
    }

    public function create(Request $request)
    {
        

       	 $prodi = \App\Models\Prodi::create($request->all());
    	

    	return redirect ('/prodi')->with('sukses','Data Berhasil Diinput ');


    	
    }

    public function edit($id)
    {
    	$prodi = \App\Models\Prodi::find($id);
    	return view('prodi/edit',['prodi' => $prodi]);
    }

    public function update(Request $request, $id)
    {
    	$prodi = \App\Models\Prodi::find($id);
    	$prodi->update($request->all());
        
        $prodi->save();
        
    	return redirect('/prodi')->with ('sukses','Data Berhasil Diupdate');
    }


     public function delete($id)
    {
    	$prodi = \App\Models\Prodi::find($id);
    	$prodi->delete($prodi);
    	return redirect('/prodi')->with ('sukses','Data Berhasil dihapus');
    }
}
