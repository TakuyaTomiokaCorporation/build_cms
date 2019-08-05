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
            '00N6F00000SUcr2' => 'required|max:20',
            '00N6F00000SUcr7' => 'required|max:20',
            '00N6F00000MmEeS' => 'required',
            'zip' => 'required|regex:/^\d{3}[-]\d{4}$/',
            'state' => 'required',
            'city' => 'required',
            'phone' => 'regex:/^\d{2,4}[-]\d{2,4}[-]\d{2,4}$/',
            'email' => 'required|regex:/[^\s]@[^\s]/',
            '00N6F00000O5eOx' => 'required',
            '00N6F00000MmEem' => 'required|regex:/^[WT][A-Z]{2,4}\d{7,8}$/',
            '00N6F00000MmEeh' => 'required',


        ];
    }

    public function messages()
    {
        return[
            'required' => '必須項目です。',
        ];
    }
}
