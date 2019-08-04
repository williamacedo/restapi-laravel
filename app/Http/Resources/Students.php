<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Students extends ResourceCollection
{
    public $collects = \App\Http\Resources\Student::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'dados' => $this->collection,
            'links' => [
                'self' => 'treinaweb'
            ]
        ];
    }
}
