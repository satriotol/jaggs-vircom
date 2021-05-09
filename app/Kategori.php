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
    public function lombasubkategori()
    {
        return $this->hasMany(Lomba::class,'subkategori_id');
    }
    public function parent(){
        return $this->belongsTo(Kategori::class);
    }
    public function children()
    {
        return $this->hasMany(Kategori::class,'parent_id');
    }
}
