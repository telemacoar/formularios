<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormfieldvalueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'formvalue_id' => $this->formvalue_id,
            'formfield_id' => $this->formfield_id,
            'value' => $this->value,
        ];
    }
}
