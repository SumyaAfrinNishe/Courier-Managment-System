<?php

namespace App\Http\Controllers;
use App\Models\Courier;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;
use App\Models\CourierRecord;

class BookingController extends Controller
{
    public function customerinfo()
    {
        $customerinfolist=CustomerInfo::all();
      //  dd($customerinfolist);
        return view('admin.layout.booking.cusinfo',compact('customerinfolist'));
    }

    
    public function bookingadd()
    {
        return view('admin.layout.booking.booking-add');
    }
    
     public function courierrecord()
    {
        $courierrecordlist=CourierRecord::all();
        return view('admin.layout.booking.courier-record',compact('courierrecordlist'));
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
               'sender_contact'=>$request->sender_contact,
               'sender_address'=>$request->sender_address,
               'recepient_name'=>$request->recepient_name,
               'recepient_phone'=>$request->recepient_phone,
               'recepient_address'=>$request->recepient_address,
               'name'=>$request->name,
               'address'=>$request->address,
               'consignment_no'=>$request->consignment_no,
               'type_of_shipment'=>$request->type_of_shipment,
               'courier_description'=>$request->courier_description,
               'quantity'=>$request->quantity,
               'weight'=>$request->weight,
               'price'=>$request->price,
               'pickup_date'=>$request->pickup_date,
               'pickup_time'=>$request->pickup_time,
               'status'=>$request->status,
               'image'=>$filename,
            ]);
    
            return redirect()->back()->with('Success','Booking Created');
    }

    public function bookingdetails($book_id)
 {
     $book=CourierRecord::find($book_id);
     return view('admin.layout.booking.booking-details',compact('book'));
 }

 public function bookingdelete($book_id)
 {
    //  dd($branch_id);

     $book=CourierRecord::find($book_id)->delete();
     return redirect()->back()->with('Success','Booking Deleted');
 }
   
 public function bookingEdit($id)
 {
    $book=CourierRecord::find($id);
     return view('admin.layout.booking.booking-edit',compact('book'));
 }

 public function bookingUpdate(Request $request,$id)
 {
     $book=CourierRecord::find($id);
     if($book)
     {
         $book->update([
               'sender_name'=>$request->sender_name,
               'sender_contact'=>$request->sender_contact,
               'sender_address'=>$request->sender_address,
               'recepient_name'=>$request->recepient_name,
               'recepient_phone'=>$request->recepient_phone,
               'recepient_address'=>$request->recepient_address,
               'name'=>$request->name,
               'address'=>$request->address,
               'consignment_no'=>$request->consignment_no,
               'type_of_shipment'=>$request->type_of_shipment,
               'courier_description'=>$request->courier_description,
               'quantity'=>$request->quantity,
               'weight'=>$request->weight,
               'price'=>$request->price,
               'pickup_date'=>$request->pickup_date,
               'pickup_time'=>$request->pickup_time,
               'status'=>$request->status,
            // 'image'=>$filename,
         ]);
         return redirect()->back()->with('msg', 'Booking Updated Successfully.');
     }
 }

}
