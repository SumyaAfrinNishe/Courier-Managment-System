<?php

namespace App\Models;
use App\Models\ArrivedDestination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrivedDestination extends Model
{
    use HasFactory;
    protected $table="arriveddestinations";
    protected $guarded=[];
}
