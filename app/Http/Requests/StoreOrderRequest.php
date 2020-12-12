<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'phone'     => ['required','numeric', 'regex:/(0)[0-9]{9}/'],
            'gender'    => ['required'],
            'address'   => ['required','min:6'],
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Họ tên',
            'email'     => 'Email',
            'gender'    => 'Giới tính',
            'phone'     => 'Số điện thoại',
            'address'   => 'Địa chỉ'
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'min'       => ':attribute lớn hơn :min ký tự',
            'max'       => ':attribute ít hơn :max ký tự',
            'regex'     => ':attribute không đúng định dạng',
            'numeric'   => ':attribute chỉ chứa số'
        ];
    }
}
