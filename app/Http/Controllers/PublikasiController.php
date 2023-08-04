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
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;


class PublikasiController extends Controller
{
    public function index(Request $request)
    {
  	
        $data_publikasi =Publikasi::select("*")->where("user_id","=",auth()->user()->id)
        ->orderBy('created_at','desc')->get();
        $data_harga = \App\Models\Harga::all();
        	return view  ('publikasi.index',compact(['data_publikasi','data_harga'])) ;
    }
    public function getPenelitian($id)
    {
       echo json_encode (\App\Models\Harga::select("*")->where('id_penelitian',$id)->get());
    
    }
    public function GetSubCatAgainstMainCatEdit($id){
        echo json_encode(DB::table('Harga')->where('id_penelitian', $id)->get());
    }

    public function disetujui(Request $request)
    {


    
        $data_publikasi =Publikasi::select("*")->where("user_id","=",auth()->user()->id)->where("status","=","approved")->get();
        $data_harga = \App\Models\Harga::all();
            return view  ('publikasi.disetujui',compact(['data_publikasi','data_harga'])) ;
    }

    public function ditolak(Request $request)
    {
    
        $data_publikasi =Publikasi::select("*")->where("user_id","=",auth()->user()->id)->where("status","=","rejected")->get();
        $data_harga = \App\Models\Harga::all();
            return view  ('publikasi.ditolak',compact(['data_publikasi','data_harga'])) ;
    }
    public function insert()
    {
      $data_publikasi = \App\Models\Publikasi::all();
      $data_harga = \App\Models\Harga::all();
     
      $data_prodi = \App\Models\Prodi::all(); 


      $data_penelitian = \DB::table('penelitian')->orderBy('nama','ASC')->get();
        $data['penelitian'] = $data_penelitian;
        return view('publikasi.insert',compact(['data_publikasi','data_harga','data_prodi','data_penelitian'])) ;
    }

    public function fetchStates($country_id = null) {
        $states = \DB::table('harga')->where('id_penelitian',$country_id)->get();

        return response()->json([
            'status' => 1,
            'states' => $states
        ]);
    }

    public function subharga(Request $request)
    {
         
        $id_penelitian = $request->id_penelitian;
         
        $subharga = \App\Models\Penelitian::where('id',$id_penelitian)
                              ->with('harga')
                              ->get();
        return response()->json([
            'harga' => $subharga
        ]);
    }

    public function getJurnal(Request $request){
        $cid=$request->post('cid');
        $state=DB::table('state')->where('country',$cid)->orderBy('state','asc')->get();
        $html='<option value="">Select State</option>';
        foreach($state as $list){
            $html.='<option value="'.$list->id.'">'.$list->state.'</option>';
        }
        echo $html;
    }

    public function profile($id)
    {

        
        $publikasi = \App\Models\Publikasi::find($id);
        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();
            return view  ('publikasi.profile',compact(['publikasi','data_harga','user'])) ;
    }
    


    public function create(Request $request)
    {
       $publikasi = new \App\Models\Publikasi;

        $publikasi->prodi = $request->prodi;
         $publikasi->judul = $request->judul;
        $publikasi->id_harga = $request->id_harga;
        $publikasi->id_penelitian = $request->id_penelitian;
        $publikasi->tanggal_terbit = $request->tanggal_terbit;
        $publikasi->edisi = $request->edisi;
        $publikasi->alamat_online = $request->alamat_online;
        $publikasi->onedrive = $request->onedrive;
        $publikasi->user_id = auth()->user()->id;
        $publikasi->status = 'pending';
        if ($request->hasFile('dokumen')){ 
            $request->file('dokumen')->move('images/repo',$request->file('dokumen')->getClientOriginalName());
        $publikasi->dokumen = $request->file('dokumen')->getClientOriginalName();
        $publikasi->save();
        }
         $publikasi->save();
    	return redirect ('/publikasi')->with('sukses','Data Berhasil Diinput ');
    }

    public function revisi($id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        return view('publikasi/revisi',['publikasi' => $publikasi]);
    }

    public function updaterevisi(Request $request, $id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        $publikasi->status = 'pending';
        $publikasi->update($request->all());
        $publikasi->save();
       
        return redirect('publikasi/ditolak')->with ('sukses','Data Berhasil Diupdate');
    }

    

