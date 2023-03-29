<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceRecapitulation extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug', 'date','income','expense', 'saldo'
    ];
}
