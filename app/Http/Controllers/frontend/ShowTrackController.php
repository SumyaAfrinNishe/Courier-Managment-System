<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CourierRecord;
use Illuminate\Http\Request;

class ShowTrackController extends Controller
{
    public function trackSearch()
 {
     $key= request()->search;
    //  dd($key);
     $trackings=CourierRecord::where('consignment_no','LIKE',"%{$key}%")->get();
    //  dd($trackings);
     return view('frontend.pages.show-tracking',compact('trackings'));
 }
}
