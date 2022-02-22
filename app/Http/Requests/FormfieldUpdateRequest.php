<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormfieldUpdateRequest extends FormRequest
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
            'label' => ['required', 'string', 'max:200'],
            'code' => ['required', 'string', 'max:200'],
            'mandatory' => ['required'],
            'enabled' => ['required'],
            'validate' => ['required', 'string', 'max:1000'],
            'order' => ['required', 'integer'],
            'formgroup_id' => ['required', 'integer', 'exists:formgroups,id'],
            'formfieldtype_id' => ['required', 'integer', 'exists:formfieldtypes,id'],
        ];
    }
}
