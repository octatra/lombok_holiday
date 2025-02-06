<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;
    protected $table = 'paket_wisata';
    protected $guarded = [];

    public function fotos()
    {
        return $this->hasMany(FotoPaketWisata::class);
    }

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
