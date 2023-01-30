<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'judul',
        'pengarang',
        'tahun_terbit',
        'jenis_buku',
        'status',
    ];

    public $primaryKey = 'id';

    public function pinjam()
    {
        return $this->hasMany(Pinjam::class, 'no_buku', 'id');
    }
}
