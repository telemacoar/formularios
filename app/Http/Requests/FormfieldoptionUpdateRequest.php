<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormfieldoptionUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:200'],
            'type' => ['required', 'string', 'max:200'],
            'endpoint' => ['required', 'string', 'max:2000'],
            'formfield_id' => ['required', 'integer', 'exists:formfields,id'],
        ];
    }
}
