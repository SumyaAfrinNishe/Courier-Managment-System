<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class HomeController extends Controller
{
    public function home()
    {
          return view('frontend.pages.home');
    }
    public function profile()
    {
        return view('frontend.pages.profile');
    }

    public function profileEdit()
    {
        return view('frontend.pages.update-profile');
    }

    public function profileUpdate(Request $request)
    {
       
         $id=auth()->user()->id;
         $user=User::find($id);
         $user->name=$request->input('name');
         $user->email=$request->input('email');
         $user->email=$request->input('email');
         $user->phone=$request->input('phone');
         $user->save();
            // 'image'=>$filename,

         return redirect()->back()->with('msg', 'Your Profile Update Successfully.');
     }
    }

