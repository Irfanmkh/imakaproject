<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProject extends Model
{
    //
    protected $fillable = [
        'id',
        'kategori',
        'keterangan',
    ];

    public function project(){
        return $this->hasMany(project::class);
    }
}
