<?php
namespace App\Controllers\Registrasi;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Registrasi_paket_model;

class Rpaket extends BaseController {
    protected $registrasi_paket_model;

    public function __construct() {
        $this->registrasi_paket_model = new Registrasi_paket_model();

		if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])) {
			$this->logged_in = $_SESSION['logged_in'];
		}else{
			$this->logged_in = '';
		}
    }

    public function save(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
            // var_dump($request->getPost());
            // die();

            $data = array(
				// 'id_medis' =>  $request->getPost('inpm_id'),
				'id_paket' =>  !empty($request->getPost('inpmMedisPaket')) ? $request->getPost('inpmMedisPaket'): null,
				'kode_rm' =>  !empty($request->getPost('inpRM_r')) ? $request->getPost('inpRM_r'): null,
				'jenis_bayar' =>  !empty($request->getPost('inppkJenisbayar')) ? $request->getPost('inppkJenisbayar'): null,
				'id_user' =>  $this->logged_in,
				'insertdate' => date("Y-m-d H:i:s")
			);

            $inpkd_id = $request->getPost('inpm_id');
            if(empty($inpkd_id)){
                $resp['insert'] = $this->registrasi_paket_model->data_add($data);

                $resp['status'] = true;
                $resp['info'] = "new";
                $resp['msg'] = "Data berhasil di simpan!";
                $resp['code'] = '200';
            }else{
                $resp['status'] = false;
                $resp['info'] = "update";
                $resp['msg'] = "anda tidak diperbolehkan memperbaharui data ini";
                $resp['code'] = '200';
            }
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

    public function getupdate(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
            // var_dump($request->getPost());
            // die();

            $data = array(
				// 'id_medis' =>  $request->getPost('inpm_id'),
				'id_paket' =>  !empty($request->getPost('inpmMedisPaket')) ? $request->getPost('inpmMedisPaket'): null,
				'kode_rm' =>  !empty($request->getPost('inpRM_r')) ? $request->getPost('inpRM_r'): null,
				'jenis_bayar' =>  !empty($request->getPost('inppkJenisbayar')) ? $request->getPost('inppkJenisbayar'): null,
				'updated_id' =>  $this->logged_in,
				'updated_at' => date("Y-m-d H:i:s")
			);

            $inpkd_id = $request->getPost('inpm_id');
            if(!empty($inpkd_id)){
                $resp['insert'] = $this->registrasi_paket_model->data_update($inpkd_id, $data);
                $resp['status'] = true;
                $resp['info'] = "new";
                $resp['msg'] = "Data berhasil di update!";
                $resp['code'] = '200';
            }else{
                $resp['status'] = false;
                $resp['info'] = "update";
                $resp['msg'] = "anda tidak diperbolehkan memperbaharui data ini";
                $resp['code'] = '200';
            }
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}


    public function getloadtabelcari(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$rm = strtolower($request->getPost('crinpNoRM'));
			$dataInsKode =array(
                'norm' => !empty($rm) ? $rm: null,
			);
			$resp['data'] = $this->registrasi_paket_model->tabel_cari($dataInsKode);
			$resp['status'] = TRUE;
		} else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

    public function getambilpaket(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$dataInsKode = array(
				'id' =>!empty($request->getPost('id')) ? $request->getPost('id'): ''
			);
			$resp['data'] = $this->registrasi_paket_model->get_ambilcari($dataInsKode);
			$resp['status'] = TRUE;
		} else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

    public function getpaket_medis(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$dataInsKode =array(
                'id_paket' => !empty($request->getPost('id')) ? $request->getPost('id'): null,
			);
			$resp['data'] = $this->registrasi_medis_model->gpaket_medis($dataInsKode);
			$resp['status'] = TRUE;
		} else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

   

}


