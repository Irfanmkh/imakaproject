<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class section extends Model
{
    //
    protected $fillable = [
        'thumbnail',
        'judul',
        'konten',
        'post_as',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model) {
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }

    public function postAs() {
        return $this->belongsTo(postAs::class, 'post_as', 'id');
    }
}
