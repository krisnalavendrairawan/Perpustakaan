<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'pinjam';
    protected $fillable = [
        'no_buku',
        'id_anggota',
        'tgl_pinjam',
        'tgl_kembali',
        
    ];

    public $primaryKey = 'id';
    

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'no_buku', 'id');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class , 'id_anggota', 'id');
    }
}
