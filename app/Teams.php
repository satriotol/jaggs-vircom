<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Teams extends Model
{
    protected $fillable =[
        'name','title','image','description','instagram'
    ];
    public function deleteImage()
    {
        Storage::delete([$this->image]);
    }
}
