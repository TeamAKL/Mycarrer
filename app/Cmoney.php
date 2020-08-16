<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cmoney extends Model
{
    protected $table = "cmoneys";
    protected $guarded = [];

    public function companies()
    {
        return $this->hasOne('App\Company');
    }
}
