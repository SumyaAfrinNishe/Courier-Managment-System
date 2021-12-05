<?php

namespace App\Models;

use App\Models\CourierRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourierRecord extends Model
{
    use HasFactory;
    protected $table="courierrecords";
    protected $guarded=[];
    
}
