<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubsController extends Controller {


	public function show(Club $club) {

		return response($club)->withHeaders([
			'Content-Type' => 'json'
		]);

	}
    
}
