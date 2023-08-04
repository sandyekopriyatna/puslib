<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Stroage;

class SiteController extends Controller
{
    public function home()
    {

        //$pegawais = Pegawai::orderBy('nama', 'asc')->limit(10)->get();
        $loker=Loker::orderBy('created_at','desc')->where("category","=","kegiatan")->limit(5)->get();
        $loker1=Loker::orderBy('created_at','desc')->where("category","=","loker")->limit(5)->get();
        //$loker= Loker::limit(3)->get();
       
    	return view  ('sites.home',compact(['loker','loker1'])) ;

     }


     

     public function about()
    {
    	return view  ('sites.about') ;

     }

      public function tampilloker()
    {

        $loker=Loker::select("*")->where("category","=","loker")->get();
        
        return view  ('sites.tampilloker',compact(['loker'])) ;

     }

     public function tampilkegiatan()
    {
        $kegiatan=Loker::select("*")->where("category","=","kegiatan")->get();
        return view  ('sites.tampilkegiatan',compact(['kegiatan'])) ;

     }

     public function singlepost($slug)
     {
     	$loker= Loker::where('slug','=',$slug)->limit(4)->first();

        
        $loker1=Loker::orderBy('created_at','desc')->limit(5)->get();
     	return view ('sites.singlepost',compact(['loker','loker1']));
     }
     public function directorialumni()
     {
        
        $data_anggota = \App\Models\Anggota::all();
            
        
        
        
        return view('sites.directorialumni',['data_anggota' => $data_anggota]);
     }

     public function latest(Request $request)
     {


        


        

         $data_repo = \App\Models\Repo::orderBy('created_at','desc')->limit(20)->get();   
        
            
        return view('sites.latest',compact('data_repo'));
     }

     public function view( Request $request)
     {
        
        if ($request->has('search')) {
            $data_repo= \App\Models\Repo::where('title','LIKE','%'.$request->search.'%');
        }


        $data_repo = \App\Models\Repo::all();
            
        
        
        
        return view('sites.view',['data_repo' => $data_repo]);
     }

     public function year( Request $request)
     {
        
        if ($request->has('search')) {
            $data_repo= \App\Models\Repo::where('title','LIKE','%'.$request->search.'%');
        }


        $data_repo = \App\Models\Repo::all();
            
        
        
        
        return view('sites.year',['data_repo' => $data_repo]);
     }

    public function authorsite( Request $request)
     {
        
        if ($request->has('search')) {
            $data_author= \App\Models\Author::where('author','LIKE','%'.$request->search.'%');
        }


        $data_author= \App\Models\Author::all();
            
        
        
        
        return view('sites.author',['data_author' => $data_author]);
     }

    public function viewyear()
     {
        
       
        // $loker=Loker::select("*")->where("category","=","loker")->get();

        $data_repo= \App\Models\Repo::select("*")->  where("year","=","2022")->get();
      
            
        
        
        
        return view('sites.viewyear',['data_repo' => $data_repo]);
     }

     public function viewauthor($id)
    {

        
        $author = \App\Models\Author::find($id);
         
         
                
                return view('sites.viewauthor',['author' => $author]);
    }   

     public function download(Request $request, $file)
    {

        
        return response()->download(public_path('images/'.$file_repo));
    }   






     public function browseyear($id)
    {
        $anggota = \App\Models\Repo::find($id);
                return view('sites.profilalumni',['anggota' => $anggota]);
    }
}
