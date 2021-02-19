<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'working_center_id',
        'FCT_coordinator_NIF',
        'company_tutor_NIF',
        'day_work_type',
        'schedule',
    ];

    protected $table = 'agreement';
}
