<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    protected $fillable = [
        'name'
    ];
    public function lomba()
    {
        return $this->belongsToMany(Lomba::class);
    }
}
