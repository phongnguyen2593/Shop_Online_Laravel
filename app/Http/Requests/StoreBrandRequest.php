<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreBrandRequest extends FormRequest
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
            'name'      => ['required', 'between:3,50'],
            'thumbnail' => ['required', 'mimes:jpeg,png,jpg,gif', 'max:1024']
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Tên thương hiệu',
            'thumbnail' => 'Hình ảnh',
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'between'   => ':attribute từ 3 đến 50 ký tự',
            'mimes'     => ':attribute không đúng định dạng',
            'max'       => ':attribute phải nhỏ hơn :max KB',
        ];
    }
}
