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
            'country'=>$request->country,
            'image'=>$filename,

         ]);
         return redirect('/admin/branchlist');
 }
 public function dashboard()
 {
     return view('admin.partial.home');
 }
    }

