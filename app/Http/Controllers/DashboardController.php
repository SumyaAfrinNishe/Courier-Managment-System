<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use App\Models\BranchList;
use App\Models\StaffList;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $count['request']=CustomerInfo::all()->count();
        $count['totalbranch']=BranchList::all()->count();
        $count['totalstaff']=StaffList::all()->count();
        $count['cancelrequest']=CustomerInfo::where('status','cancelled')->count();
        // dd($count['cancelrequest']);
        $count['paid']=CustomerInfo::where('payment','Paid')->count();
        $count['pending']=CustomerInfo::where('payment','Pending')->count();
        $count['handover']=CustomerInfo::where('delievery','Handover')->count();
        $count['accepted']=CustomerInfo::where('delievery','Accepted By Courier')->count();
        $count['ccollected']=CustomerInfo::where('delievery','Courier Collected')->count();
        $count['rtpu']=CustomerInfo::where('delievery','Ready To Pick Up')->count();
        $count['picked']=CustomerInfo::where('delievery','Picked')->count();
        $count['ship']=CustomerInfo::where('delievery','Shipped')->count();
        $count['intran']=CustomerInfo::where('delievery','Intransit')->count();
        $count['aad']=CustomerInfo::where('delievery','Arrived At Destination')->count();
        $count['ofd']=CustomerInfo::where('delievery','Out For Delivery')->count();
        $count['delivrd']=CustomerInfo::where('delievery','Deliverd')->count();
        $count['ud']=CustomerInfo::where('delievery','Unsuccessful Delivery Attempt')->count();

        return view('admin.partial.home',compact('count'));
        //
        
        // // dd($request);
        // $totalbranch=BranchList::all()->count();
        // // dd($totalbranch);
        // $totalstaff=StaffList::all()->count();
        // // dd($totalstaff);
        // return view('admin.partial.home',compact('request','totalbranch','totalstaff'));
    }
}
