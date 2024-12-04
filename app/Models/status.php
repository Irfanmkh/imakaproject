<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    //
    protected $fillable = [
        'status',
        'id',
        'keterangan',
    ];

    public function project() {
        return $this->hasMany(project::class);
    }
}
