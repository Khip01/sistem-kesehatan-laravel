<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_ihs',
        'nik',
        'name',
        'specialist',
        'sip',
        'gender',
        'birth_date',
        'phone',
        'email',
        'photo',
        'address',
    ];
}
