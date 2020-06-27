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
        'industry_id',
        'about',
        'mission',
        'mission_image',
        'vission',
        'vission_image',
        'foundation_date',
        'banner_image'

    ];

    protected $table = 'companies';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
