<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['qualification', 'specilization', 'institute', 'passing_year', 'education_type', 'user_id'];

    protected $table = "education";

    public function user() {
        return $this->belongsTo('App\User');
    }
}
