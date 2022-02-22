<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormfieldoptionitemStoreRequest extends FormRequest
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
            'value' => ['required', 'string', 'max:400'],
            'code' => ['required', 'string', 'max:200'],
            'formfieldoption_id' => ['required', 'integer', 'exists:formfieldoptions,id'],
        ];
    }
}
