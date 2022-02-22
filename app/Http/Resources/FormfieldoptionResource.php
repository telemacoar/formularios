<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormfieldoptionResource extends JsonResource
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
            'name' => $this->name,
            'type' => $this->type,
            'endpoint' => $this->endpoint,
            'formfield_id' => $this->formfield_id,
            'formfieldoptionitems' => FormfieldoptionitemCollection::make($this->whenLoaded('formfieldoptionitems')),
        ];
    }
}
