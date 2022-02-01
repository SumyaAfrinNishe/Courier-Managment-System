<?php

namespace App\Http\Controllers;
use App\Model\User;
use App\Model\BranchList;
use Illuminate\Http\Request;
use App\Models\CustomerInfo;
use App\Mail\TestMail;
use App\Mail\CancelMail;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{

    public function customerinfo()
    {
        $key=request()->search;
        if($key)
        {
        $customerinfolist=CustomerInfo::where('user->name','LIKE',"%{$key}%")->get();
    //    dd("information");
        return view('admin.layout.customer.cusinfo',compact('customerinfolist'));
        }
        else{
            $customerinfolist=CustomerInfo::with('frombranch')->get();
            //    dd("information");
                return view('admin.layout.customer.cusinfo',compact('customerinfolist'));
        }
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
               'pickup_date'=>$request->pickup_date,
               'pickup_time'=>$request->pickup_time,
         ]);


         return redirect()->back()->with('success', 'Pickup Date and pickup time added Successfully.');
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
        return redirect()->back()->with('success','Request Deleted');
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
        // else
        // {
        //     $info->update([
        //         'status' => 'cancelled'
        //     ]);   
        // }
        Mail::to($info->user->email)->send(new TestMail($info));
        return "Email sent";
        return redirect()->back()->with('success','Request Approve.');
    }

    public function customerCancel($info_id)
    {
        $info= CustomerInfo::find($info_id);
        if($info->status)
        {
            $info->update([
                'status' => 'cancelled'
            ]);
        }
        Mail::to($info->user->email)->send(new CancelMail($info));
        return "Email sent";
        return redirect()->back()->with('success','Request cancel.');
    }


    public function statusAccepted($info_id)
    {
        $info = CustomerInfo::find($info_id);
       
        
            $info->update([
                'delievery' => 'Accepted By Courier'
            ]);
        return redirect()->back();
    }

    public function statusCollect($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Courier Collected'
            ]);
            return redirect()->back();
        // }
    }

    public function statusReadyPickup($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Ready To Pick Up'
            ]);
            return redirect()->back();
        // }
    }

    public function statusShipped($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Shipped'
            ]);
            return redirect()->back();
        // }
    }

    public function statusIntransit($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Intransit'
            ]);
            return redirect()->back();
        // }
    }
    public function statusArrived($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Arrived At Destination'
            ]);
            return redirect()->back();
        // }
    }
    public function statusOutDelievery($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Out For Delivery'
            ]);
            return redirect()->back();
        // }
    }
    public function statusPicked($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Picked'
            ]);
            return redirect()->back();
        // }
    }
    public function statusDeliverd($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Deliverd'
            ]);
            return redirect()->back();
        // }
    }

    public function statusUnsuccessful($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Unsuccessful Delivery Attempt'
            ]);
            return redirect()->back();
    }
    public function statusHandover($info_id)
    {
        $info = CustomerInfo::find($info_id);
        // if($info->delievery)
        // {
            $info->update([
                'delievery' => 'Handover'
            ]);
            return redirect()->back();
    }

    public function addPayment($id)
    {
        return view('admin.layout.customer.add-payment',compact('id'));
    }
    
    public function addPaymentCreate(Request $request,$id)
    {

         CustomerInfo::find($id)->update([
             'payment'=>'Paid',
             'price'=>$request->price,
             'transid'=> time() . '-' . auth()->user()->id,
            ]);

        
         return redirect()->route('admin.customer.info');
 }
    



}
