<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gor extends Model
{
    use HasFactory;
    protected $table = 'gor';
    protected $fillable = ['nama_gor', 'fungsi_gedung', 'jumlah_tempat', 'alamat_gedung', 'spesifikasi_gedung', 'foto_gedung'];

    public function Arena(){
        return $this->hasMany(Arena::class,'kode_gor', 'id');
    }
}
