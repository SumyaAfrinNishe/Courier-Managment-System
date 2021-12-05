<?php

namespace App\Models;
use App\Models\TotalCourier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalCourier extends Model
{
    use HasFactory;
    protected $table="totalcouriers";
    protected $guarded=[];
}
