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
        $request->validate([

            'sender_name'=>'required',
            'sender_email'=>'required',
            'sender_contact'=>'required|min:11|max:11',
            'recepient_name'=>'required',
            'recepient_email'=>'required',
            'recepient_phone'=>'required|min:11|max:11',
            'branch_name'=>'required',
            'type_of_shipment'=>'required',
            'courier_description'=>'required',
            'quantity'=>'required',
            'weight'=>'required'
        ]);
        
        $filename='';
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
  
        }

        // dd($request->all());
        CustomerInfo::create([
            
            'sender_name'=>$request->sender_name,
            'sender_email'=>$request->sender_email,
            'sender_contact'=>$request->sender_contact,
            'recepient_name'=>$request->recepient_name,
            'recepient_email'=>$request->recepient_email,
            'recepient_phone'=>$request->recepient_phone,
            'branch_name'=>$request->branch_name,
            'type_of_shipment'=>$request->type_of_shipment,
            'courier_description'=>$request->courier_description,
            'quantity'=>$request->quantity,
            'weight'=>$request->weight,
            'image'=>$filename,
            'track_number'=>date('Ymdhmis'),
            'price'=>$request->price,
            'pickup_date'=>$request->pickup_date,
            'pickup_time'=>$request->pickup_time,
            

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
