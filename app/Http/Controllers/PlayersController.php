<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;


class PlayersController extends Controller {

	public function show(Player $player) {

		return view('players.show', ['player' => $player]);
	}
    
}
