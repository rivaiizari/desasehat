<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index(){
        // return view('welcome_message');
        return view('home_view');
    }

    public function template(){
        return view('layout/template.php');
    }

    public function pendaftaran(){
    	$data = [
            'dpage_title' => 'Daftar Permintaan Konsultasi',
            'dpage_title_parent' => 'Laporan',
            'dpage_title_active' => 'Permintaan Konsultasi',
        ];
        return view('lain_view.php', $data);
    }


    public function dashboard(){
		echo "selemat datang dihalaman dashboard admin";
	}
}
