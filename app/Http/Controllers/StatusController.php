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
    //  dd($ac);
     return view('admin.layout.status.Accepted By Courier.accept-edit',compact('ac'));
 }
 public function acceptUpdate(Request $request,$id)
 {
     $ac=CourierRecord::find($id);
    //  dd($ac);
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
        // dd($collect);
        return view('admin.layout.status.Collected.collect-edit',compact('collect'));
    }
    public function collectUpdate(Request $request,$id)
    {
        $collect=CourierRecord::find($id);
        // dd($collect);
     if($collect)
     {
         $collect->update([
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('msg', 'Status Updated Successfully.');
    }

    }





    
     public function arriveddestination()
    {
        $arrives=CourierRecord::where('status','Arrived At Destination')->get();
        return view('admin.layout.status.Arrived.arrived-destination',compact('arrives'));
    } 
    public function arriveDetails($arrd_id)
    {
        $arrd=CourierRecord::find($arrd_id);
        return view('admin.layout.status.Arrived.arrived-details',compact('arrd'));
    }

    public function arriveEdit($id)
    {
        $arrd=CourierRecord::find($id);
        return view('admin.layout.status.Arrived.arrived-edit',compact('arrd'));
    } 
    public function arriveUpdate(Request $request,$id)
    {
        $arrd=CourierRecord::find($id);
        if($arrd)
        {
            $arrd->update([
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
        $rp=CourierRecord::find($rp_id);
        return view('admin.layout.status.Ready Pick Up.ready-pickup-details',compact('rp'));
    }

    public function readypickupEdit($id)
    {
        $rp=CourierRecord::find($id);
        return view('admin.layout.status.Ready Pick Upready-pickup-edit',compact('rp'));
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
        $p=CourierRecord::find($p_id);
        return view('admin.layout.status.Picked Up.pickup-details',compact('p'));
    } 
    public function pickupEdit($id)
    {
        $p=CourierRecord::find($id);
        return view('admin.layout.status.Picked Up.pickup-edit',compact('p'));
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








    public function totalshipped()
    {
        $ships=CourierRecord::where('status','Shipped')->get();
        return view('admin.layout.status.Shipped.total-shipped',compact('ships'));
    }
    public function shippedDetails($s_id)
    {
        $s=CourierRecord::find($s_id);
        return view('admin.layout.status.Shipped.shipped-details',compact('s'));
    }
    public function shippedEdit($id)
    {
        $s=CourierRecord::find($id);
        return view('admin.layout.status.Shipped.shipped-edit',compact('s'));
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
        $d=CourierRecord::find($d_id);
        return view('admin.layout.status.Delieverd.delieverd-details',compact('d'));
    } 
    public function delieverEdit($id)
    {
        $d=CourierRecord::find($id);
        return view('admin.layout.status.Delieverd.delieverd-edit',compact('d'));
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
        $outdelievers=CourierRecord::where('status','Out for Delievery')->get();
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery',compact('outdelievers'));
    } 
    public function outdelieveryDetails($outd_id)
    {
        $outd=CourierRecord::find($outd_id);
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery-details',compact('outd'));
    } 
    public function outdelieveryEdit($id)
    {
        $outd=CourierRecord::find($id);
        // dd($outdelievers);
        return view('admin.layout.status.Out Delievery.out-delievery-edit',compact('outd'));
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
        $intra=CourierRecord::find($intra_id);
        //dd($intransits);
            return view('admin.layout.status.Intransit.intransit-details',compact('intra'));
    } 
    public function intransitEdit($id)
    {
        $intra=CourierRecord::find($id);
        //dd($intransits);
            return view('admin.layout.status.Intransit.intransit-edit',compact('intra'));
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
        $unsu=CourierRecord::find($unsu_id);
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful-details',compact('unsu'));
    } 
    public function unsuccessfulEdit($id)
    {
        $unsu=CourierRecord::find($id);
        //dd($intransits);
            return view('admin.layout.status.Unsuccessful.unsuccessful-edit',compact('unsu'));
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