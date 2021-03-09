<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    protected $fillable = [
        'name','id_kategori','description','image','video','link','start_date','end_date'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function jenjang()
    {
        return $this->belongsToMany(Jenjang::class);
    }
}
