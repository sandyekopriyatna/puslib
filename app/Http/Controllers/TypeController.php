<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_type = \App\Models\Type::where('type', 'LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_type = \App\Models\Type::all();
    	}
    	
    	
    	return view('type.index',['data_type' => $data_type]);
        
    }

    public function create(Request $request)
    {
        

       	$type = new \App\Models\Type;    
        $type->type = $request->type;     
        $type->save();
    	return redirect ('/type')->with('sukses','Data Berhasil Diinput ');


    	
    }

    public function edit($id)
    {
    	$type = \App\Models\Type::find($id);
    	return view('type/edit',['type' => $type]);
    }

    public function update(Request $request, $id)
    {
    	$type = \App\Models\Type::find($id);
    	$type->update($request->all());
        
        $type->save();
        
    	return redirect('/type')->with ('sukses','Data Berhasil Diupdate');
    }


     public function delete($id)
    {
    	$type = \App\Models\Type::find($id);
    	$type->delete($type);
    	return redirect('/type')->with ('sukses','Data Berhasil dihapus');
    }
}
