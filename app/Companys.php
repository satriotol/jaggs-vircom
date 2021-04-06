<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Companys extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'phone_number', 'description', 'vision', 'mission', 'video_profile', 'logo', 'image_desc', 'instagram', 'youtube', 'description_beranda', 'apa_kata_mereka'
    ];
    public function deleteAsset()
    {
        Storage::delete([$this->image_desc]);
    }
}
