<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileUpdate extends FormRequest
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
            'author' => 'required|unique:member|min:4|max:50',
            'email' => 'required|email|unique:member',
            'password' => 'min:4|confirmed'
        ];

    }

    public function messages()
    {
        return [
            'email.unique' => 'อีเมลนี้มีผู้อื่นใช้แล้ว',
            'password.confirmed' => 'กรุณาตรวจสอบรหัสผ่านให้ตรงกัน'
        ];
    }
}
