<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'client', 'start_year', 'start_month', 'end_year', 'end_month', 'detail', 'location', 'link', 'user_id'];

    protected $table = "projects";

    public function user() {
        return $this->belongsTo('App\User');
    }
}
