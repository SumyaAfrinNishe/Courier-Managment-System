<?php

namespace App\Models;
use App\Models\StaffList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffList extends Model
{
    use HasFactory;
    protected $table="stafflists";
    protected $guarded=[];
}
