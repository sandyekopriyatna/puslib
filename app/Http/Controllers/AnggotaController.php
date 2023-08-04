<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use PDF;
use App\Models\Kerja;
use App\Models\Anggota;
use DB;
use App\Imports;
use Maatwebsite\Excel\Facades\Excel;


class AnggotaController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_anggota = \App\Models\Anggota::where('nama_lengkap', 'LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_anggota = \App\Models\Anggota::all();
            
    	}
    	
    	
    	return view('anggota.index',['data_anggota' => $data_anggota]);
        
    }


   
   
    public function tracer()
    {
        $data= DB::table('kerja')
        ->join('anggota','anggota.id','=','kerja.id_anggota')
        ->select('anggota.nim','anggota.nama_lengkap','kerja.tempat_kerja','kerja.jabatan','kerja.waktu','kerja.status','kerja.gaji')
        ->get();
            
            return view('anggota.tracer',compact(['data']));
             
       

        }


    public function kerja()
    {
        $kerja = \App\Models\Kerja::all();
        return view('kerja.index',['kerja' => $kerja]);        
       

        }

    public function insertkerja()
    {
        
        return view('kerja.insert');
    }

    public function createkerja(Request $request)
       {

       
       

        $request->request->add(['id_anggota' => auth()->user()->anggota->id]);
        $kerja = \App\Models\Kerja::create($request->all());
        
        $kerja->save();

        return redirect('/profilsaya');
       }




    public function profilsaya(Request $request)
    {
     
                

        $tracer=Kerja::select("*")->where('id_anggota', '=',auth()->user()->anggota->id )->where("waktu","=","<3")->get();
        $tracer1=Kerja::select("*")->where('id_anggota', '=',auth()->user()->anggota->id )->where("waktu","=","1-3")->get();
        $tracer22=Kerja::select("*")->where('id_anggota', '=',auth()->user()->anggota->id )->where("waktu","=","3-6")->get();
        $tracer33=Kerja::select("*")->where('id_anggota', '=',auth()->user()->anggota->id )->where("waktu","=",">6")->get();
        //return view('anggota.profilsaya',['tracer' => $tracer],['tracer1' => $tracer1]);
      return view('anggota.profilsaya',compact(['tracer','tracer1','tracer22','tracer33']));
         
    }

    public function create(Request $request)
    {
        

        //Insert ke table Users
        $user = new \App\Models\User;
        $user->role = 'anggota';
        $user->name = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        $user->remember_token = Str::random(60);
        $user->save();

        //Insert ke table anggota
        $request->request->add(['user_id' => $user->id]);
        $anggota = \App\Models\Anggota::create($request->all());
        if ($request->hasFile('avatar')){ 
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
        $anggota->avatar = $request->file('avatar')->getClientOriginalName();
        $anggota->save();
        }

        //insert ke tabel riwayat pendidikan
        if ($request->filled('nama_lengkap')){
        $request->request->add(['id_anggota' => $anggota->id]);
        $data_akademik = \App\Models\data_akademik::create($request->all());
       
        $data_akademik->save();
                }

        

    	return redirect ('/anggota')->with('sukses','Data Berhasil Diinput ');


    	
    }
     
     public function insert()
    {
        
        return view('anggota.insert');
    }

    public function edit($id)
    {
    	$anggota = \App\Models\Anggota::find($id);
    	return view('anggota/edit',['anggota' => $anggota]);
    }
     public function editalumni($id)
    {
        $anggota = \App\Models\Anggota::find($id);
        return view('anggota/editalumni',['anggota' => $anggota]);
    }

     public function tambahriwayat(Request $request, $id)
    {
        $anggota = \App\Models\Anggota::find($id);
         if ($request->filled('nim')){
        $request->request->add(['id_anggota' => $anggota->id]);
        $data_akademik = \App\Models\data_akademik::create($request->all());
       
        $data_akademik->save();
                }
                    return view('anggota.profile',['anggota' => $anggota])->with ('sukses','Data Berhasil Diupdate');
    }

   

     public function update(Request $request, $id)
    {
    	$anggota = \App\Models\Anggota::find($id);
    	$anggota->update($request->all());
        if ($request->hasFile('avatar')){ 
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
        $anggota->avatar = $request->file('avatar')->getClientOriginalName();
        $anggota->save();
        }
    	return redirect('/anggota')->with ('sukses','Data Berhasil Diupdate');
    }

    public function updatealumni(Request $request, $id)
    {
        $anggota = \App\Models\Anggota::find($id);
        $anggota->update($request->all());
        if ($request->hasFile('avatar')){ 
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
        $anggota->avatar = $request->file('avatar')->getClientOriginalName();
        $anggota->save();
        }
        return redirect('/profilsaya')->with ('sukses','Data Berhasil Diupdate');
    }
    



    public function delete($id)
    {
    	$anggota = \App\Models\Anggota::find($id);
    	$anggota->delete($anggota);
    	return redirect('/anggota')->with ('sukses','Data Berhasil dihapus');
    }

    public function profile($id)
    {

        
        $anggota = \App\Models\Anggota::find($id);
         
         
                
                return view('anggota.profile',compact(['anggota']));
    }

    

    


}

