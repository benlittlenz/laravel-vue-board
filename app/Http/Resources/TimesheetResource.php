<?php

namespace App\Http\Resources;

use App\User;
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
            'staff' => User::select('id', 'name')->where('id', $this->user_id)->get(),
            'started_at' => $this->started_at,
            'stopped_at' => $this->stopped_at,
            'created_at' => $this->created_at->format("d/m/yy H:i"),
            'updated_at' => $this->updated_at->format("d/m/yy H:i")
        ];
    }
}
