<?php

namespace App\Http\Resources\Lomba;

use Illuminate\Http\Resources\Json\ResourceCollection;

class LombaCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'status' => 'sukses',
            'data' => LombaResource::collection($this->collection),
            'meta' => [
                'total_post' => $this->collection->count()
            ]
        ];
    }
}
