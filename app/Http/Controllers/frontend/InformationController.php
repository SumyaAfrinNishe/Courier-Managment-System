<?php

namespace App\Http\Controllers\frontend;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\InformationController;

class InformationController extends Controller
{
    public function information()
    {
        //dd("information");
        $customerinfolist=CustomerInfo::all();
        return view('frontend.pages.info2',compact('customerinfolist'));
    }

    public function customerinfoCreate(Request $request)
    {
        CustomerInfo::create([
            
            'yourname'=>$request->yourname,
            'youremail'=>$request->youremail,
            'yourcontact'=>$request->yourcontact,
            'receivername'=>$request->receivername,
            'receiveremail'=>$request->receiveremail,
            'receivercontact'=>$request->receivercontact,
            'type'=>$request->type,
            'quantity'=>$request->quantity,
            'branchname'=>$request->branchname,
            

         ]);
    }
}
