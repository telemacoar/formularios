<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormsectionResource extends JsonResource
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
            'code' => $this->code,
            'name' => $this->name,
            'label' => $this->label,
            'order' => $this->order,
            'formschema_id' => $this->formschema_id,
            'formgroups' => FormgroupCollection::make($this->whenLoaded('formgroups')),
        ];
    }
}
