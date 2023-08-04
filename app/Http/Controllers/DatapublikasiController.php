<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use PDF;
use App\Models\Publikasi;
use App\Models\Anggota;
use DB;
use App\Imports;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class DatapublikasiController extends Controller
{
    public function index(Request $request)
    {
    	

      
    		$data_publikasi =Publikasi::select("*")->where("status","!=","rejected")->where("status","!=","keuangan")->where("status","!=","pending")
            ->orderBy('created_at', 'desc')->get();
        
            
    	
    	  $data_harga = \App\Models\Harga::all();

    	
    			
		
    	
    	return view  ('datapublikasi.index',compact(['data_publikasi','data_harga'])) ;
        
    }

    public function profile($id)
    {

        
        $publikasi = \App\Models\Publikasi::find($id);
        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();
            return view  ('datapublikasi.profile',compact(['publikasi','data_harga','user'])) ;
    }

    
}
