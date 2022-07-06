<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\productDetail;
use App\Models\Order;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\OrderDetail;
use App\Models\ImgProduct;
use App\Helper\CartHelper;
use App\Http\Requests\User\UserAddRequest;
use App\Http\Requests\Frontend\CheckOutRequest;
use Hash;
use Auth;
class FrontendController extends Controller
{
    public function index(){
        if(Auth::check()){
            if(Auth::user()->role == 1){
                Auth::logout();
            };
        }
        $banner = Banner::orderBy('prioty','ASC')->get();
        $pro=Product::all();
        $proNew1 = Product::orderBy('created_at','DESC')->paginate(3)->items();
        $proNew2 = Product::orderBy('created_at','DESC')->paginate(6)->items();
        for( $i=0 ; $i<3 ;$i++){
             array_shift($proNew2);
        };
        $bestPro = Product::orderBy('price','DESC')->paginate(5)->items();
        $brand = Brand::all();
        $category = Category::all();
        $wid = 1/count($category)*100;
        $imgProDetail = ImgProduct::all();
        $ProDetail = productDetail::all();
        // dd($proCate);
        $idMinCate = Category::min('id');
        $time = date_create("now");
        return view('frontend.pages.index',compact('pro','imgProDetail','ProDetail','banner','proNew1','proNew2','bestPro','brand','category','wid','idMinCate','time'));
    }
    public function register(){
        return view('frontend.pages.register');
    }
    public function postRegister(UserAddRequest $req){
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'password'=>Hash::make($req->password),
        ]);
        return redirect()->route('login')->with('success', 'Đăng ký thành công');
    }
    public function login(){
        $url_previous = url()->previous();
        return view('frontend.pages.login',compact('url_previous'));
    }
    public function postLogin(Request $req){
        
        if(Auth::attempt($req->only('email','password'))){
            if(Auth::user()->role == 0){
                if($req->action == "http://127.0.0.1:8000/thanh-toan"){
                    return redirect()->route('checkout');
                }else{
                    return redirect()->route('home');
                }
            }elseif(Auth::user()->role == 2){
                Auth::logout();
                return redirect()->route('login')->with('error', 'Tài khoản của quý khách bị khóa');
            }else{
                Auth::logout();
                return redirect()->route('login')->with('error', 'Lỗi tài khoản hoặc mật khẩu');
            }

        }else{
            return redirect()->route('login')->with('error', 'Lỗi tài khoản hoặc mật khẩu');
        };
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
    public function product(){
        if(Auth::check()){
            if(Auth::user()->role == 1){
                Auth::logout();
            };
        }
        $pro=Product::orderBy('created_at','DESC')->search()->paginate(12);
        $imgProDetail = ImgProduct::all();
        $ProDetail = ProductDetail::all();
        $totalPro = $pro->count();
        $time = date_create("now");
        // dd($pro);
        return view('frontend.pages.product',compact('pro','imgProDetail','ProDetail','totalPro','time'));
    }
    public function productDetail($id){
        if(Auth::check()){
            if(Auth::user()->role == 1){
                Auth::logout();
            };
        }
        $pro = Product::find($id);
        $des = strip_tags($pro->description);
        $imgDetail = ImgProduct::where('product_id',$id)->get();
        $proDetail = ProductDetail::where('product_id',$id)->get();
        // dd($proDetail);
        return view('frontend.pages.product-detail',compact('proDetail','imgDetail','pro','des'));
    }
    public function checkout(){
        if(Auth::check()){
            if(Auth::user()->role == 1){
                Auth::logout();
            };
        }
        return view('frontend.pages.checkout');
    }
    public function postCheckout(CheckOutRequest $req,CartHelper $cart){
        // dd($req->has('check1'));
        if($req->has('check1')){
            $order = Order::create([
                'user_id'=>Auth::user()->id,
                'total_amount'=>$cart->total_price,
                'name'=>$req->nameCheck,
                'email'=>$req->email,
                'phone'=>$req->phoneCheck,
                'address'=>$req->addressCheck,
                'note'=>$req->noteCheck,
            ]);
            foreach($cart->items as $value){
                OrderDetail::create([
                    'order_id'=>$order->id,
                    'product_id'=>$value['id'],
                    'quantity'=>$value['quantity'],
                    'price'=>$value['price']
                ]);
            }
            $cart->clear();
            return view('frontend.pages.thank');
        }else{
            $order = Order::create([
                'user_id'=>Auth::user()->id,
                'total_amount'=>$cart->total_price,
                'name'=>$req->name,
                'email'=>$req->email,
                'phone'=>$req->phone,
                'address'=>$req->address,
                'note'=>$req->note,
            ]);
            foreach($cart->items as $value){
                OrderDetail::create([
                    'order_id'=>$order->id,
                    'product_id'=>$value['id'],
                    'quantity'=>$value['quantity'],
                    'price'=>$value['price']
                ]);
            }
            $cart->clear();
            return view('frontend.pages.thank');
        }
    }
    public function proCate($id){
        if(Auth::check()){
            if(Auth::user()->role == 1){
                Auth::logout();
            };
        }
        $pro = Product::where('category_id',$id)->paginate(12);
        $imgProDetail = ImgProduct::all();
        $ProDetail = ProductDetail::all();
        $totalPro = $pro->count();
        $time = date_create("now");
        return view('frontend.pages.category',compact('pro','imgProDetail','ProDetail','totalPro','id','time'));
    }
    public function proBra($id){
        if(Auth::check()){
            if(Auth::user()->role == 1){
                Auth::logout();
            };
        }
        $pro = Product::where('brand_id',$id)->paginate(12);
        $imgProDetail = ImgProduct::all();
        $ProDetail = ProductDetail::all();
        $totalPro = $pro->count();
        $time = date_create("now");
        return view('frontend.pages.brand',compact('pro','imgProDetail','ProDetail','totalPro','id','time'));
    }
    public function ajaxSearch(){
        $data = Product::search()->get();
        return view('frontend.pages.ajaxSearch',compact('data'));
    }
    
}
