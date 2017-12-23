<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model { 
    
    protected $fillable = [
    	'name',
    	'country',
    	'club_id'
    ];

    public function clubs() {

    	return $this->belongsTo('App\Club');
    }
}
