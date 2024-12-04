<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengalamanKerja extends Model
{
    //
    protected $fillable = [
        'thumbnail',
        'tanggal',
        'nama_perusahaan',
        'judul',
        'deskripsi',
        
    ];
}
