<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    //

    public $table="hires";


    public function role()
    {
        return $this->belongsTo('App\Role','role_id');
    }
}
