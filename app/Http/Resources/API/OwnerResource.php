<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->fullName(),
            "address" => $this->fullAddress(),
            "animals" => $this->animals->pluck('name') // 'name' here is the name of each animal that is connected to the owner via foreign keys - you are 'plucking' the name property/field from the array of animal objects associated with this particular owner_id
        ];
    }
}
