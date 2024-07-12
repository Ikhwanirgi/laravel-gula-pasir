<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif';

    protected $fillable = [
        'nama',
        'jumlah_penduduk',
        'jumlah_permintaan',
        'jumlah_pabrik',
        'luas_wilayah',
        'luas_perkebunan'
    ];
}
