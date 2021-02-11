<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'CIF',
        'name',
        'address',
        'address',
        'town',
        'phone_number_1',
        'phone_number_2',
        'email',
        'production_sector',
        'main_activity',
        'ownership',
        'representant_NIF',
    ];

    protected $table = 'company';
}
