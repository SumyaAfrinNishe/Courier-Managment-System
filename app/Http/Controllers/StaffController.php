<?php

namespace App\Http\Controllers;
use App\Models\StaffList;
use App\Models\BranchList;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staffadd()
    {
        $branch=BranchList::all();
        
        // dd($staffinfo);
        return view('admin.layout.staff.add-staff',compact('branch'));
    }

    public function stafflist()
    {
        $pagi=BranchList::paginate(3);
        $key=request()->search;
        if($key)
        {
            $stafflistinfo=StaffList::where('staffname','LIKE',"%{$key}%")->get();
            return view('admin.layout.staff.staff-list',compact('stafflistinfo'));
        }
        else{
        $stafflistinfo=StaffList::orderBy('id','desc')->paginate(3);
        return view('admin.layout.staff.staff-list',compact('stafflistinfo','pagi'));
        }
    }

    public function stafflistCreate(Request $request)
    {

        $request->validate([

            'staffname'=>'required',
            'staffcontact'=>'required|min:11|max:11',
            'staffemail'=>'required',
            'staffpassword'=>'required',
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

      User::create([
           'name'=>$request->staffname,
          'email'=>$request->staffemail,
          'password'=>bcrypt($request->staffpassword),
          'phone'=>$request->staffcontact,
          'role'=>"staff",
      ]);

    //   $lastuser=User::orderBy('created_at','desc')->first();
//  dd("ok");
// dd($request->all());
        StaffList::create([
            
            'staffname'=>$request->staffname,
            'staffcontact'=>$request->staffcontact,
            'staffemail'=>$request->staffemail,
            'staffpassword'=>$request->staffpassword,
            'staffbranch_id'=>$request->staffbranch,
            'staffimage'=>$filename,
         ]);
         return redirect()->back()->with('success','Staff added Successfully');

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
     return redirect()->back()->with('success','Staff Deleted');
 }

 public function staffEdit($id)
 {
   $staff=StaffList::find($id);
   $upbranch=BranchList::all();
     return view('admin.layout.staff.staff-edit',compact('staff','upbranch'));
   
 }

 public function staffUpdate(Request $request,$id)
 {
     $staff=StaffList::find($id);
     $filename=$staff->staffimage;
     if($request->hasfile('staffimage'))
     {
         $file=$request->file('staffimage');
         $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
         $file->storeAs('/uploads',$filename);

     }
     if($staff)
     {
         $staff->update([
            'staffname'=>$request->staffname,
            'staffemail'=>$request->staffemail,
            'staffcontact'=>$request->staffcontact,
            'staffbranch_id'=>$request->staffbranch,
            'staffimage'=>$filename,
         ]);
         return redirect()->back()->with('success', 'Staff Updated Successfully.');
     }
 }
 public function staffSearch()
 {
     $key= request()->search;
     $stafflistinfo=StaffList::where('staffbranch','LIKE',"%{$key}%")->get();
     return view('admin.layout.staff.search-staff',compact('stafflistinfo'));
 }
}
