<?php

namespace App\Controllers\Emr;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Emr_epemeriksaan_model;
use App\Models\Master_model;

use App\Controllers\Master_modul;

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
		$master_modul = new Master_modul();
		$dprofile_type = $master_modul->getprofile_type_byid($this->logged_in);
		if(!empty($id)){
			$data_m = [
				'id' => $id,
				'idLog' => $this->logged_in,
			];

			$getmedis_penginput = $this->emr_epemeriksaan_model->m_getmedis_penginput($data_m);
			$getmedis_detail = $this->emr_epemeriksaan_model->m_getmedis_detail($data_m);
			$data_in = [
				'data_title' => 'List Pemeriksaan',
				'idLog' => $this->logged_in,
				'data_penginput' => $getmedis_penginput,
				'data_detail' => $getmedis_detail,
				'data_ptype' => $dprofile_type,
			];
			return view('emr/epemeriksaan_dokter_view', $data_in);
		}else{
			$resp['msg'] = $session->setFlashdata('info_ses', 'ada kesalahan, harap hunungi admin atau refresh halaman');
			return redirect()->to(site_url('/pemeriksaan'));
		}
        
    }

	public function psave(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			// var_dump($request->getPost());die();
            $idm =  !empty($request->getPost('imp_idm')) ? $request->getPost('imp_idm'): null;
            $ide =  !empty($request->getPost('inpp_ide')) ? $request->getPost('inpp_ide'): null;

			if(empty($idm)){
                $resp['status'] = false;
				$resp['code'] = '204';
				$resp['info'] = 'Maaf Data medis tidak diketahui';
				$resp['message'] = 'Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator';
				return $this->response->setJSON($resp);
				die();
            }
           
            $data = array(
				// 'id_expertise' =>  $request->getPost('inpNoBPJS'),
				'id_medis' => $idm,
				'pemeriksaan' => !empty($request->getPost('impp_pemeriksaan')) ? $request->getPost('impp_pemeriksaan'): null,
				'obat' => !empty($request->getPost('impp_obat')) ? $request->getPost('impp_obat'): null,
			);

            $data_cek = array(
				'idm' =>  $idm,
				'ide' =>  $ide,
			);
		    $cek_ide = $this->emr_epemeriksaan_model->cdata_periksa($data_cek);
            if(empty($ide) && (count($cek_ide)>=1)){
                $resp['status'] = false;
				$resp['code'] = '204';
				$resp['info'] = 'medis sudah memiliki jawaban';
				$resp['message'] = 'Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator';
				return $this->response->setJSON($resp);
				die();
            }

            if(empty($ide)){
                $data['id_user'] =  $this->logged_in;
                $data['insertdate'] = date("Y-m-d H:i:s");

                $resp['insert'] = $this->emr_epemeriksaan_model->psave($data);	
				$resp['info'] = "Data Baru";
                $resp['status'] = true;
                $resp['message'] = "Data berhasil di simpan!";
                $resp['code'] = '200';
            }else{
			    $data['updated_id'] =  $this->logged_in;
                $data['updated_at'] = date("Y-m-d H:i:s");

                $resp['insert'] = $this->emr_epemeriksaan_model->pupdate($ide, $data);	
                $resp['info'] = "update";
                $resp['status'] = true;
                $resp['message'] = "Data berhasil di update!";
                $resp['code'] = '201';
            }
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

    
}
