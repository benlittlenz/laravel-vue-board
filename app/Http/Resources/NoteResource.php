<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
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
            'body' => $this->body,
            'added_by' => User::select('id', 'name')->where('id', $this->user_id)->get(),
            'completed' => $this->completed,
            'created_at' => $this->created_at
        ];
    }
}
