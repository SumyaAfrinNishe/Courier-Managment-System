<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function registrationstore(Request $request){
       
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
        ]);
        return redirect()->route('registration');
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
     
        if(Auth::attempt($userpost))
        {
            return redirect()->route('home');
        }
        else
        return redirect()->route('login');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
