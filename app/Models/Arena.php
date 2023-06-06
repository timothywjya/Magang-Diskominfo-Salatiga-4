<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'arena';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_arena',
        'kode_gor',
        'fasilitas',
        'kapasitas',
    ];
    public function Gor(){
        return $this->belongsTo(Gor::class,'kode_gor', 'id');
    }

    public function Peminjaman(){
        return $this->hasMany(Peminjaman::class,'arena_id', 'id');
        }

}
