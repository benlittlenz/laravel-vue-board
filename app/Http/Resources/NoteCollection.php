<?php

namespace App\Http\Resources;

use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NoteCollection extends ResourceCollection
{
    public $collects = NoteResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'notes' => $this->collection
        ];
    }
}
