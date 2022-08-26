<?php

namespace App\Controllers\Emr;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Emr_epemeriksaan_model;
use App\Models\Master_model;

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

	public function loadtabel(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$isaktif = '0';
			$master_model = new Master_model();
			$cek_isdokter = $master_model->get_isdokter_byid($this->logged_in);
			if(!empty($cek_isdokter)){
				$isaktif = $cek_isdokter->isdokter;
			}
            $data = array(
                'isdokter' => $isaktif,
				// 'tgl_awal' =>  date("Y/m/d", strtotime(!empty($request->getPost('id'))? $request->getPost('id'):date("Y/m/d"))),
				// 'tgl_akhir' =>  date("Y/m/d", strtotime(!empty($request->getPost('th'))? $request->getPost('th'):date("Y/m/d"))),
            );
            $resp['status'] = true;
            $resp['data'] =  $this->emr_epemeriksaan_model->getloadtabel($data);
		} else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

	public function pbatal(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$idm =  !empty($request->getPost('id')) ? $request->getPost('id'): null;
            $data = array(
				'deleted_id' => $this->logged_in,
				'deleted_at' =>  date("Y-m-d H:i:s"),
            );
            $resp['status'] = true;
            $resp['data'] =  $this->emr_epemeriksaan_model->m_pbatal($idm, $data);
		} else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

	public function pperiksa_dokter($id=false){
		$session = \Config\Services::session();
		// var_dump($id);die();
		if(!empty($id)){
			// $c_isnakes =  $this->emr_epemeriksaan_model->c_nakes($this->logged_in);
			// $ab = $this->emr_epemeriksaan_model->getCekTeleFas($id, $this->logged_in);
			// if(count($ab)>0){

			// }else{
			// 	$resp['msg'] = $session->setFlashdata('info_ses', 'Pemeriksaan Medis sudah diperiksa oleh dokter jaga');
			// 	return redirect()->to(site_url('/pemeriksaan'));
			// }
			$data_m = [
				'id' => $id,
				'idLog' => $this->logged_in,
			];
			$getmedis_detail = $this->emr_epemeriksaan_model->m_getmedis_detail($data_m);
			$getmedis_penginput = $this->emr_epemeriksaan_model->m_getmedis_penginput($data_m);
			// var_dump($getmedis_penginput->nama_profile);die();

			$data_in = [
				'data_title' => 'List Pemeriksaan',
				'idLog' => $this->logged_in,
				'data_penginput' => $getmedis_detail,
				'data_detail' => $getmedis_detail,
			];
			return view('emr/epemeriksaan_dokter_view', $data_in);
		}else{
			$resp['msg'] = $session->setFlashdata('info_ses', 'ada kesalahan, harap hunungi admin atau refresh halaman');
			return redirect()->to(site_url('/pemeriksaan'));
		}
        
    }

    
}
