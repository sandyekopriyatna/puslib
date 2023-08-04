<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class TracerstudyController extends Controller
{
    public function index()
    {
    	
    	$kerja = \App\Models\Kerja::all();
    	
        return view('tracerstudy.index',['kerja' => $kerja]);

        }
        
}
