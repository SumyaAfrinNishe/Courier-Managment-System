<?php

namespace App\Models;
use App\Models\BranchList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchList extends Model
{
    use HasFactory;
    protected $table="branchlists";
    protected $guarded=[];
   
}
