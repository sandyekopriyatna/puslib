<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use PDF;
use App\Models\Office;
use App\Models\Anggota;
use DB;
use App\Imports;
use Maatwebsite\Excel\Facades\Excel;



class OfficeController extends Controller
{
      public function index(Request $request)
    {
    	
    		$data_office = \App\Models\Office::all();
            
    	
    	
    	
    	return view('office.index',['data_office' => $data_office]);
        
    }
   
}
