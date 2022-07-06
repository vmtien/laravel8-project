<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
        $a = [];
        if(!empty($this->uploads)){
            for($i = 0; $i < count($this->uploads) ; $i++ ){
                $a['uploads.'.$i] = 'image|max:2048';
            };
        };
        $b = [
            'name'=>"required|unique:products,name,{$this->product}|max:50",
            'price'=>'required|numeric',
            'sale_price'=>'nullable|numeric',
            'file'=>'image|max:2048',
            'uploads'=>'nullable|max:10',
            'category_id'=>'not_in:0',
            'CPU'=>'required',
            'RAM'=>'required',
            'brand_id'=>'not_in:0',
            'screen'=>'max:255',
            'graphics'=>'max:255',
            'weight'=>'max:255',
            'HardDrive'=>'max:25',
            'OperatingSystem'=>'max:25',
            'size'=>'max:25',
            'origin'=>'max:25',
            'DebutYear'=>'max:25',
        ];
        $b+=$a;
        return $b;
    }
    public function messages()
    {
        $c = [];
        if(!empty($this->uploads)){
            for($i = 0; $i < count($this->uploads) ; $i++ ){
                $j = $i+1;
                $c['uploads.'.$i.'.image'] ="Tệp thứ $j bạn chọn không phải ảnh";
                $c['uploads.'.$i.'.max'] = "Tệp thứ $j bạn chọn không được lớn hơn 2MB";
            };
        };
        $d = [
            'name.required'=>'Bạn chưa nhập tên',
            'name.unique'=>'Tên bạn nhập đã tồn tại',
            'name.max'=>'Tên bạn nhập dài quá 50 ký tự',
            'price.required'=>'Bạn chưa nhập giá',
            'price.numeric'=>'Bạn phải nhập số vào đây',
            'sale_price.numeric'=>'Bạn phải nhập số vào đây',
            'file.image'=>'Tệp bạn chọn không phải ảnh',
            'uploads.max'=>'Bạn không được chọn nhiều hơn 10 ảnh',
            'category_id.not_in'=>'Bạn phải chọn danh mục',
            'CPU.required'=>'Bạn phải nhập core',
            'RAM.required'=>'Bạn phải nhập RAM',
            'brand_id.not_in'=>'Bạn phải chọn hãng',
            'CPU.max'=>'Bạn nhập tên CPU quá 50 ký tự',
            'RAM.max'=>'Bạn nhập tên RAM quá 50 ký tự',
            'screen.max'=>'Bạn nhập tên màn hình quá 255 ký tự',
            'graphics.max'=>'Bạn nhập tên đồ họa quá 255 ký tự',
            'weight.max'=>'Bạn nhập trọng lượng quá 50 ký tự',
            'HardDrive.max'=>'Bạn nhập tên ổ cứng quá 25 ký tự',
            'OperatingSystem.max'=>'Bạn nhập tên hệ điều hành quá 25 ký tự',
            'size.max'=>'Bạn nhập kích thước quá 25 ký tự',
            'origin.max'=>'Bạn nhập nơi xuất xứ quá 25 ký tự',
            'DebutYear.max'=>'Bạn nhập năm ra mắt quá 25 ký tự',
        ];
        $d+= $c;
        return $d;
    }
}
