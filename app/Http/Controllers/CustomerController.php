<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerInfo;

class CustomerController extends Controller
{

    public function customerinfo()
    {
        $customerinfolist=CustomerInfo::all();
      //  dd($customerinfolist);
        return view('admin.layout.customer.cusinfo',compact('customerinfolist'));
    }

//     public function customerEdit($id)
//  {
//     //  dd($id);
//     $info=CustomerInfo::find($id);
//     // dd($info);
//      return view('admin.layout.customer.cusinfo-details',compact('info'));
//  }

 public function customerUpdate(Request $request,$id)
 {
   
     $info=CustomerInfo::find($id);
     if($info)
     {
        
        $a = $info->update([
               'price'=>$request->price,
               'pickup_date'=>$request->pickup_date,
               'pickup_time'=>$request->pickup_time,
         ]);


         return redirect()->back()->with('msg', 'Customer Info Updated Successfully.');
     }
 }
 
 public function customerDetails($info_id)
    {
        // dd($info_id);
        $info=CustomerInfo::find($info_id);
    
       return view('admin.layout.customer.cusinfo-details',compact('info'));
    }
   
    public function customerDelete($info_id)
    {
       //  dd($branch_id);
   
        $info=CustomerInfo::find($info_id)->delete();
        return redirect()->back()->with('Success','Customer Deleted');
    }

    public function customerAccept($info_id)
    {
        $info = CustomerInfo::find($info_id);
        if($info->status)
        {
            $info->update([
                'status' => 'approved'
            ]);
        }
        else
        {
            $info->update([
                'status' => 'cancelled'
            ]);   
        }
           
        return redirect()->back()->with('success','Request Approve.');
    }

    // public function customerCancel($info_id)
    // {
    //     $info= CustomerInfo::find($info_id);
    //     if($info->status)
    //     {
    //         $info->update([
    //             'status' => 'cancelled'
    //         ]);
    //     }
    
    //     return redirect()->back()->with('success','Request cancel.');
    // }

}
