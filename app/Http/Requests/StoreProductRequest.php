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
            'name'              => ['required', 'min:10', 'max:100'],
            'category_id'       => 'required',
            'status'            => 'required',
            'quantity'          => ['required', 'between:0,1000','numeric'],
            'thumbnail'         => ['required', 'mimes:jpeg,png,jpg,gif', 'max:400'],
            'brand_id'          => ['required'],
            'origin_price'      => ['required','numeric', 'gte:sale_price'],
            'sale_price'        => ['required','numeric', 'lte:origin_price'],
            'images[]'          => ['mimes:jpeg,png,jpg,gif', 'max:2048'],
            'discount_percent'  => ['numeric', 'between:0,90', 'nullable'],
        ];
    }

    public function attributes()
    {
        return [
            'name'              => 'Tên sản phẩm',
            'category_id'       => 'danh mục',
            'quantity'          => 'Số lượng',
            'status'            => 'trạng thái',
            'thumbnail'         => 'Ảnh',
            'images'            => 'Ảnh mô tả',
            'origin_price'      => 'Giá gốc',
            'sale_price'        => 'Giá bán',
            'discount_percent'  => 'Giảm giá',
        ];
    }

    public function messages()
    {
        return [
            'required'                  => ':attribute không được để trống',
            'name.min'                  => ':attribute lớn hơn :min ký tự',
            'name.max'                  => ':attribute ít hơn :max ký tự',
            'category_id.required'      => 'Chọn :attribute của sản phẩm',
            'brand_id.required'         => 'Chọn thương hiệu của sản phẩm',
            'status.required'           => 'Chọn :attribute cho sản phẩm',
            'quantity.between'          => ':attribute từ 0 - 1000',
            'thumbnail.required'        => ' Chọn ảnh đại diện cho sản phẩm',
            'thumbnail.mimes'           => ':attribute không đúng định dạng',
            'thumbnail.max'             => ' Kích thước :attribute phải nhỏ hơn :max KB',
            'images.mimes'              => ':attribute không đúng định dạng',
            'images.max'                => 'Kích thước tệp ảnh phải nhỏ hơn :max KB',
            'discount_percent.between'  => ':attribute từ 0 đến 90%',
            'numeric'                   => ':attribute phải ở dạng số',
            'gte'                       => ':attribute phải lớn hơn hoặc bằng giá bán',
            'lte'                       => ':attribute phải nhỏ hơn hoặc bằng giá gốc',
        ];
    }
}
