<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormfieldResource extends JsonResource
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
            'label' => $this->label,
            'code' => $this->code,
            'mandatory' => $this->mandatory,
            'enabled' => $this->enabled,
            'validate' => $this->validate,
            'order' => $this->order,
            'formgroup_id' => $this->formgroup_id,
            'formfieldtype_id' => $this->formfieldtype_id,
            'formfieldevents' => FormfieldeventCollection::make($this->whenLoaded('formfieldevents')),
            'formfieldoptions' => FormfieldoptionCollection::make($this->whenLoaded('formfieldoptions')),
            'value' => ''


        ];
    }
}
