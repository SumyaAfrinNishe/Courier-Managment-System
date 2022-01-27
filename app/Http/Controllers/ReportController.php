<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $reports=[];
        if(request()->has('fromdate'))
        {
            $from_date=request()->fromdate;
            $to_date=request()->todate;
            $payment=request()->payment;
            $reports=CustomerInfo::where('payment',$payment)
            ->whereDate('created_at','>=',$from_date)->whereDate('created_at','>=',$to_date)->get();
        }
        return view('admin.layout.Report.report',compact('reports'));
    }
}
