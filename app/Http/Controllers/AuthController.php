<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function postlogin(Request $request)
    {
    	
        $input = $request->all();
  
        $this->validate($request, [
            'nidn' => 'required',
            'password' => 'required',
        ]);

        $fieldType = filter_var($request->nidn, FILTER_VALIDATE_EMAIL) ? 'email' : 'nidn';
        if(auth()->attempt(array($fieldType => $input['nidn'], 'password' => $input['password'])))
        {
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with('error','Email-Address And Password Are Wrong.');
        }


    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
