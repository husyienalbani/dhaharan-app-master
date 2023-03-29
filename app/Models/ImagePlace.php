<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePlace extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'image',
        'place_id',
    ];
    public function place()
    {
        /** 
        relasi belongsto dari imagespot ke tabel spot
        */
        return $this->belongsTo(Place::class);
    }
}
