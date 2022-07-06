<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    public $fillable = ['product_id','CPU','RAM','screen','graphics','HardDrive','OperatingSystem','weight','size','origin','DebutYear'];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
