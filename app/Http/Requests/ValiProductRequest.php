<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiProductRequest extends FormRequest
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
            'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
