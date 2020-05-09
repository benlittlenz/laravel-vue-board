<?php

namespace App\Http\Resources;

use App\Http\Resources\JobContactsResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class JobContactsCollection extends ResourceCollection
{
    public $collects = JobContactsResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection
        ];
    }
}
