<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsectionUpdateRequest extends FormRequest
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
            'code' => ['required', 'string', 'max:200'],
            'name' => ['required', 'string', 'max:200'],
            'label' => ['required', 'string', 'max:200'],
            'order' => ['required', 'integer'],
            'formschema_id' => ['required', 'integer', 'exists:formschemas,id'],
        ];
    }
}
