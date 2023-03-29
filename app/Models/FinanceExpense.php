<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceExpense extends Model
{
    use HasFactory;
    protected $fillable = [
        'expense_name', 'slug', 'expense_nominal','expense_date','expense_image'
    ];
}
