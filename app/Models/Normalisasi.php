<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    protected $table = 'v_saw_normal';

    // Define fillable properties if needed
    protected $fillable = [
        'nama',
        'jumlah_penduduk',
        'jumlah_permintaan',
        'jumlah_pabrik',
        'luas_wilayah',
        'luas_perkebunan',
    ];
}

