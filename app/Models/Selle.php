<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selle extends Model
{
    protected  $fillable = ['part_id','quantity','total','customer_id'];
    public function partID(){
        return $this->belongsTo(part::class,'part_id','id');
    }
    public function customerID(){
        return $this->belongsTo(part::class,'customer_id','id');
    }
}
