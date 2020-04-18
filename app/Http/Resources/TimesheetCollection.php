<?php

namespace App\Http\Resources;

use App\Http\Resources\TimesheetResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TimesheetCollection extends ResourceCollection
{
    public $collects = TimesheetResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'timesheets' => $this->collection
        ];
    }
}
