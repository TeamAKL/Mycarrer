<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'position',
        'type',
        'address',
        'job_description',
        'job_requirement',
        'employer_type',
        'employer_number',
        'salary_amount',
        'salary_unit',
        'department',
        'report_to',
        'urgent'
    ];
}
