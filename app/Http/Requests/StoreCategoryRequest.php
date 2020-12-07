<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreCategoryRequest extends FormRequest
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
            'name'      => ['required', 'min:6', 'max:25' ],
            'thumbnail' => ['required', 'mimes:jpeg,png,jpg,gif', 'max:400'],
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Tên danh mục',
            'thumbnail' => 'Ảnh đại diện sản phẩm'
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'min'       => ':attribute lớn hơn :min ký tự',
            'name.max'  => ':attribute nhỏ hơn :max ký tự',
            'mimes'     => ':attribute không đúng định dạng',
            'thumbnail.max'  => ':attribute phải nhỏ hơn :max KB',
        ];
    }
}
