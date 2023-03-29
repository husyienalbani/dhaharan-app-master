<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceDonation extends Model
{
    use HasFactory;
    protected $fillable = [
        'donation_name', 'slug','donation_category','donation_date','donation_image', 'donation_nominal', 'donation_information',
    ];

}
