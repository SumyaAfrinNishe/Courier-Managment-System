<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function login()
    {
       return view('admin.login');
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
    //  dd((Auth::attempt($userpost)));
        if(Auth::attempt($userpost))
        {
            return redirect()->route('dashboard')->with('message','Login Successful');
        }
        else
        return redirect()->route('admin.login')->withErrors('Invalid user credentials');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logging out.');
    }
}
