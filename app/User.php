<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id', 'phone_number'
    ];

    // protected $dateFormat = 'd-m-Y';

    protected $dates = ['created_at', 'updated_at'];

    // protected $casts = [
    //     'created_at'     => 'date',
    //     'updated_at'     => 'date',
    // ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function education()
    {
        return $this->hasMany('App\Education');
    }

    public function work_experiences()
    {
        return $this->hasMany('App\WorkExperience');
    }

    public function certificates()
    {
        return $this->hasMany('App\Certificate');
    }

    public function skills()
    {
        return $this->hasMany('App\Skill');
    }

    public function job_preferences()
    {
        return $this->hasOne('App\JobPreference');
    }

    public function companies()
    {
        return $this->hasOne('App\Company');
    }
    public function profile_details()
    {
        return $this->hasOne('App\ProfileDetail');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }

}
