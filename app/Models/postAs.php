<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class postAs extends Model
{
    //
    protected $fillable = [
        'id',
        'section',
    ];
    // public function section(){
    //     return $this->hasMany(section::class);
    // }
}
