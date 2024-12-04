<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //

    protected $fillable = [
        'id',
        'nama_project',
        'tanggal_mulai',
        'tanggal_selesai',
        'jenis_project',
        'jumlah',
        'link_project',
    ];

    public function jenisProject(){
        return $this->belongsTo(jenisProject::class);
    }

    public function kategoriProject(){
        return $this->belongsTo(KategoriProject::class);
    }
    public function status(){
        return $this->belongsTo(status::class);
    }
}
