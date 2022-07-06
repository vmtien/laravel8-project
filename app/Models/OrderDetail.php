<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public $fillable = ['order_id','product_id','quantity','price'];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
