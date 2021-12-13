<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieUpdateRequest extends FormRequest
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
            'libele' => 'required|min:3|max:50|unique:categories,libele',
            'description' => 'required|min:3|max:255',
            'imagecat' => 'required|mimes:png,jpg,jpeg,gif,bmp,svg',
        ];
    }
}
