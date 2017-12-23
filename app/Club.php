<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model {
    
    protected $fillable = [
    	'name',
    	'country'
    ];

    public function players() {

    	return $this->hasMany('App\Player');
    }
}
