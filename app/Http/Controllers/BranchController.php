<?php

namespace App\Http\Controllers;
use App\Models\Courier;
use App\Models\BranchList;
use Illuminate\Http\Request;

class BranchController extends Controller
{
     public function addbranch()
    {
        return view('admin.layout.branch.add-branch');
    }  
    
    public function branchlist()
    {
        $branchlistlist=BranchList::all();
        return view('admin.layout.branch.branch-list',compact('branchlistlist'));
    }


    public function branchlistCreate(Request $request)
    {

        //validate
        $request->validate([

            'name'=>'required',
            'contact'=>'required|min:11|max:11',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required'
        ]);
        // dd($request->all());
        // dd($request->all());

        $filename='';
      if($request->hasfile('image'))
      {
          $file=$request->file('image');
          $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);

      }

    //   dd("ok");

        BranchList::create([
            
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'address'=>$request->address,
            'city'=>$request->city,
            'state'=>$request->state,
            'pincode'=>$request->pincode,
            'country'=>$request->country,
            'image'=>$filename,

         ]);
         return redirect()->back();
 }

 public function branchdetails($branch_id)
 {
     $branch=BranchList::find($branch_id);
    // dd("$branch_id");
    return view('admin.layout.branch.branch-details',compact('branch'));
 }

 public function branchdelete($branch_id)
 {
    //  dd($branch_id);

     $branch=BranchList::find($branch_id)->delete();
     return redirect()->back()->with('Success','Branch Deleted');
 }

 public function branchEdit($id)
 {
   $branch=BranchList::find($id);
     return view('admin.layout.branch.branch-edit',compact('branch'));
   
 }

 public function branchUpdate(Request $request,$id)
 {
     $branch=BranchList::find($id);
     if($branch)
     {
         $branch->update([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'address'=>$request->address,
            'city'=>$request->city,
            'state'=>$request->state,
            'pincode'=>$request->pincode,
            'country'=>$request->country,
            // 'image'=>$filename,
         ]);
         return redirect()->back()->with('msg', 'Branch Updated Successfully.');
     }
 }
    }

