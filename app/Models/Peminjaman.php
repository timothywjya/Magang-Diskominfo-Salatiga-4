<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $dates = ['waktu_awal', 'waktu_akhir'];
    protected $fillable = ['nama_peminjam', 'keperluan', 'no_hp', 'status', 'gor_dipinjam_id', 'user_peminjam_id', 'arena_id'];
    protected $guarded = [];

    public function Arena(){
        return $this->belongsTo(Arena::class,'arena_id', 'id');
    }

    public function Gor(){
        return $this->belongsTo(Gor::class,'gor_dipinjam_id', 'id');
    }
}
