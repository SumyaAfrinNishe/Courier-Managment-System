<?php

namespace App\Http\Controllers;
// use App\Models\Courier;
use App\Models\CourierRecord;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingadd()
    {
        return view('admin.layout.booking.booking-add');
    }
    
     public function courierrecord()
    {
        $courierrecordlist=CourierRecord::all();
        return view('admin.layout.courier-record',compact('courierrecordlist'));
    }

    public function courierrecordCreate(Request $request)
    {

        //validation
        $request->validate([
            'sender_name'=>'required',
            'recepient_name'=>'required',
            'consignment_no'=>'required|numeric',
            'pickup_date'=>'required',
            'pickup_time'=>'required'
            
        ]);
    //   dd($request->all());
    // dd(date('Ymdhms'));
    $filename='';
      if($request->hasfile('image'))
      {
          $file=$request->file('image');
          $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);

      }
        // dd("ok");
        //  dd($request->all());
            CourierRecord::create([
            
               'sender_name'=>$request->sender_name,
               'recepient_name'=>$request->recepient_name,
               'consignment_no'=>$request->consignment_no,
               'pickup_date'=>$request->pickup_date,
               'pickup_time'=>$request->pickup_time,
               'image'=>$filename,



            ]);
            return redirect('/admin/courierrecord');
    }
    public function dashboard()
    {
        return view('admin.partial.home');
    }

}
