<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
    {   if($this->check1 == 1){
            return [
                'nameCheck'=>'required',
                'addressCheck'=>'required',
                'phoneCheck'=>'required|numeric',
                'total_amount'=>'numeric|min:1'
            ];
        }else{
            return [
                'name'=>'required',
                'address'=>'required',
                'phone'=>'required|numeric',
                'total_amount'=>'numeric|min:1'
            ];
        }; 
    }
    public function messages(){
        return [
            'nameCheck.required'=>'Bạn chưa nhập tên',
            'addressCheck.required'=>'Bạn chưa nhập địa chỉ',
            'phoneCheck.required'=>'Bạn chưa nhập số điện thoại',
            'phoneCheck.numeric'=>'Bạn phải nhập số vào đây',
            'name.required'=>'Bạn chưa nhập tên',
            'address.required'=>'Bạn chưa nhập địa chỉ',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'phone.numeric'=>'Bạn phải nhập số vào đây',
            'total_amount.min'=>'Bạn chưa mua sản phẩm nào'
        ];
    }
}
