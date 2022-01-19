<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class ShowTrackController extends Controller
{
    public function trackSearch()
 {
     $key= request()->search;
    //  dd($key);
     $trackings=CustomerInfo::where('track_number','LIKE',"%{$key}%")->get();
    //  dd($trackings);
     return view('frontend.pages.show-tracking',compact('trackings'));
 }
}
