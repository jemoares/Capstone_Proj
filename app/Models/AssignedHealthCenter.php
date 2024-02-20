<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedHealthCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'health_center_staff_id',
        'health_center_id',
    ];
}
