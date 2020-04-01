<?php

namespace App\Http\Resources;

use App\Project;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'user' => $this->users()->pluck('name')->flatten(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
