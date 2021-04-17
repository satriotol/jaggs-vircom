<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'name','parent_id','description','image'
    ];
    public function lomba()
    {
        return $this->hasMany(Lomba::class);
    }
    public function parent(){
        return $this->belongsTo(Kategori::class,'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Kategori::class,'parent_id');
    }
}
