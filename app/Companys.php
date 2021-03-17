<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Companys extends Model
{
    protected $fillable =[
        'name','email','address','phone_number','description','vision','mission','video_profile','logo','image_desc','instagram','youtube'
    ];
    public function deleteAsset()
    {
        Storage::delete([$this->image_desc]);
    }
}
