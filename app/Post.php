<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    // protected $table = 'posts';

    // set primary key
    // public $primaryKey = 'id';

    // timestamps
    // public $timestamps = false;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
