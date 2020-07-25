<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JobCategory extends Model
{
    protected $fillable = ['category_name'];

    protected $table = "job_categories";

    protected $date = ['created_at', 'updated_at'];


    public function posts()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }

    public function companies()
    {
        return $this->hasOne('App\Company');
    }
}
