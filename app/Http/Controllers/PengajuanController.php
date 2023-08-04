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
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class PengajuanController extends Controller
{
    public function index(Request $request)
    {
    	

      
    		
       $data_publikasi =Publikasi::select("*")->where("status","=","pending")->orderBy('created_at','desc')->get();
            
    	
    	  $data_harga = \App\Models\Harga::all();
    	  $user = \App\Models\User::all();
    			
		
    	
    	return view  ('pengajuan.index',compact(['data_publikasi','data_harga','user'])) ;
        
    }

    public function insert()
    {
      $data_publikasi = \App\Models\Publikasi::all();
      $data_harga = \App\Models\Harga::all();
      $data_prodi = \App\Models\Prodi::all();

        
        
        return view('Pengajuan.insert',compact(['data_publikasi','data_harga','data_prodi'])) ;
    }

    public function approved($id) {





      $data = \App\Models\Publikasi::find($id);
     
      $data->status='WD2';
      $data->url=URL::temporarySignedRoute('homevalid',now()->addMinutes(1440),[ 
                'data'=> uniqid()
          ]);
      $data->puslitabmas=Carbon::now();
      $data->save();
      
      $apikey="b0c654a43d79fdac59144949fbedfc0d5af46646";
            $tujuan="6281364628864"; //atau $tujuan="Group Chat Name";
            $pesan="Hi, Bapak / Ibu Syafruddin Rais \n Ada pengajuan publikasi BTP yang menunggu verifikasi anda
            \n Silahkan klik link berikut untuk melakukan verifikasi: \n \n ";
            $pesan1=$data->url;


            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://starsender.online/api/sendText?message='.rawurlencode($pesan).''.rawurlencode($pesan1).'&tujuan='.rawurlencode($tujuan.'@s.whatsapp.net'),
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_HTTPHEADER => array(
                'apikey: '.$apikey
              ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

           
      


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

    public function tolak($id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        return view('pengajuan/alasan',['publikasi' => $publikasi]);
    }

    public function updatealasan(Request $request, $id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        $publikasi->update($request->all());
         $publikasi->status='rejected';
        
        $publikasi->save();
       
        return redirect('/pengajuan')->with ('sukses','Data Berhasil Diupdate');
    }
}
