<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
            'username' => 'required|string|unique:users,username', 
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username bắt buộc',
            'username.unique' => 'Username đã tồn tại',
            'username.string' => 'Username phải là chuỗi',
            'email.required' => 'Email bắt buộc',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Email không đúng định dạng',  
            'password.required' => 'Password bắt buộc',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'      => 'fail_validate',
            "status_code" => 422,
            'message'     => $validator->errors()
        ], 422));
    }
}
