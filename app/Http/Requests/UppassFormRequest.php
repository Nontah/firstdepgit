<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UppassFormRequest extends FormRequest
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

          session([ 'step1' => '3']);
            session([ 'step2' => '2']);
            session([ 'step3' => '1']);
            session([ 'step4' => '4']);
        return [



             'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ];
    }
}
