<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Formschema;

class FormvalueResource extends JsonResource
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
            'formschema_id' => $this->formschema_id,
            'date' => $this->date,
            'user_id' => $this->user_id,
            'formfieldvalues' => FormfieldvalueCollection::make($this->whenLoaded('formfieldvalues')),
            'formschema' => Formschema::find(($this->formschema_id)),
        ];
    }
}
