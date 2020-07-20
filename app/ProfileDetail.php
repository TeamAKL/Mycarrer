<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileDetail extends Model
{
    protected $table = "profile_details";
    protected $guarded = [];
    protected $date = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
