<?php

namespace App\Models;
use App\Models\InTransit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InTransit extends Model
{
    use HasFactory;


public function courierrecord()
{
    return $this->belongsTo(CourierRecord::class);
}
}