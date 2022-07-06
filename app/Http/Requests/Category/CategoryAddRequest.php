<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'name'=>'required|unique:categories|max:25'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Bạn chưa nhập tên',
            'name.unique'=>'Tên đã tồn tại',
            'name.max'=>'Tên bạn nhập dài quá 25 ký tự'
        ];
    }
}
