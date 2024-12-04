<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenisProject extends Model
{
    //
    protected $fillable = [
        'id,',
        'jenis',
        'keterangan',
    ];

    public function project (){
        return $this->hasMany(project::class);
    }
}
