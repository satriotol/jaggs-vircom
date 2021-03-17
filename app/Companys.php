<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companys extends Model
{
    protected $fillable =[
        'name','email','phone_number','description','vision','mission','video_profile','logo','image_desc','instagram','youtube'
    ];
}
