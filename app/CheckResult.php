<?php
/**
 * Created by PhpStorm.
 * User: rogue
 * Date: 12/4/2019
 * Time: 11:58 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
class CheckResult extends Model
{
    protected $table = 'tbl_data';

    // check if normaluser is online
    public function isOnline(){
        return
            Cache::has('user-is-online-' .  $this->id);
    }
}
