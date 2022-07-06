<?php

namespace App\Http\Requests\Brand;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class BrandEditRequest extends FormRequest
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
            'name' => "required|unique:brands,name,{$this->brand}|max:25",
            'file'=>'image',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập tên',
            'name.unique'=>'Tên đã tồn tại',
            'name.max'=>'Tên nhãn hiệu bạn nhập quá 25 ký tự',
            'file.image'=>'Tệp bạn chọn không phải hình ảnh',
        ];
    }
}
