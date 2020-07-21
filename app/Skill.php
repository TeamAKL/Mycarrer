<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "skills";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
