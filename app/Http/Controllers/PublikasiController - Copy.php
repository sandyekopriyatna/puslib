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

class PublikasiController extends Controller
{
    public function index(Request $request)
    {
    	

      
    		
        $data_publikasi =Publikasi::select("*")->where("status","=","pending")->get();
            
      
        $data_harga = \App\Models\Harga::all();
            
    	
    	
    	
    			
		
    	
    	return view  ('publikasi.index',compact(['data_publikasi','data_harga'])) ;
        
    }

    public function insert()
    {
      $data_publikasi = \App\Models\Publikasi::all();
      $data_harga = \App\Models\Harga::all();
      $data_prodi = \App\Models\Prodi::all();

        
        
        return view('publikasi.insert',compact(['data_publikasi','data_harga','data_prodi'])) ;
    }

    public function approved($id) {

      $data = \App\Models\Publikasi::find($id);
     
      $data->status='approved';
      $data->save();
      

      
      
      


      return redirect()->back();
       
      }


    public function create(Request $request)
    {
       $publikasi = new \App\Models\Publikasi;

        $publikasi->prodi = $request->prodi;
        $publikasi->id_harga = $request->id_harga;
        $publikasi->tanggal_terbit = $request->tanggal_terbit;
        $publikasi->edisi = $request->edisi;
        $publikasi->alamat_online = $request->alamat_online;
        $publikasi->onedrive = $request->onedrive;
        $publikasi->status = 'pending';
        if ($request->hasFile('dokumen')){ 
            $request->file('dokumen')->move('images/repo',$request->file('dokumen')->getClientOriginalName());
        $publikasi->dokumen = $request->file('dokumen')->getClientOriginalName();
        $publikasi->save();
        }
         $publikasi->save();
    	return redirect ('/publikasi')->with('sukses','Data Berhasil Diinput ');
    }
}
