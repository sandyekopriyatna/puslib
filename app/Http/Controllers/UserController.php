<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_user = \App\Models\User::where('name', 'LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_user = \App\Models\User::all();
    	}
    	
    	
    	return view('user.index',['data_user' => $data_user]);
        
    }

    public function create(Request $request)
    {
        

       	$user = new \App\Models\User;
        
        $user->name = $request->name;
        $user->nidn = $request->nidn;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();
    	

    	return redirect ('/user')->with('sukses','Data Berhasil Diinput ');


    	
    }

     public function delete($id)
    {
    	$user = \App\Models\User::find($id);
    	$user->delete($user);
    	return redirect('/user')->with ('sukses','Data Berhasil dihapus');
    }

    public function edit($id)
    {
        $user = \App\Models\User::find($id);
        return view('user/edit',['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = \App\Models\User::find($id);
        $user->update($request->all());
        
        $user->save();
       
        return redirect('/user')->with ('sukses','Data Berhasil Diupdate');
    }


    public function CPassword()
    {
        
        return view('user/password');
    }

     public function updatepassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'

        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)){
            $user = \App\Models\User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('success','Password is Changed');

        }else{
            return redirect()->back->with('error','Current Password is Invalid');

        }


       
        
    }

}