    public function diperiksa(Request $code)
    {

    
        $data_publikasi =Publikasi::select("*")->where("status","=","WD2")->whereNULL("pencairan")->get();
        $data_harga = \App\Models\Harga::all(); 
            return view  ('publikasi.diperiksa',compact(['data_publikasi','data_harga'])) ;

    }

    public function pencairan($id) {

      $publikasi = \App\Models\Publikasi::find($id);
        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();
            return view  ('publikasi.tglpencairan',compact(['publikasi','data_harga','user'])) ;
       
      }
       public function updatepencairan(Request $request, $id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        $publikasi->update($request->all());
        $publikasi->url2=URL::temporarySignedRoute('homevalid2',now()->addMinutes(1440),[ 
                'data'=> uniqid()
          ]);
        $publikasi->status='direktur';
        $publikasi->wadir2=Carbon::now();
        $publikasi->save();

         $apikey="b0c654a43d79fdac59144949fbedfc0d5af46646";
            $tujuan="628123980648"; //atau $tujuan="Group Chat Name";
           
            $pesan="Hi, Bapak / Ibu M Nur A Nasution  \n Ada pengajuan publikasi BTP yang menunggu verifikasi anda
            \n Silahkan klik link berikut untuk melakukan verifikasi: \n ";
            $pesan1=$publikasi->url2;

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
       
        return redirect('publikasi/diperiksa')->with ('sukses','Data Berhasil Diupdate');
    }

    public function linkdir(Request $request, $id)
    {

        $publikasi = \App\Models\Publikasi::find($id);
    
       $apikey="b0c654a43d79fdac59144949fbedfc0d5af46646";
            $tujuan="628123980648"; //atau $tujuan="Group Chat Name";
           
            $pesan="Hi, Bapak / Ibu M Nur A Nasution  \n Ada pengajuan publikasi BTP yang menunggu verifikasi anda
            \n Silahkan klik link berikut untuk melakukan verifikasi: \n \n";
            $pesan1=$publikasi->url2;

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

     public function diketahui(Request $request)
    {
    
        $data_publikasi =Publikasi::select("*")->where("status","=","direktur")->whereNotNULL("pencairan")->whereNULL("diketahui")->get();
        $data_harga = \App\Models\Harga::all();


      
            return view  ('publikasi.diketahui',compact(['data_publikasi','data_harga'])) ;
    }

    public function verifikasi($id) {

      $publikasi = \App\Models\Publikasi::find($id);
        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();
            return view  ('publikasi.verifikasi',compact(['publikasi','data_harga','user'])) ;
       
      }
       public function updateverifikasi(Request $request, $id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        $publikasi->diketahui=Carbon::now();
         $publikasi->direktur=Carbon::now();
          $publikasi->status='keuangan';
        $publikasi->update($request->all());

        $publikasi->save();


       
        return redirect('publikasi/diketahui')->with ('sukses','Data Berhasil Diupdate');
    }

    public function lengkap(Request $request)
    {
    
        $data_publikasi =Publikasi::select("*")->where("status","=","keuangan")->whereNotNULL("pencairan")->whereNotNULL("diketahui")->orderBy('created_at', 'desc')->get();
        $data_harga = \App\Models\Harga::all();


      
            return view  ('publikasi.lengkap',compact(['data_publikasi','data_harga'])) ;
    }

     public function profilelengkap($id)
    {

        
        $publikasi = \App\Models\Publikasi::find($id);
        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();
            return view  ('publikasi.profilelengkap',compact(['publikasi','data_harga','user'])) ;
    }
    public function exportPdf($id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();

       


       $pdf = PDF::loadView('export.datapdf',compact(['publikasi','data_harga','user'])) ;
    
        return $pdf->download('datapublikasi.pdf');
    }
    public function exportpr($id)
    {
        $publikasi = \App\Models\Publikasi::find($id);
        $data_harga = \App\Models\Harga::all();
        $user = \App\Models\User::all();

       


       $pdf = PDF::loadView('export.datapr',compact(['publikasi','data_harga','user']))->setPaper('a4', 'landscape'); ;
    
        return $pdf->download('purchaserequest.pdf');
    }
}
