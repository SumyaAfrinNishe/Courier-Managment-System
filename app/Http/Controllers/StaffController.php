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

        $request->validate([

            'staffname'=>'required',
            'staffemail'=>'required',
            'staffcontact'=>'required|min:11|max:11',
            'staffbranch'=>'required',
            'staffimage'=>'required',

        ]);

        $filename='';
      if($request->hasfile('staffimage'))
      {
          $file=$request->file('staffimage');
          $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);

      }
//  dd("ok");

        StaffList::create([
            
            'staffname'=>$request->staffname,
            'staffemail'=>$request->staffemail,
            'staffcontact'=>$request->staffcontact,
            'staffbranch'=>$request->staffbranch,
            'staffimage'=>$filename,
         ]);
         return redirect()->back();

    }

    public function staffdetails($staff_id)
 {
     $staff=StaffList::find($staff_id);
    // dd("$branch_id");
    return view('admin.layout.staff.staff-details',compact('staff'));
 }

 public function staffdelete($staff_id)
 {
    //  dd($branch_id);

     $staff=StaffList::find($staff_id)->delete();
     return redirect()->back()->with('Success','Staff Deleted');
 }

 public function staffEdit($id)
 {
   $staff=StaffList::find($id);
     return view('admin.layout.staff.staff-edit',compact('staff'));
   
 }

 public function staffUpdate(Request $request,$id)
 {
     $staff=StaffList::find($id);
     if($staff)
     {
         $staff->update([
            'staffname'=>$request->staffname,
            'staffemail'=>$request->staffemail,
            'staffcontact'=>$request->staffcontact,
            'staffbranch'=>$request->staffbranch,
            // 'image'=>$filename,
         ]);
         return redirect()->back()->with('msg', 'Staff Updated Successfully.');
     }
 }
 public function staffSearch()
 {
     $key= request()->search;
     $stafflistinfo=StaffList::where('staffbranch','LIKE',"%{$key}%")->get();
     return view('admin.layout.staff.search-staff',compact('stafflistinfo'));
 }
}
