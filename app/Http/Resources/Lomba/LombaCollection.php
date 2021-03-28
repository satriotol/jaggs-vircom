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
        if ($this->collection->count() > 0) {
            return [
                'status' => 'Sukses',
                'data' => LombaResource::collection($this->collection),
                'meta' => [
                    'total_post' => $this->collection->count()
                ]
            ];
        }else{
            return[
                'status' => 'Data Tidak Ditemukan',
                'data' => 'Angga Jembut'
            ];
        }
    }
}
