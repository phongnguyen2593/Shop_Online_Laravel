<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'min:10', 'max:50'],
            'category_id' => 'required',
            'status' => 'required',
            'quantity' => ['required', 'max:3'],
            'thumbnail' => ['required', 'mimes:jpeg,png,jpg,gif', 'max:400'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên sản phẩm',
            'category_id' => 'danh mục',
            'quantity' => 'Số lượng',
            'thumbnail' => 'Ảnh đại diện',
            'status' => 'trạng thái',
            
            // 'origin_price' => 'Giá gốc',
            // 'sale_price' => 'Giá bán',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute không được để trống',
            'name.min' => ':attribute lớn hơn :min ký tự',
            'name.max' => ':attribute ít hơn :max ký tự',
            'category_id.required' => 'Chọn :attribute của sản phẩm',
            'status.required' => 'Chọn :attribute cho sản phẩm',
            'quantity.required' => ':attribute không được để trống',
            'quantity.max' => ':attribute quá lớn',
            'thumbnail.required' => ' Chọn :attribute cho sản phẩm',
            'thumbnail.mimes' => ':attribute không đúng định dạng',
            'thumbnail.max' => ' Kích thước :attribute phải nhỏ hơn :max KB',
        ];
    }
}
