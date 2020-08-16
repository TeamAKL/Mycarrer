<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_email',
        'user_id',
        'company_name',
        'company_logo',
        'size',
        'phone_number',
        'city',
        'country',
        'address',
        'job_category_id',
        'about',
        'mission',
        'mission_image',
        'vission',
        'vission_image',
        'foundation_date',
        'banner_image'

    ];

    protected $table = 'companies';

    protected $dates = ['created_at'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function cmoney()
    {
        return $this->belongsTo('App\Cmoney');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function job_category()
    {
        return $this->belongsTo('App\JobCategory');
    }
}
