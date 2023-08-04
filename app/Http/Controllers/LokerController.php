<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;

class LokerController extends Controller
{
	public function index()
	    {
	    	$lokers= Loker::all();
	    	return view('lokers.index',compact(['lokers']));
	    } 

	public function add()
	   {
	   	return view('lokers.add');
	   } 
	 public function create(Request $request)
	   {

	   
	   

 		$request->request->add(['user_id' => auth()->user()->id]);
        $loker = \App\Models\Loker::create($request->all());
        if ($request->hasFile('thumbnail')){ 
            $request->file('thumbnail')->move('images/loker/',$request->file('thumbnail')->getClientOriginalName());
        $loker->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $loker->save();

	   }

	   		

	   	return redirect()->route('lokers.index')->with('sukses','Data berhasil diinput');

	   }    

	   public function delete($id)
    {
    	$loker = \App\Models\Loker::find($id);
    	$loker->delete($loker);
    	return redirect('/loker')->with ('sukses','Data Berhasil dihapus');
    }
 


}
