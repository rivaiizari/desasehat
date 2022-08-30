<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Master_modul_model;
use App\Models\Master_model;

class Master_modul extends BaseController {
    protected $master_modul_model;

    public function __construct() {
        $this->master_modul_model = new Master_modul_model();

		if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])) {
			$this->logged_in = $_SESSION['logged_in'];
		}else{
			$this->logged_in = '';
		}
    }

    public function getAllKabKota(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			$postData = !empty($request->getPost('id')) ? $request->getPost('id'):''; 
            $resp = $this->master_modul_model->getDataAllKabKota($postData);
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

	public function getAllKecamatan(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			$postData = !empty($request->getPost('id')) ? $request->getPost('id'):''; 
            $resp = $this->master_modul_model->getDataAllKecamatan($postData);
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

	public function getAllKelurahan(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			$postData = !empty($request->getPost('id')) ? $request->getPost('id'):''; 
            $resp = $this->master_modul_model->getDataAllKelurahan($postData);
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

	// inj alamat
	public function getAllKabKota_inj(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			$postData = !empty($request->getPost('id')) ? $request->getPost('id'):''; 
            $resp = $this->master_modul_model->getDataAllKabKota_inj($postData);
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

	public function getAllKecamatan_inj(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			$postData = !empty($request->getPost('id')) ? $request->getPost('id'):''; 
            $resp = $this->master_modul_model->getDataAllKecamatan_inj($postData);
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}
	public function getAllKelurahan_inj(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			$postData = !empty($request->getPost('id')) ? $request->getPost('id'):''; 
            $resp = $this->master_modul_model->getDataAllKelurahan_inj($postData);
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

    public function getprofile_type_byid($id){
		$resp = [
            'id_user' => '0',
            'isdokter' => '0',
            'isnakes' => '0',
            'isapotik' => '0',
        ];
        $get_data = $this->master_modul_model->get_isdokter_byid($id);
        if(!empty($get_data)){
            if(!empty($get_data->id_user)){
                $resp['id_user'] = $get_data->id_user;
            }
            if(!empty($get_data->isdokter)){
                $resp['isdokter'] = $get_data->isdokter;
            }
            if(!empty($get_data->isnakes)){
                $resp['isnakes'] = $get_data->isnakes;
            }
            if(!empty($get_data->isapotik)){
                $resp['isapotik'] = $get_data->isapotik;
            }
        }
        return $resp;
	}

   

}
