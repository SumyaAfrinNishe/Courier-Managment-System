<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourierRecord;
class StatusController extends Controller
{
    public function acceptCourier()
    {
        $acceptcouriers=CourierRecord::where('status','Accepted by Courier')->get();
        return view('admin.layout.status.Accepted By Courier.accept-courier',compact('acceptcouriers'));
    }
    public function acceptdetails($ac_id)
    {
        $ac=CourierRecord::find($ac_id);
        return view('admin.layout.status.Accepted By Courier.accept-details',compact('ac'));
    }
    public function acceptEdit($id)
 {
     $ac=CourierRecord::find($id);
     return view('admin.layout.status.Accepted By Courier.accept-edit',compact('ac'));
 }
 public function acceptUpdate(Request $request,$id)
 {
     $ac=CourierRecord::find($id);
     if($ac)
     {
         $ac->update([
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('msg', 'Status Updated Successfully.');
    }
}


    public function collected()
    {
        $collects=CourierRecord::where('status','Collected')->get();
        return view('admin.layout.status.Collected.total-collected',compact('collects'));
    }
    public function collectDetails($ac_id)
    {
        $collect=CourierRecord::find($ac_id);
        return view('admin.layout.status.Collected.collected-details',compact('collect'));
    }
    public function collectEdit($id)
    {
        $collect=CourierRecord::find($id);;
        return view('admin.layout.status.Collected.collect-edit',compact('collect'));
    }
    public function collectUpdate(Request $request,$id)
    {
        $collects=CourierRecord::find($id);
     if($collects)
     {
         $collects->update([
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('msg', 'Status Updated Successfully.');
    }

    }

    
     public function arriveddestination()
    {
        $arrives=CourierRecord::where('status','Arrived at Destination')->get();
        return view('admin.layout.status.Arrived.arrived-destination',compact('arrives'));
    } 
    public function arriveDetails($arrd_id)
    {
        $ac=CourierRecord::find($arrd_id);
        return view('admin.layout.status.Arrived.arrived-details',compact('arrives'));
    }

    public function arriveEdit($id)
    {
        $arrives=CourierRecord::find($id);
        return view('admin.layout.status.Arrived.arrived-edit',compact('arrives'));
    } 
    public function arriveUpdate(Request $request,$id)
    {
        $arrives=CourierRecord::find($id);
        if($arrives)
        {
            $arrives->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 



    public function readyPickup()
    {
        $readypickups=CourierRecord::where('status','Ready to Pickup')->get();
        return view('admin.layout.status.Ready Pick Up.ready-pickup',compact('readypickups'));
    }
    public function readypickupDetails($rp_id)
    {
        $readypickups=CourierRecord::find($rp_id);
        return view('admin.layout.status.Ready Pick Up.ready-pickup-details',compact('readypickups'));
    }

    public function readypickupEdit($id)
    {
        $readypickups=CourierRecord::find($id);
        return view('admin.layout.status.Ready Pick Upready-pickup-edit',compact('readypickups'));
    } 
    public function readypickupUpdate(Request $request,$id)
    {
        $rp=CourierRecord::find($id);
        if($rp)
        {
            $rp->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 



    public function totalpickup()
    {
        $pickups=CourierRecord::where('status','Picked Up')->get();
        return view('admin.layout.status.Picked Up.total-pickup',compact('pickups'));
    } 
    
    public function pickupDetails($p_id)
    {
        $pickups=CourierRecord::find($p_id);
        return view('admin.layout.status.Picked Up.pickup-details',compact('pickups'));
    } 
    public function pickupEdit($id)
    {
        $pickups=CourierRecord::find($id);
        return view('admin.layout.status.Picked Up.pickup-edit',compact('pickups'));
    } 
    public function pickupUpdate(Request $request,$id)
    {
        $p=CourierRecord::find($id);
        if($p)
        {
            $p->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 
//Complete



    public function totalshipped()
    {
        $ships=CourierRecord::where('status','Shipped')->get();
        return view('admin.layout.status.Shipped.total-shipped',compact('ships'));
    }
    public function shippedDetails($s_id)
    {
        $ships=CourierRecord::find($s_id);
        return view('admin.layout.status.Shipped.shipped-details',compact('ships'));
    }
    public function shippedEdit($id)
    {
        $ships=CourierRecord::find($id);
        return view('admin.layout.status.Shipped.shipped-edit',compact('ships'));
    }
    public function shippedUpdate(Request $request,$id)
    {
        $s=CourierRecord::find($id);
        if($s)
        {
            $s->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    }
    
    


    public function totaldelieverd()
    {
        $delievers=CourierRecord::where('status','Delievered')->get();
        return view('admin.layout.status.Delieverd.total-delieverd',compact('delievers'));
    } 
    public function delieverDetails($d_id)
    {
        $delievers=CourierRecord::find($d_id);
        return view('admin.layout.status.Delieverd.delieverd-details',compact('delievers'));
    } 
    public function delieverEdit($id)
    {
        $delievers=CourierRecord::find($id);
        return view('admin.layout.status.Delieverd.delieverd-edit',compact('delievers'));
    } 
    public function delieverUpdate(Request $request,$id)
    {
        $d=CourierRecord::find($id);
        if($d)
        {
            $d->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 

   

    public function outdelievery()
    {
        $outdelievers=CourierRecord::where('status','Out for delievery')->get();
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery',compact('outdelievers'));
    } 
    public function outdelieveryDetails($outd_id)
    {
        $outdelievers=CourierRecord::find($outd_id);
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery-details',compact('outdelievers'));
    } 
    public function outdelieveryEdit($id)
    {
        $outdelievers=CourierRecord::find($id);
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery-edit',compact('outdelievers'));
    } 
    public function outdelieveryUpdate(Request $request,$id)
    {
        $outd=CourierRecord::find($id);
        if($outd)
        {
            $outd->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 





    public function intransit()
    {
        $intransits=CourierRecord::where('status','Intransit')->get();
        //dd($intransits);
            return view('admin.layout.status.Intransit.in-transit',compact('intransits'));
    }
    public function intransitDetails($intra_id)
    {
        $intransits=CourierRecord::find($intra_id);
        //dd($intransits);
            return view('admin.layout.status.Intransit.intransit-details',compact('intransits'));
    } 
    public function intransitEdit($id)
    {
        $intransits=CourierRecord::find($id);
        //dd($intransits);
            return view('admin.layout.status.Intransit.intransit-edit',compact('intransits'));
    } 
    public function intransitUpdate(Request $request,$id)
    {
        $intra=CourierRecord::find($id);
        if($intra)
        {
            $intra->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
    } 
    
    




    public function unsuccessful()
    {
        $unsuccesfuls=CourierRecord::where('status','Unsuccessful')->get();
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful',compact('unsuccesfuls'));
    }
    public function unsuccessfulDetails($unsu_id)
    {
        $unsuccesfuls=CourierRecord::find($unsu_id);
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful-details',compact('unsuccesfuls'));
    } 
    public function unsuccessfulEdit($id)
    {
        $unsuccesfuls=CourierRecord::find($id);
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful-edit',compact('unsuccesfuls'));
    } 
    public function unsuccessfulUpdate(Request $request,$id)
    {
        $unsu=CourierRecord::find($id);
        if($unsu)
        {
            $unsu->update([
               'status'=>$request->status,
           ]);
           return redirect()->back()->with('msg', 'Status Updated Successfully.');
       }
}
}