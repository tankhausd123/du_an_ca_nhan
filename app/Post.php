<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function users()
    {
        return $this->belongsTo('App\User');
    }
}
