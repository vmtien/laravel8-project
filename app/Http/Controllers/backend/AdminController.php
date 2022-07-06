<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\OrderDetail;
use App\Models\Banner;

class AdminController extends Controller
{
    public function index(){
        $order = Order::all();
        $oddt = OrderDetail::all();
        $product = Product::all();
        $user = User::all();
        $banner = Banner::all();
        // dd($product->count());
        return view ('backend.pages.index',compact('order','oddt','product','user','banner'));
    }
    public function loginAdmin(){
        return view('backend.pages.loginAdmin');
    }
    public function postLoginAdmin(Request $req){
        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('admin');
        }else{
            return redirect()->route('login');
        };
    }
}
