<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPaketWisata extends Model
{
    use HasFactory;
    protected $table = 'foto_paket_wisata';
    protected $fillable = ['path', 'paket_id'];

    public function PaketWisatas()
    {
        return $this->belongsTo(PaketWisata::class);
    }
}
