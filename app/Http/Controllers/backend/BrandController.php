<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Brand\BrandAddRequest;
use App\Http\Requests\Brand\BrandEditRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('backend.pages.brand.index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandAddRequest $request)
    {   
        $file_name = $request->file->getClientOriginalName();
        $file_name = time().$file_name;
        $request->file->move(public_path('uploads\Logo'),$file_name);
        $request->merge(['logo'=>$file_name]);
        // dd($request->all());
        Brand::create($request->all());
        return redirect()->route('brand.index')->with('success','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Brand::find($id) != null){
            $bra = Brand::find($id);
            return view('backend.pages.Brand.edit',compact('bra'));
        }else{
            return view('errors.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(BrandEditRequest $request,$id)
    {
        if(Brand::find($id) != null){
            $bra = Brand::find($id);
            if($request->file == null){
                $bra->update($request->all());
            }else{
                unlink("uploads/Logo/".$bra->logo);
                $edit_name = $request->file->getClientOriginalName();
                $request->file->move(public_path('uploads\Logo'),$edit_name);
                $request->merge(['logo'=>$edit_name]);
                $bra->update($request->all());
            };
            return redirect()->route('brand.index')->with('success','Sửa thành công');
        }else{
            return view('errors.404');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   if(Brand::find($id) != null){
            $delete = Brand::find($id);
            if($delete != null && $delete->products->count() == 0) {
                unlink("uploads/Logo/".$delete->logo);
                $delete->delete();
                return redirect()->route('brand.index')->with('success','Xóa thành công');
            }else{
                return redirect()->route('brand.index')->with('error','Bạn không thể xóa hãng này');
            }
        }else{
            return view('errors.404');
        }    
    }
}
