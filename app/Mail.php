<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    private $table = "mail";


    public function campaigns(){
    	return $this->belongsToMany('App\Campaign');
    }
}
