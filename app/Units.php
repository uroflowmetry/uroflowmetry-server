<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    protected $table = 'polling_units';

    public function user(){
        return $this -> belongsTo('App\Users');
    }
}
