<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('backend.pages.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   if(User::find($id) != null){
            $user = User::find($id);
            $user->update([
                'role'=>$request->role,
            ]);
            return redirect()->route('user.index')->with('success','Thay đổi trạng thái thành công');
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
        if(User::find($id) != null){
            $delete = User::find($id);
            $order = Order::all();
            // dd($order);
            if($order == '[]'){
                if($delete->id != null){
                    $delete->delete();
                    return redirect()->route('user.index')->with('success', 'Xóa thành công');
                }else{
                    return redirect()->route('user.index')->with('error', 'Bạn không thể xóa tài khoản này');
                }
            }else{
                foreach($order as $v){
                    if($delete->id != null){
                        if($delete->id == $v->user_id){
                            return redirect()->route('user.index')->with('error', 'Bạn không thể tài khoản đang có đơn hàng');
                        }else{
                            $delete->delete();
                            return redirect()->route('user.index')->with('success', 'Xóa thành công');
                        };
                    }else{
                        return redirect()->route('user.index')->with('error', 'Bạn không thể xóa tài khoản này');
                    }
                }
            };
        }else{
            return view('errors.404');
        }
    }
}
