<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CategoryAddRequest;
use App\Http\Requests\Category\CategoryEditRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cate = Category::all();
        return view('backend.pages.category.index',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryAddRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index')->with('success','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if(Category::find($id) != null){
            $cate = Category::find($id);
            return view('backend.pages.category.edit',compact('cate'));
        }else{
            return view('errors.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryEditRequest $request,$id)
    {
        if(Category::find($id) != null){
            $cate = Category::find($id);
            $cate->update($request->all());
            return redirect()->route('category.index')->with('success','Sửa thành công');
        }else{
            return view('errors.404');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        if(Category::find($id) != null){
            $delete = Category::find($id);
            // dd($delete->products->count());
            if($delete != null && $delete->products->count() == 0 ) {
                $delete->delete();
                return redirect()->route('category.index')->with('success','Xóa thành công');
            }else{
                return redirect()->route('category.index')->with('error','Bạn không thể xóa danh mục này');
            }
        }else{
            return view('errors.404');
        }
    }
}
