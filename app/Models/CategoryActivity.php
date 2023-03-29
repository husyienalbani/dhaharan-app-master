<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug','name',
    ];
//tabel relasi
    public function activities(){
        return $this->hasMany(Activity::class);
    }
}
