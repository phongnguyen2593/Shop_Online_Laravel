<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;


class UpdateUserRequest extends FormRequest
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
            'name'      => ['required', 'min:6', 'max:50'],
            'gender'    => ['required'],
            'phone'     => ['numeric', 'nullable', 'regex:/(0)[0-9]{9}/'],
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Họ tên',
            'gender'    => 'Giới tính',
            'phone'     => 'Số điện thoại'
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'min'       => ':attribute lớn hơn :min ký tự',
            'max'       => ':attribute ít hơn :max ký tự',
            'regex'   => ':attribute không đúng định dạng',
        ];
    }
}
