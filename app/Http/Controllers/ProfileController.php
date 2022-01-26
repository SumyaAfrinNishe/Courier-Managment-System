<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use App\Models\BranchList;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function statusView()
    {
        $customerinfolist=CustomerInfo::where('user_id',auth()->user()->id)->get();
        // dd($customerinfolist);
        return view('frontend.pages.status-view',compact('customerinfolist'));
    }

    public function infoEdit($id)
    {
      $info=CustomerInfo::find($id);
      $lists=BranchList::all();
    //   dd($info);
    //$customerinfolist=Customer::with('branch')->get();
      return view('frontend.pages.edit-info2',compact('info','lists'));
    }

    public function infoUpdate(Request $request,$id)
    {
        $info=CustomerInfo::find($id);

        $filename=$info->cus_image;
        if($request->hasfile('cus_image'))
        {
            $file=$request->file('cus_image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
  
        }


        if($info)
        {
            $info->update([
                'recepient_name'=>$request->recepient_name,
                'recepient_email'=>$request->recepient_email,
                'recepient_phone'=>$request->recepient_phone,
                'from_branch_name_id'=>$request->branch,
                'to_branch_name_id'=>$request->branch,
                'type_of_shipment'=>$request->type_of_shipment,
                'courier_description'=>$request->courier_description,
                'quantity'=>$request->quantity,
                'weight'=>$request->weight,
                'cus_image'=>$filename,
            ]);
            return redirect()->back()->with('msg', 'Your Information Updated Successfully.');
        }
    }


    public function customerConfirm($info_id)
    {
        $info = CustomerInfo::find($info_id);
        if($info->customer_decision)
        {
            $info->update([
                'customer_decision' => 'Confirmed'
            ]);
        }
        // else
        // {
        //     $info->update([
        //         'customer_decision' => 'Cancelled'
        //     ]);   
        // }
           
        return redirect()->back()->with('success','Request Approve.');
    }

    public function confirmCancel($info_id)
    {
        $info= CustomerInfo::find($info_id);
        if($info->customer_decision)
        {
            $info->update([
                'customer_decision' => 'Cancelled'
            ]);
        }
    
        return redirect()->back()->with('success','Request cancel.');
    }

    public function changePrice($info_id)
    {
       $info=CustomerInfo::find($info_id);
       if($info->customer_decision)
       {
          $info->update([
              'customer_decision'=>'Please decrease the price'
          ]);
       }
       return redirect()->back()->with('success','Request for change the price');
    }

    public function paymentPaid($info_id)
    {
        $info = CustomerInfo::find($info_id);
        if($info->payment)
        {
            $info->update([
                'payment' => 'Paid'
            ]);
        }
        return redirect()->back();
    }

    public function paymentCondition($info_id)
    {
        $info= CustomerInfo::find($info_id);
        if($info->payment)
        {
            $info->update([
                'payment' => 'Condition'
            ]);
        }
    
        return redirect()->back();
    }

}
