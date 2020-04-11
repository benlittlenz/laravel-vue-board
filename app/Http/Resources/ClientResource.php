<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'company' => $this->title,
            'email' => $this->description,
            'phone' => $this->phone,
            'contact' => $this->created_at,
            'created_at' => $this->updated_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
