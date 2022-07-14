<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class T_Foods extends FormRequest
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
            'inputName'=>'required|max:300|string',
            'inputDescription'=>'required|string',
            'inputPrice'=>'required|numeric|min:15000',
            'inputCategory' =>'required|string',
            'inputDiscount' => 'required|numeric|min:10000',
            'inputImage'=>'required|filled|image|mimes:jpeg,png,jpg,gif,svg|max:25000',
        ];
    }
    public function messages()
    {
        return [
            'inputName.required'=>'Bạn chưa nhập tên loại thực phẩm',
            'inputName.max'=>'Tên thực phẩm chỉ có tối đa 300 ký tự',
            'inputDescription.required'=>'Bạn chưa nhập mô tả thực phẩm',
            'inputPrice.required'=>'Bạn chưa nhập giá thực phẩm',
            'inputPrice.min'=>'Giá sản phẩm phải lớn hơn hoặc bằng 15000',
            'inputCategory' =>'Bạn chưa nhập loại sản phẩm',
            'inputDiscount.min' =>'Khuyến mãi phải lớn hơn 10000 hoặc băng 10000',
            'inputImage.required'=>'Bạn chưa chọn ảnh',
            'inputImage.filled'=>'Bạn chưa chọn ảnh',
            'inputImage.max'=>'Kích thước ảnh tối đa là 25Mb',
            'inputImage.image'=>'File bạn upload không phải ảnh'
        ];
    } 
}
