<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;

class DashboardController extends Controller
{
    public function index()
    {
    		

    		$publikasi = \DB::table('publikasi')->where("status","=","keuangan")
            ->get();
			$approved = $publikasi->count();

			$rejected = \DB::table('publikasi')->where("status","=","rejected")
            ->count();
	
             	

                
    	
    		return view('dashboard.index', compact('approved','rejected'));


    }
}
