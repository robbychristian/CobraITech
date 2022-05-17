<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationLetter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message',
        'job_category',
        'curriculum_vitae'
    ];
}
