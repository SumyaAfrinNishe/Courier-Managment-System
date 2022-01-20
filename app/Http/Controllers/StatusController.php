<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerInfo;
class StatusController extends Controller
{
    public function acceptCourier()
    {
        $acceptcouriers=CustomerInfo::where('delievery','Accepted By Courier')->get();
        return view('admin.layout.status.Accepted By Courier.accept-courier',compact('acceptcouriers'));
    }
    public function acceptdetails($ac_id)
    {
        $ac=CustomerInfo::find($ac_id);
        return view('admin.layout.status.Accepted By Courier.accept-details',compact('ac'));
    }
    public function acceptEdit($id)
 {
     $ac=CustomerInfo::find($id);
    //  dd($ac);
     return view('admin.layout.status.Accepted By Courier.accept-edit',compact('ac'));
 }
 public function acceptUpdate(Request $request,$id)
 {
     $ac=CustomerInfo::find($id);
    //  dd($ac);
     if($ac)
     {
         $ac->update([
            'delievery'=>$request->delievery,
        ]);
        return redirect()->back()->with('msg', 'Status Updated Successfully.');
    }
}







    public function collected()
    {
        $collects=CustomerInfo::where('delievery','Courier Collected')->get();
        return view('admin.layout.status.Collected.total-collected',compact('collects'));
    }
    public function collectDetails($ac_id)
    {
        $collect=CustomerInfo::find($ac_id);
        return view('admin.layout.status.Collected.collected-details',compact('collect'));
    }
    public function collectEdit($id)
    {
        $collect=CustomerInfo::find($id);;
        // dd($collect);
        return view('admin.layout.status.Collected.collect-edit',compact('collect'));
    }
    public function collectUpdate(Request $request,$id)
    {
        $collect=CustomerInfo::find($id);
        // dd($collect);
     if($collect)
     {
         $collect->update([
            'delievery'=>$request->delievery,
        ]);
        return redirect()->back()->with('msg', 'Status Updated Successfully.');
    }

    }





    
     public function arriveddestination()
    {
        $arrives=CustomerInfo::where('delievery','Arrived At Destination')->get();
        return view('admin.layout.status.Arrived.arrived-destination',compact('arrives'));
    } 
    public function arriveDetails($arrd_id)
    {
        $arrd=CustomerInfo::find($arrd_id);
        return view('admin.layout.status.Arrived.arrived-details',compact('arrd'));
    }

