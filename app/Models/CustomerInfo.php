<?php

namespace App\Models;
// use App\Models\CustomerInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;
    protected $table="customerinfos";
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
        //product->category_id,id
    }
}
