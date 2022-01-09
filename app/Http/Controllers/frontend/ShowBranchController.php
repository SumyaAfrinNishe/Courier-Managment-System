<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BranchList;
use Illuminate\Http\Request;

class ShowBranchController extends Controller
{
    public function showbranch()
    {
        $branchlists=BranchList::all();
        return view('frontend.pages.show-branch',compact('branchlists'));
    }

}
