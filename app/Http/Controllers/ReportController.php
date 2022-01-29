<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function paymentreport()
    {
        $paymentreports=[];
        if(request()->has('fromdate'))
        {
            $from_date=request()->fromdate;
            $to_date=request()->todate;
            $payment=request()->payment;
            $paymentreports=CustomerInfo::where('payment',$payment)
            ->whereDate('created_at','>=',$from_date)->whereDate('created_at','>=',$to_date)->get();
        }
        return view('admin.layout.Report.payment-report',compact('paymentreports'));
    }

    public function statusreport()
    {
        $statusreports=[];
        if(request()->has('fromdate'))
        {
            $from_date=request()->fromdate;
            $to_date=request()->todate;
            $delivery=request()->delivery;
            $statusreports=CustomerInfo::where('delievery',$delivery)
            ->whereDate('created_at','>=',$from_date)->whereDate('created_at','>=',$to_date)->get();
        }
        return view('admin.layout.Report.status-report',compact('statusreports'));
    }
}
