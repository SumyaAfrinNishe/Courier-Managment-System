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
        return view('frontend.pages.info2');
    }

    public function customerinfoCreate(Request $request)
    {
        //dd($request->all());
        // $request->validate([

        //     'yourname'=>'required',
        //     'youremail'=>'required',
        //     'yourcontact'=>'required|min:11|max:11',
        //     'receivername'=>'required',
        //     'receiveremail'=>'required',
        //     'receivercontact'=>'required|min:11|max:11',
        //     'type'=>'required',
        //     'quantity'=>'required',
        //     'branchname'=>'required'
        // ]);

        // dd($request->all());
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
         return redirect()->back();
    }

    public function customerDetails($info_id)
    {
        $info=CustomerInfo::find($info_id);
       // dd("$branch_id");
       return view('admin.layout.customer.cusinfo-details',compact('info'));
    }
   
    public function customerDelete($info_id)
    {
       //  dd($branch_id);
   
        $info=CustomerInfo::find($info_id)->delete();
        return redirect()->back()->with('Success','Customer Deleted');
    }
   
}
