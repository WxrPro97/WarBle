<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
