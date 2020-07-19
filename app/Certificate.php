<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $guarded = [];
    protected $table = "certificates";

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
