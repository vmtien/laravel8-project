<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $fillable =['user_id','name','address','phone','email','note','total_amount','status'];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function orderDetail(){
        return $this->hasOne(orderDetail::class);
    }
}
