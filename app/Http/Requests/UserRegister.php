<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegister extends FormRequest
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
            'last_name' => 'required|max:40',
            'first_name' => 'required|max:40',
            'last_name_ja' => 'required|max:20',
            'first_name_ja' => 'required|max:20',
            'gender' => 'required',
            'phone' => 'nullable|regex:/^\d{2,4}[-]\d{2,4}[-]\d{2,4}$/',
            'email' => 'required|email|confirmed',
            'product' => 'required',
            'serial' => 'required|regex:/^[WT][A-Z]{2,4}\d{7,8}$/',
            'color' => 'required',


        ];
    }

    public function messages()
    {
        return[
            'required' => '必須項目です。',
        ];
    }
}
