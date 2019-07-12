<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiShopRequest extends FormRequest
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
            'region' => 'required|string',
            'prefecture' => 'required|string',
            'shop_name' => 'required',
            'post_number' => 'required|regex:/^\d{3}[-]\d{4}$/',
            'shop_address' => 'required',
            'shop_tel' => 'required|regex:/^\d{3,4}[-]\d{2,3}[-]\d{4}$/'
         ];
    }

    public function messages()
    {
        return [
            "required" => "必須項目です。",
            "regex:/^\d{3}[-]\d{4}$/" => "「000-0000」の形式で入力してください",
            "regex:/^\d{3,4}[-]\d{2,3}[-]\d{4}$/" => "「000-000-0000」または「0000-00-0000」の形式で入力してください"
        ];
    }
}