    public function arriveEdit($id)
    {
        $arrd=CustomerInfo::find($id);
        return view('admin.layout.status.Arrived.arrived-edit',compact('arrd'));
    } 
    public function arriveUpdate(Request $request,$id)
    {
        $arrd=CustomerInfo::find($id);
        if($arrd)
        {
            $arrd->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 








    public function readyPickup()
    {
        $readypickups=CustomerInfo::where('delievery','Ready to Pickup')->get();
        return view('admin.layout.status.Ready Pick Up.ready-pickup',compact('readypickups'));
    }
    public function readypickupDetails($rp_id)
    {
        $rp=CustomerInfo::find($rp_id);
        return view('admin.layout.status.Ready Pick Up.ready-pickup-details',compact('rp'));
    }

    public function readypickupEdit($id)
    {
        $rp=CustomerInfo::find($id);
        return view('admin.layout.status.Ready Pick Upready-pickup-edit',compact('rp'));
    } 
    public function readypickupUpdate(Request $request,$id)
    {
        $rp=CustomerInfo::find($id);
        if($rp)
        {
            $rp->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 








    public function totalpickup()
    {
        $pickups=CustomerInfo::where('delievery','Picked')->get();
        return view('admin.layout.status.Picked Up.total-pickup',compact('pickups'));
    } 
    
    public function pickupDetails($p_id)
    {
        $p=CustomerInfo::find($p_id);
        return view('admin.layout.status.Picked Up.pickup-details',compact('p'));
    } 
    public function pickupEdit($id)
    {
        $p=CustomerInfo::find($id);
        return view('admin.layout.status.Picked Up.pickup-edit',compact('p'));
    } 
    public function pickupUpdate(Request $request,$id)
    {
        $p=CustomerInfo::find($id);
        if($p)
        {
            $p->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 








    public function totalshipped()
    {
        $ships=CustomerInfo::where('delievery','Shipped')->get();
        return view('admin.layout.status.Shipped.total-shipped',compact('ships'));
    }
    public function shippedDetails($s_id)
    {
        $s=CustomerInfo::find($s_id);
        return view('admin.layout.status.Shipped.shipped-details',compact('s'));
    }
    public function shippedEdit($id)
    {
        $s=CustomerInfo::find($id);
        return view('admin.layout.status.Shipped.shipped-edit',compact('s'));
    }
    public function shippedUpdate(Request $request,$id)
    {
        $s=CustomerInfo::find($id);
        if($s)
        {
            $s->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    }
    
    






    public function totaldelieverd()
    {
        $delievers=CustomerInfo::where('delievery','Deliverd')->get();
        return view('admin.layout.status.Delieverd.total-delieverd',compact('delievers'));
    } 
    public function delieverDetails($d_id)
    {
        $d=CustomerInfo::find($d_id);
        return view('admin.layout.status.Delieverd.delieverd-details',compact('d'));
    } 
    public function delieverEdit($id)
    {
        $d=CustomerInfo::find($id);
        return view('admin.layout.status.Delieverd.delieverd-edit',compact('d'));
    } 
    public function delieverUpdate(Request $request,$id)
    {
        $d=CustomerInfo::find($id);
        if($d)
        {
            $d->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 

   





    public function outdelievery()
    {
        $outdelievers=CustomerInfo::where('delievery','Out For Delivery')->get();
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery',compact('outdelievers'));
    } 
    public function outdelieveryDetails($outd_id)
    {
        $outd=CustomerInfo::find($outd_id);
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery-details',compact('outd'));
    } 
    public function outdelieveryEdit($id)
    {
        $outd=CustomerInfo::find($id);
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery-edit',compact('outd'));
    } 
    public function outdelieveryUpdate(Request $request,$id)
    {
        $outd=CustomerInfo::find($id);
        if($outd)
        {
            $outd->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 







    public function intransit()
    {
        $intransits=CustomerInfo::where('delievery','Intransit')->get();
        //dd($intransits);
            return view('admin.layout.status.Intransit.in-transit',compact('intransits'));
    }
    public function intransitDetails($intra_id)
    {
        $intra=CustomerInfo::find($intra_id);
        //dd($intransits);
            return view('admin.layout.status.Intransit.intransit-details',compact('intra'));
    } 
    public function intransitEdit($id)
    {
        $intra=CustomerInfo::find($id);
        //dd($intransits);
            return view('admin.layout.status.Intransit.intransit-edit',compact('intra'));
    } 
    public function intransitUpdate(Request $request,$id)
    {
        $intra=CustomerInfo::find($id);
        if($intra)
        {
            $intra->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }

    } 







    public function unsuccessful()
    {
        $unsuccesfuls=CustomerInfo::where('delievery','Unsuccessful Delivery Attempt')->get();
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful',compact('unsuccesfuls'));
    }
    public function unsuccessfulDetails($unsu_id)
    {
        $unsu=CustomerInfo::find($unsu_id);
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful-details',compact('unsu'));
    } 
    public function unsuccessfulEdit($id)
    {
        $unsu=CustomerInfo::find($id);
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful-edit',compact('unsu'));
    } 
    public function unsuccessfulUpdate(Request $request,$id)
    {
        $unsu=CustomerInfo::find($id);
        if($unsu)
        {
            $unsu->update([
               'delievery'=>$request->delievery,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
}
}