<?php

namespace App\Http\Controllers\frontend;
use App\Models\CustomerInfo;
use App\Models\BranchList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\InformationController;

class InformationController extends Controller
{
    public function information()
    {
        $lists=BranchList::all();
        return view('frontend.pages.Courier Information.info2',compact('lists'));
    }

    public function customerinfoCreate(Request $request)
    {
        
        
        $request->validate([
            'recepient_name'=>'required',
            'recepient_email'=>'required',
            'recepient_phone'=>'required|max:11',
            'from_branch_name'=>'required',
            'to_branch_name'=>'required',
            'type_of_shipment'=>'required',
            'courier_description'=>'required',
            'quantity'=>'required',
            'weight'=>'required',
            'delitype'=>'required'
        ]);
        
        $filename='';
        if($request->hasfile('cus_image'))
        {
            $file=$request->file('cus_image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
  
        }

      $customerInfo =  CustomerInfo::create([
            'user_id'=>auth()->user()->id,
            'recepient_name'=>$request->recepient_name,
            'recepient_email'=>$request->recepient_email,
            'recepient_phone'=>$request->recepient_phone,
            'from_branch_name_id'=>$request->from_branch_name,
            'to_branch_name_id'=>$request->to_branch_name,
            'type_of_shipment'=>$request->type_of_shipment,
            'courier_description'=>$request->courier_description,
            'quantity'=>$request->quantity,
            'weight'=>$request->weight,
            'delitype'=>$request->delitype,
            'cus_image'=>$filename,
            'track_number'=>date('Ymdhmis'),
            'price'=>$request->price,
            'pickup_date'=>$request->pickup_date,
            'pickup_time'=>$request->pickup_time,
            

         ]);

        //  if($customerInfo->delitype == 'Prepayment'){
        //     $customerInfo->update([
        //         'payment' => 'Paid'
        //     ]); 
        //  }
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
