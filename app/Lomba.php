<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Lomba extends Model
{
    protected $fillable = [
        'name','kategori_id','description','image','video','link','start_date','end_date'
    ];
    public function jenjang()
    {
        return $this->belongsToMany(Jenjang::class);
    }
    public function hasJenjang($jenjangid)
    {
        return in_array($jenjangid,$this->jenjang->pluck('id')->toArray());
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function deleteImage()
    {
        Storage::disk('public')->delete([$this->image],[$this->video]);
    }
}
