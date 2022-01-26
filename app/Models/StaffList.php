<?php

namespace App\Models;
Use App\Models\BranchList;
use App\Models\StaffList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StaffList extends Model
{
    use HasFactory;
    protected $table="stafflists";
    protected $guarded=[];

    public function sbranch()
    {
        return $this->belongsTo(BranchList::class,'staffbranch_id','id');
    }
}
