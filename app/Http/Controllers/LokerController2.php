<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Loker;

class LokerController extends Controller
{
	public function index()
	{
		$url = url('images/loker/'.'1624853593_3x4.jpg/orYzso1xAX6CwMTX7e4sDWMQqNiwVzQyCOlenbAC.jpg');
		return "<img src='{$url}'>";

		$lokers= Loker::all();
		return view('lokers.index',compact(['lokers']));
	} 

	public function add()
	{
		return view('lokers.add');
	} 
	public function create(Request $request)
	{
		// upload image
		if ($request->hasFile('thumbnail')) {
			$image = $this->uploadImage($request);
			dd($image);
		}

		$loker= Loker::create([
			'title'=> $request->title,
			'content' => $request->content,
			'user_id' => auth()->user()->id,
			'thumbnail' => $image ?? null, 
		]);

		return redirect()->route('lokers.index')->with('sukses','Data berhasil diinput');

	}

	private function uploadImage(Request $request)
	{
		$file = $request->thumbnail;
		$fileName = now()->timestamp.'_'.$file->getClientOriginalName();

		return Storage::disk('loker')->putFile($fileName, $request->file('thumbnail'));
	}

	

}
