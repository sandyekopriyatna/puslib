<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_author = \App\Models\Author::where('author', 'LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_author = \App\Models\Author::all();
    	}
    	
    	
    	return view('author.index',['data_author' => $data_author]);
        
    }

    public function create(Request $request)
    {
        

       	$author = new \App\Models\Author;
        
        $author->author = $request->author;
       
        $author->save();
    	

    	return redirect ('/author')->with('sukses','Data Berhasil Diinput ');


    	
    }

    public function edit($id)
    {
    	$author = \App\Models\Author::find($id);
    	return view('author/edit',['author' => $author]);
    }

    public function update(Request $request, $id)
    {
    	$author = \App\Models\Author::find($id);
    	$author->update($request->all());
        
        $author->save();
        
    	return redirect('/author')->with ('sukses','Data Berhasil Diupdate');
    }


     public function delete($id)
    {
    	$author = \App\Models\Author::find($id);
    	$author->delete($author);
    	return redirect('/author')->with ('sukses','Data Berhasil dihapus');
    }
}
