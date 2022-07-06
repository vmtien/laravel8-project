<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = ['name','description','price','sale_price','image','category_id','brand_id','status'];
    public function brand(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }
    public function cate(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function productDetail(){
        return $this->hasOne(ProductDetail::class,'id','product_id');
    }
    public function scopeSearch($query)
    {
        if($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
    public function orderDetail(){
        return $this->belongsTo(OrderDetail::class);
    }
}
