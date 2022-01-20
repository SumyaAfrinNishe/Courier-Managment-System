<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function statusView()
    {
        $customerinfolist=CustomerInfo::where('user_id',auth()->user()->id)->get();
        return view('frontend.pages.status-view',compact('customerinfolist'));
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
        else
        {
            $info->update([
                'customer_decision' => 'Cancelled'
            ]);   
        }
           
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

}
