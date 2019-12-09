<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NormalUsers extends Model
{
    protected $table = 'tbl_users';

    // check if normaluser is online
    public function isOnline(){
        return
        Cache::has('user-is-online-' .  $this->id);
    }
}

