<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selle extends Model
{
    protected  $fillable = ['part_id','quantity','total','customer_id'];
    public function part(){
        return $this->belongsTo(part::class,'part_id','id');
    }
    public function customer(){
        return $this->belongsTo(customer::class,'customer_id','id');
    }
}
