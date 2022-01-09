<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CourierRecord;
use Illuminate\Http\Request;

class ShowCourierInfoController extends Controller
{
    public function showCourierInfo()
    {
        $confirms=CourierRecord::where('sender_name','');
        return view('frontend.pages.show-courier-info',compact('confirms'));
    }
}
