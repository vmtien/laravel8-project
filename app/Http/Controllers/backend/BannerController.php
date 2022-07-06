<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Requests\Banner\BannerAddRequest;
use App\Http\Requests\Banner\BannerEditRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('backend.pages.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerAddRequest $request)
    {
        $image = $request->image->getClientOriginalName();
        $image = time().'-'.$image;
        $request->image->move(public_path('uploads\Banner'),$image);
        Banner::create([
            'name'=>$request->name,
            'image'=>$image,
            'link'=>$request->link,
            'sale'=>$request->sale,
            'prioty'=>$request->prioty,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        return redirect()->route('banner.index')->with('success','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   if(Banner::find($id) != null){
            $banner = Banner::find($id);
            return view('backend.pages.banner.edit',compact('banner'));
        }else{
            return view('errors.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerEditRequest $request, $id)
    {
        if(Banner::find($id) != null){
            $banner = Banner::find($id);
            if($request->file == null){
                $banner->update($request->all());
            }else{
                unlink("uploads/Banner/".$banner->image);
                $edit_name = $request->file->getClientOriginalName();
                $edit_name = time().'-'.$edit_name;
                $request->file->move(public_path('uploads\Banner'),$edit_name);
                $banner->update($request->all([
                    'name'=>$request->name,
                    'image'=>$edit_name,
                    'link'=>$request->link,
                    'sale'=>$request->sale,
                    'description'=>$request->description,
                    'status'=>$request->status,
                ]));
            };
            return redirect()->route('banner.index')->with('success','Sửa thành công');
        }else{
            return view('errors.404');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Banner::find($id) != null){
            $delete = Banner::find($id);
            if($delete->prioty == 0){
                unlink("uploads/Banner/".$delete->image);
                $delete->delete();
                return redirect()->route('banner.index')->with('success','Xóa thành công');
            }else{
                return redirect()->route('banner.index')->with('error','Bạn không thể xóa ảnh bìa này');
            }
        }else{
            return view('errors.404');
        }
    }
}
