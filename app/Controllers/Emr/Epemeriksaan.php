<?php

namespace App\Controllers\Emr;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Emr_epemeriksaan_model;

class Epemeriksaan extends BaseController {
    protected $emr_epemeriksaan_model;
	protected $logged_in;
	protected $grup_in;

	public function __construct() {
        $this->emr_epemeriksaan_model = new Emr_epemeriksaan_model();

		if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])) {
			$this->logged_in = $_SESSION['logged_in'];
		}else{
			$this->logged_in = '';
		}

        if(isset($_SESSION['grup']) && !empty($_SESSION['grup'])) {
			$this->grup_in = $_SESSION['grup'];
		}else{
			$this->grup_in = '';
		}
    }

    public function index(){
        $data_in = [
			'data_title' => 'List Pemeriksaan',
			'idLog' => $this->logged_in,
		];
        return view('emr/epemeriksaan_view', $data_in);
    }

    
}
