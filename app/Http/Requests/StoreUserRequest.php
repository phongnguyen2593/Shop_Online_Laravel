<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreUserRequest extends FormRequest
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
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'gender'    => ['required'],
            'phone'     => ['numeric', 'nullable', 'regex:/(0)[0-9]{9}/'],
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Họ tên',
            'email'     => 'Email',
            'password'  => 'Mật khẩu',
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
            'confirmed' => ':attribute không khớp',
            'regex'   => ':attribute không đúng định dạng',
        ];
    }
}
