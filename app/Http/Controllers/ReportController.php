<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function paymentreport()
    {
        // dd(request()->all());
        $paymentreports=[];
            $from_date=request()->fromdate;
            $to_date=request()->todate;
            $payment=request()->payment;
            $paymentreports=CustomerInfo::where('payment',$payment)
            ->whereBetween('created_at',[$from_date,$to_date])->get();
            // dd($paymentreports);
            return view('admin.layout.Report.payment-report',compact('paymentreports'));

    }

    public function statusreport()
    {
        $statusreports=[];
        // if(request()->has('fromdate'))
        
            $from_date=request()->fromdate;
            $to_date=request()->todate;
            $delievery=request()->delievery;
            $statusreports=CustomerInfo::where('delievery',$delievery)
            ->whereBetween('created_at',[$from_date,$to_date])->get();
            return view('admin.layout.Report.status-report',compact('statusreports'));
          
        }
        
    }

