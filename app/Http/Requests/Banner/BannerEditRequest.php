<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerEditRequest extends FormRequest
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
            'name'=>"required|unique:banners,name,{$this->banner}",
            'image'=>'image',
            'link'=>'required',
            'description'=>'required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập tên',
            'name.unique'=>'Tên đã tồn tại',
            'image.image'=>'Tệp bạn chọn không phải hình ảnh',
            'link.required'=>'Bạn chưa nhập đường dẫn',
            'description.required'=>'Bạn chưa nhập mô tả',
        ];
    }
}
