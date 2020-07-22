<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = ['desigination', 'organisation', 'current_company', 'work_from', 'work_till', 'profile_detail', 'user_id'];

    protected $tabile = "work_experiences";

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
