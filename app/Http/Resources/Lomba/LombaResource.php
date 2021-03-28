<?php

namespace App\Http\Resources\Lomba;

use App\Http\Resources\KategoriResource;
use App\Http\Resources\SubKategori\SubKategoriResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LombaResource extends JsonResource
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
            'name' => $this->name,
            'kategori' => new KategoriResource($this->kategori),
            'jenjang' => $this->jenjang,
        ];
    }
}
