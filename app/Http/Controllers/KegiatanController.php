<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
	public function index()
	    {
	    	$kegiatans= Kegiatan::all();
	    	return view('kegiatans.index',compact(['kegiatans']));
	    } 

	public function add()
	   {
	   	return view('kegiatans.add');
	   } 
	 public function create(Request $request)
	   {

	   
	   

 		$request->request->add(['user_id' => auth()->user()->id]);
        $kegiatan = \App\Models\Kegiatan::create($request->all());
        if ($request->hasFile('thumbnail')){ 
            $request->file('thumbnail')->move('images/kegiatan/',$request->file('thumbnail')->getClientOriginalName());
        $kegiatan->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $kegiatan->save();

	   }

	   		

	   	return redirect()->route('kegiatans.index')->with('sukses','Data berhasil diinput');

	   }     


}
