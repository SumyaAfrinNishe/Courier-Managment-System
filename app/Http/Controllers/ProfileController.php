<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function statusView()
    {
        $customerinfolist=CustomerInfo::all();
        return view('frontend.pages.profile-view',compact('customerinfolist'));
    }
}
