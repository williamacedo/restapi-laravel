<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class Classroom extends JsonResource
{
    //public $collects = \App\Http\Resources\Classroom::class;
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
            'description' => $this->description
        ];
    }
}
