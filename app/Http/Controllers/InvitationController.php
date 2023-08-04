<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Models\Publikasi;
use DB;
use App\Imports;
use Carbon\Carbon;
use App\Models\Anggota;


class InvitationController extends Controller
{

	

    public function generate()
    {
        

        return URL::temporarySignedRoute('homevalid',now()->addMinutes(300),[ 
                'data'=> uniqid()
          ]);






         
    }
    public function index($data)
    {
       
      $data_publikasi = Publikasi::select("*")->where("url","=",url()->full())->get();




        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();
        echo url()->full();
       
            return view  ('verifikasi.pencairan',compact(['data_publikasi','data_harga','user'])) ;   
    }

       public function updatepencairan(Request $request, $id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        $publikasi->update($request->all());
        $publikasi->wadir2=Carbon::now();
         $publikasi->status='direktur';
          $publikasi->url2=URL::temporarySignedRoute('homevalid2',now()->addMinutes(300),[ 
                'data'=> uniqid()
          ]);
        $publikasi->save();

        $apikey="b0c654a43d79fdac59144949fbedfc0d5af46646";
            $tujuan="6281364628864"; //atau $tujuan="Group Chat Name";
            $pesan=$publikasi->url2;

            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://starsender.online/api/sendText?message='.rawurlencode($pesan).'&tujuan='.rawurlencode($tujuan.'@s.whatsapp.net'),
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
       
        return redirect('verifikasi/berhasil')->with ('sukses','Data Berhasil Diupdate');
    }

  		public function berhasil()
    {
    	return view ('verifikasi.berhasil');
    }



    public function index2($data)
    {
       
      $data_publikasi = Publikasi::select("*")->where("url2","=",url()->full())->get();




        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();
        echo url()->full();
       
            return view  ('verifikasi.diketahui',compact(['data_publikasi','data_harga','user'])) ;   
    }

       public function updatediketahui(Request $request, $id)
    {
       $publikasi = \App\Models\Publikasi::find($id);
        $publikasi->diketahui=Carbon::now();
         $publikasi->direktur=Carbon::now();
         $publikasi->status='keuangan';
        $publikasi->update($request->all());

        $publikasi->save();
       
        return redirect('verifikasi/berhasil')->with ('sukses','Data Berhasil Diupdate');
    }

  	
}