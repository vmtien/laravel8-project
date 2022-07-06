<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CartHelper;
use App\Models\Product;
use App\Models\Category;
use App\Models\ImgProduct;
use App\Models\productDetail;

class CartController extends Controller
{
    public function add(CartHelper $cart,$id,Request $req){
        if($req->all() == null){
            $product = Product::find($id);
            $cart->add($product);
        }else{
            $product = Product::find($id);
            $cart->add($product,$req->quantity);
        };
        return redirect()->route('show');
    }
    public function show(CartHelper $cart){
        $cate=Category::all();
        $pro=Product::all();
        $imgProDetail = ImgProduct::all();
        $ProDetail = productDetail::all();
        return view('frontend.pages.showCart',compact('cart','pro','imgProDetail','ProDetail','cate'));
    }
    public function update(Request $req,CartHelper $cart){
        $cart->update($req,$cart);
        return redirect()->back();
    }
    public function delete($id,CartHelper $cart){
        $cart->delete($id);
        return redirect()->back();
    }
}
