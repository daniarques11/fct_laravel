<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIF',
        'name',
        'role',
    ];

    protected $table = 'person';

    protected $keyType = 'string';
    protected $primaryKey = 'NIF';
}

