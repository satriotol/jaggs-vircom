<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Lomba extends Model
{
    protected $fillable = [
        'name','kategori_id','description','hadiah','ketentuan','image','video','link','start_date','end_date','subkategori_id'
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
        Storage::delete([$this->image]);
    }
    public function deleteVideo()
    {
        Storage::delete([$this->video]);
    }
}
