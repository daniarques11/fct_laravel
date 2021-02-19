<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_CIF',
        'address',
        'town',
        'phone_number_1',
        'phone_number_2',
        'email',
        'workers_number',
    ];

    protected $table = 'working_center';
}
