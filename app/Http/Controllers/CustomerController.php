<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerInfo;
use App\Models\CourierRecord;

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
//     $info=CourierRecord::find($id);
//     // dd($info);
//      return view('admin.layout.customer.cusinfo-edit',compact('info'));
//  }

//  public function customerUpdate(Request $request,$id)
//  {
//      $info=CourierRecord::find($id);
//      if($info)
//      {
//          $info->update([
//                'sender_name'=>$request->yourname,
//                'sender_contact'=>$request->yourcontact,
//                'sender_address'=>$request->youraddress,
//                'recepient_name'=>$request->receivername,
//                'recepient_phone'=>$request->receivercontact,
//                'recepient_address'=>$request->receiveraddress,
//                'name'=>$request->branchname,
//                'address'=>$request->address,
//                'consignment_no'=>$request->consignment_no,
//                'type_of_shipment'=>$request->type,
//                'courier_description'=>$request->courier_description,
//                'quantity'=>$request->quantity,
//                'weight'=>$request->weight,
//                'price'=>$request->price,
//                'pickup_date'=>$request->pickup_date,
//                'pickup_time'=>$request->pickup_time,
//                'status'=>$request->status,
//             // 'image'=>$filename,
//          ]);
//          return redirect()->back()->with('msg', 'Booking Updated Successfully.');
//      }
//  }
 
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
