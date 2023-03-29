<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug','name', 'category_id', 'date', 'address', 'cost','activityinfo','cover'
    ];

    public function category(){
        return $this->belongsTo(CategoryActivity::class);
    }

    public function images(){
        return $this->hasMany(ActivityImage::class);
    }
}
