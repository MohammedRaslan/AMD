<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'user_name' => 'required|string|min:4|unique:users,user_name|regex:/^((?!\@).)*$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|max:15|string',
            'phone' => 'nullable|max:20',
            'country' => 'nullable|string|max:200',
            'image' => 'nullable|string',
        ];
    }
}
