<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Category;
use App\Models\Brand;
use App\Models\OrderDetail;
use App\Models\ImgProduct;
use Illuminate\Http\Request;
use App\Http\Requests\Product\AddProductRequest;
use App\Http\Requests\Product\EditProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = Product::all();
        $cate = Category::all();
        $bra = Brand::all();
        return view('backend.pages.product.index',compact('pro','cate','bra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
        $brand = Brand::all();
        return view('backend.pages.product.add',compact('cate','brand'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductRequest $request)
    {   
        // dd($request->all());
        if($request->has('file')){
            $file_name =$request->file->getClientOriginalName();
            $file_name = time().$file_name;
            $request->file->move(public_path('uploads\images'),$file_name);
        }
        $request->merge(['image'=>$file_name]);
        $product = Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
            'image'=>$file_name,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id
        ]);
        if($request->uploads != null) {
            foreach($request->uploads as $upload) {
                $file_name =$upload->getClientOriginalName();
                $file_name = time().$file_name;
                $upload->move(public_path('uploads\Imgproduct'),$file_name);
                ImgProduct::create([
                    "image"=>$file_name,
                    "product_id" =>$product->id
                ]);
            }
        }
        $product_detail = ProductDetail::create([
            'product_id'=>$product->id,
            'CPU'=>$request->CPU,
            'RAM'=>$request->RAM,
            'screen'=>$request->screen,
            'graphics'=>$request->graphics,
            'HardDrive'=>$request->HardDrive,
            'OperatingSystem'=>$request->OperatingSystem,
            'weight'=>$request->weight,
            'size'=>$request->size,
            'origin'=>$request->origin,
            'DebutYear'=>$request->DebutYear
        ]);
        
        return redirect()->route('product.index')->with('success','Thêm mới thành công');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if(Product::find($id) != null){
            $pro = Product::find($id);
            $cate = Category::all();
            $bra = Brand::all();
            $cateEdit = Category::find($pro->category_id);
            $braEdit = Brand::find($pro->brand_id);
            $ImgPro = ImgProduct::all();
            $imgEdit = "0";
            $imgList =[];
            foreach($ImgPro as $val){
                if($val->product_id == $pro->id){
                    $imgEdit = $imgEdit +1;
                    $imgList[] = $val;
                }
            };
            // dd($imgList);
            $proDetail = ProductDetail::all();
            $idDetailEdit = "";
            foreach($proDetail as $val){
                if($val->product_id == $pro->id){
                    $idDetailEdit = $val->id;
                }
            };
            $detailEdit = ProductDetail::find($idDetailEdit);
            return view('backend.pages.product.edit',compact('pro','cate','bra','cateEdit','braEdit','ImgPro','proDetail','detailEdit','imgEdit','imgList'));
        }else{
            return view('errors.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(EditProductRequest $request,$id)
    {  
        // dd($request->all());
        if(Product::find($id) != null){
            $cate = Category::all();
            $brand = Brand::all();
            $ImgPro = ImgProduct::all();
            $pro = Product::find($id);
            $proDetail = ProductDetail::all();
            if($request->file != null){
                unlink("uploads/images/".$pro->image);
                $file_name =$request->file->getClientOriginalName();
                $file_name = time().$file_name;
                $request->file->move(public_path('uploads\images'),$file_name);
                $request->merge(['image'=>$file_name]);
                $pro->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'sale_price'=>$request->sale_price,
                    'image'=>$file_name,
                    'category_id'=>$request->category_id,
                    'brand_id'=>$request->brand_id
                ]);
            }else{
                $pro->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'sale_price'=>$request->sale_price,
                    'category_id'=>$request->category_id,
                    'brand_id'=>$request->brand_id
                ]);
            };
            if($request->uploads != null){
                foreach($ImgPro as $value){
                    if($value->product_id == $pro->id){
                        unlink("uploads/Imgproduct/".$value->image);
                        $delete = ImgProduct::find($value->id);
                        $delete->delete();
                    };
                };
                foreach($request->uploads as $upload){
                    $file_name =$upload->getClientOriginalName();
                    $file_name =time().$file_name;
                    $upload->move(public_path('uploads\Imgproduct'),$file_name);
                    ImgProduct::create([
                        "image"=>$file_name,
                        "product_id" =>$pro->id
                    ]);
                };
            }else{
                foreach($ImgPro as $value){
                    if($value->product_id == $pro->id){
                        unlink("uploads/Imgproduct/".$value->image);
                        $delete = ImgProduct::find($value->id);
                        $delete->delete();
                    };
                };
            };
            foreach($proDetail as $val){
                if($val->product_id == $pro->id){
                    $val->update([
                        'CPU'=>$request->CPU,
                        'RAM'=>$request->RAM,
                        'screen'=>$request->screen,
                        'graphics'=>$request->graphics,
                        'HardDrive'=>$request->HardDrive,
                        'OperatingSystem'=>$request->OperatingSystem,
                        'weight'=>$request->weight,
                        'size'=>$request->size,
                        'origin'=>$request->origin,
                        'DebutYear'=>$request->DebutYear
                    ]);
                }
            }
            return redirect()->route('product.index')->with('success','Sửa thành công');
        }else{
            return view('errors.404');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // dd($id);
        if(Product::find($id) != null){
            $delete = Product::find($id);
            $deleteImg = ImgProduct::all();
            $deleteDetail = ProductDetail::all();
            $orderDetail = OrderDetail::all();


            if($orderDetail == "[]"){
                if($delete->id != null ){
                    foreach($deleteImg as $value){
                        if($value->product_id == $delete->id){
                            unlink("uploads/Imgproduct/".$value->image);
                            $value->delete();
                        };
                    };
                    foreach($deleteDetail as $val){
                        if($val->product_id == $delete->id){
                            $val->delete();
                        };
                    };
                    unlink("uploads/images/".$delete->image);
                    $delete->delete();
                    return redirect()->route('product.index')->with('success', 'Xóa thành công');
                }else{
                    return redirect()->route('product.index')->with('error', 'Bạn không thể xóa sản phẩm này');
                }
            }else{
                foreach($orderDetail as $v){
                    if($delete->id != null){
                    if($delete->id == $v->product_id){
                            return redirect()->route('product.index')->with('error', 'Bạn không thể xóa sản phẩm đang có trong đơn hàng');
                    }else{
                            foreach($deleteImg as $value){
                                if($value->product_id == $delete->id){
                                    unlink("uploads/Imgproduct/".$value->image);
                                    $value->delete();
                                };
                            };
                            foreach($deleteDetail as $val){
                                if($val->product_id == $delete->id){
                                    $val->delete();
                                };
                            };
                            unlink("uploads/images/".$delete->image);
                            $delete->delete();
                            return redirect()->route('product.index')->with('success', 'Xóa thành công');
                    };
                    }else{
                        return redirect()->route('product.index')->with('error', 'Bạn không thể xóa sản phẩm này');
                    }
                };
            }
        }else{
            return view('errors.404');
        }
        
    }

}
