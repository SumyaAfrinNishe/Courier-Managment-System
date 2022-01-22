<?php

namespace App\Models;
Use App\Models\BranchList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffList extends Model
{
    use HasFactory;
    protected $table="stafflists";
    protected $guarded=[];

    public function sbranch()
    {
        return this->belongsTo(BranchList::class,'staffbranch_id','id');
    }
}
