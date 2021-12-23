<?php

namespace App\Http\Controllers;
use App\Models\StaffList;
use App\Models\CourierRecord;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staffadd()
    {
        return view('admin.staff.add');
    }
}
