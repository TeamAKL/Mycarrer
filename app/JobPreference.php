<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPreference extends Model
{
    protected $table = "job_preferences";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
