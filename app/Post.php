<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public $table="posts";


    public function comments()
    {
        return $this->hasMany('App\Comment','post_id');
    }


    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public function author()
    {
    	return $this->belongsTo('App\Admin','admin_id');
    }
}
