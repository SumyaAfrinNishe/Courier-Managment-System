<?php

namespace App\Http\Controllers\Frontend;
use Hash;
use Auth;
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
        return view('frontend.pages.Profile.profile');
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

     public function changePassword()
     {
        return view('frontend.pages.Profile.change-password');
     }

     public function updatePassword(Request $request)
     {
        if (!(Hash::check($request->get('old_pass'), Auth::user()->password))) 
        {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
     }
     if(strcmp($request->get('old_pass'), $request->get('new_pass')) == 0)
     {
        // Current password and new password same
        return redirect()->back()->with("error","New Password cannot be same as your current password.");
    }
    $validatedData = $request->validate([
        'old_pass' => 'required',
        'new_pass' => 'required|confirmed',
    ]);

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new_pass'));
    $user->save();

    return redirect()->back()->with("success","Password successfully changed!");
}
    }

