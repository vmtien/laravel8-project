<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('backend.pages.order.index',compact('orders'));
    }
    public function show($id){
        if(Order::find($id) != null){
            $order = Order::find($id);
            $oddt = OrderDetail::all();
            $product_id =[];
            $oddts =[];
            foreach($oddt as $val){
                if($val->order_id == $id){
                    $product_id[] = $val->product_id;
                    $oddts[] = $val;
                };
            };
            $products = [];
            foreach($product_id as $value){
                $product = Product::find($value);
                $products[] =$product;
                $stt = 0;
            };
            // dd($oddts);
            return view('backend.pages.order.show',compact('order','products','stt','oddts'));
        }else{
            return view('errors.404');
        }
    }
    public function updateStt(Request $req, $id){
        if(Order::find($id) != null){
            $order = Order::find($id);
            $order->update([
                'status'=>$req->status,
            ]);
            $url_previous = url()->previous();
            // dd($url_previous);
            if($url_previous == "http://127.0.0.1:8000/admin/order"){
                return redirect()->route('order')->with('success','Thay đổi trạng thái đơn hàng thành công');
            }elseif($url_previous == "http://127.0.0.1:8000/admin"){
                return redirect()->route('admin')->with('success','Thay đổi trạng thái đơn hàng thành công');
            }else{
            return redirect()->route('showOrder',$id)->with('success','Thay đổi trạng thái đơn hàng thành công');
            }
        }else{
            return view('errors.404');
        }
    }
    public function delete($id){
        if(Order::find($id) != null){
            $deleteO = Order::find($id);
            $orderD = OrderDetail::all();
            if($deleteO != null){
                foreach($orderD as $val){
                    if($val->order_id == $deleteO->id){
                        $val->delete();
                    };
                };
                $deleteO->delete();
                return redirect()->route('order')->with('success','Xóa đơn hàng thành công'); 
            }else{
                return redirect()->route('order')->with('error','Xóa đơn hàng không thành công'); 
            }
        }else{
            return view('errors.404');
        }
    }
}
