<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimesheetResource extends JsonResource
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
            'project_id' => $this->project_id,
            'user_id' => $this->user_id,
            'started_at' => $this->started_at,
            'stopped_at' => $this->stopped_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
