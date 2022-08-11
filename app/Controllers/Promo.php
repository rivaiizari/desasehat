<?php

namespace App\Controllers;

class Promo extends BaseController {
    public function index(){
        return view('welcome_message');
    }

    public function dashboard(){
		echo "selemat datang dihalaman dashboard admin";
	}
}
