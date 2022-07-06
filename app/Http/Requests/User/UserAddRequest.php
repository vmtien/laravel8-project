<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:50',
            'address'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password|min:6'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập tên',
            'name.max'=>'Bạn nhập tên quá dài',
            'address.required'=>'Bạn chưa nhập địa chỉ',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'phone.numeric'=>'Bạn phải nhập số vào đây',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu bạn nhập phải có ít nhất 6 ký tự',
            // 'password.confirmed'=>'Nhập lại mật khẩu không đúng',
            'password_confirmation.required'=>'Bạn chưa nhập lại mật khẩu',
            'password_confirmation.same'=>'Nhập lại mật khẩu không đúng',
            'password_confirmation.min'=>'Mật khẩu nhập lại phải có ít nhất 6 ký tự',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn phải nhập địa chỉ email vào đây',
            'email.unique'=>'Email này đã được đăng ký',

        ];
    }
}
