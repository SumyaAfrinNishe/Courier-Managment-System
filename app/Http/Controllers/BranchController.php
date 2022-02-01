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
        $pagi=BranchList::paginate(5);
        $key=request()->search;
        if($key)
        {
            $branchlistlist=BranchList::where('name','LIKE',"%{$key}%")->paginate(10);
            return view('admin.layout.branch.branch-list',compact('branchlistlist','pagi'));
        }
        else{
        $branchlistlist=BranchList::orderBy('id','desc')->paginate(5);
        return view('admin.layout.branch.branch-list',compact('branchlistlist','pagi'));
        }
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
         return redirect()->back()->with('success', 'New Branch added');
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
     return redirect()->back()->with('success','Branch Deleted');
 }

 public function branchEdit($id)
 {
   $branch=BranchList::find($id);
     return view('admin.layout.branch.branch-edit',compact('branch'));
   
 }

 public function branchUpdate(Request $request,$id)
 {
     $branch=BranchList::find($id);
     $filename=$branch->image;
      if($request->hasfile('image'))
      {
          $file=$request->file('image');
          $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);

      }
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
         return redirect()->back()->with('success', 'Branch Updated Successfully.');
     }
 }

 public function branchSearch()
 {
     $key= request()->search;
     $branchlistlist=BranchList::where('name','LIKE',"%{$key}%")->get();
     return view('admin.layout.branch.search-branch',compact('branchlistlist'));
 }
    }

