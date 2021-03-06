<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobProvider extends Model
{
    use HasFactory;
    protected $guard = 'job_providers';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
