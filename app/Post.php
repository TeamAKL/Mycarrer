<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'company_id',
        'position',
        'type',
        'experience',
        'address',
        'job_description',
        'job_requirement',
        'employer_type',
        'employer_number',
        'min_salary',
        'max_salary',
        'salary_unit',
        'department',
        'report_to',
        'job_status',
        'urgent'
    ];

    protected $table = "posts";
    protected $date = ['created_at', 'updated_at'];

    public function job_categories()
    {
        return $this->belongsToMany('App\JobCategory');
    }

    public function companies()
    {
        return $this->belongsTo('App\Company');
    }
}
