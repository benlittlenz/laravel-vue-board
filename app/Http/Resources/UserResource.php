<?php

namespace App\Http\Resources;

use App\Company;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'company_id' => $this->company_id,
            'company_name' => Company::select('name')->where('id', $this->company_id)->get()
            'phone' => $this->phone,
            'address' => $this->address,
            'suburb' => $this->suburb,
            'city' => $this->city
        ];
    }
}
