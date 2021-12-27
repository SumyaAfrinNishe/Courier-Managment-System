<?php

namespace App\Http\Controllers;
use App\Models\StaffList;
use App\Models\CourierRecord;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staffadd()
    {
        return view('admin.layout.staff.add-staff');
    }

    public function stafflist()
    {
        $stafflistinfo=StaffList::all();
        return view('admin.layout.staff.staff-list',compact('stafflistinfo'));
    }

    public function stafflistCreate(Request $request)
    {
        StaffList::create([
            
            'staffname'=>$request->staffname,
            'staffemail'=>$request->staffemail,
            'staffcontact'=>$request->staffcontact,
            'staffbranch'=>$request->staffbranch,
         ]);
         return redirect()->back();

    }

    public function staffdetails($staff_id)
 {
     $staff=StaffList::find($staff_id);
    // dd("$branch_id");
    return view('admin.layout.staff-details',compact('staff'));
 }

 public function staffdelete($staff_id)
 {
    //  dd($branch_id);

     $staff=StaffList::find($staff_id)->delete();
     return redirect()->back()->with('Success','Staff Deleted');
 }
}
