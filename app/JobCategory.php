<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $fillable = ['category_name'];

    protected $table = "job_categories";

    protected $date = ['created_at', 'updated_at'];
}
