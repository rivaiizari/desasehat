<?php
namespace App\Controllers\Registrasi;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Registrasi_terapis_model;

class Rterapis extends BaseController {
    protected $registrasi_terapis_model;

    public function __construct() {
        $this->registrasi_terapis_model = new Registrasi_terapis_model();

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
            if(empty($request->getPost('inpj_jadwal')) || empty($request->getPost('inpRM_r')) || empty($request->getPost('inpm_id'))){
                $resp['status'] = false;
                $resp['msg'] = "Data tidak berhasil di simpan!";
                $resp['code'] = '200';
                return $this->response->setJSON($resp);
                die();
            }

            $convertDate = date("Y/m/d H:i", strtotime(str_replace('/', '-', $request->getPost('inpj_jadwal'))));
            if(!empty($request->getPost('inpj_jadwal'))){
                $date_n = date("Y/m/d", strtotime(str_replace('/', '-', $request->getPost('inpj_jadwal'))));
                if($date_n < date("Y/m/d")){
                    $resp['status'] = false;
                    $resp['msg'] = "Tanggal permintaan min hari ini";
                    $resp['code'] = '200';
                    return $this->response->setJSON($resp);
                    die();
                }
            }
            $data = array(
				'kode_rm' => !empty($request->getPost('inpRM_r')) ? $request->getPost('inpRM_r'): null,
				'id_medis' => !empty($request->getPost('inpm_id')) ? $request->getPost('inpm_id'): null,
				'tgl_periksa' => $convertDate,
				'satus' => '1',
				'id_user' => $this->logged_in,
				'insertdate' => date("Y-m-d H:i:s"),
			);

            $re_data = $this->registrasi_terapis_model->data_add($data);
            if($re_data){
                $resp['status'] = true;
                $resp['msg'] = "Data berhasil di simpan!";
                $resp['code'] = '200';
            }else{
                $resp['status'] = false;
                $resp['msg'] = "Data tidak berhasil di simpan!";
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
            $tgl_awal = !empty($request->getPost('inpj_tglawal')) ? $request->getPost('inpj_tglawal'): null;
            $tgl_akhir = !empty($request->getPost('inpj_tglakhir')) ? $request->getPost('inpj_tglakhir'): null;
            if(!empty($tgl_awal)){
                $tgl_awal = date("Y/m/d", strtotime(str_replace('/', '-', $tgl_awal)));
            }
            if(!empty($tgl_akhir)){
                $tgl_akhir = date("Y/m/d", strtotime(str_replace('/', '-', $tgl_akhir)));
            }
			$dataInsKode =array(
                'tgl_awal' => $tgl_awal,
                'tgl_akhir' =>  $tgl_akhir,
			);
			$resp['data'] = $this->registrasi_terapis_model->tabel_cari($dataInsKode);
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


