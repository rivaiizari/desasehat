<?php
namespace App\Controllers\Registrasi;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Registrasi_pasien_model;

class Rpasien extends BaseController {
    protected $registrasi_pasien_model;

    public function __construct() {
        $this->registrasi_pasien_model = new Registrasi_pasien_model();

		if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])) {
			$this->logged_in = $_SESSION['logged_in'];
		}else{
			$this->logged_in = '';
		}

    }

    public function index(){
        return view('pendaftaran_view');
    }

    public function save(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
            $convertDate = date("Y/m/d", strtotime(str_replace('/', '-', $request->getPost('inp_tgl_lahir'))));
            $data = array(
				// 'id_pasien' =>  $request->getPost('inpNoBPJS'),
				// 'kode_rm' =>  $request->getPost('inpRM_r'),
				'nama' => !empty($request->getPost('inpNama')) ? $request->getPost('inpNama'): null,
				'no_telp' => !empty($request->getPost('inpPhone')) ? $request->getPost('inpPhone'): null,
				'alamat' => !empty($request->getPost('inpAlamat')) ? $request->getPost('inpAlamat'): '',
				'id_propinsi' => !empty($request->getPost('inpRefProponsi')) ? $request->getPost('inpRefProponsi'): '99',
				'id_kabkota' => !empty($request->getPost('inpKabupaten')) ? $request->getPost('inpKabupaten'): '9999',
				'id_kecamatan' => !empty($request->getPost('inpKecamatan')) ? $request->getPost('inpKecamatan'): null,
				'id_kelurahan' => !empty($request->getPost('inpKelurahan')) ? $request->getPost('inpKelurahan'): null,
				'tgl_lahir' => !empty($convertDate) ? $convertDate: null,
				'jk' => !empty($request->getPost('inpJK')) ? $request->getPost('inpJK'): null,
				'id_pernikahan' => !empty($request->getPost('inpPernikahan')) ? $request->getPost('inpPernikahan'): null,
				'id_pekerjaan' => !empty($request->getPost('inpPekerjaan')) ? $request->getPost('inpPekerjaan'): null,
				'id_user' =>  $this->logged_in,
				'insertdate'=> date("Y-m-d H:i:s"),
			);

            $inpRM = $request->getPost('inpRM_r');
            if(empty($request->getPost('inpRM_r'))){
                $data['kode_rm'] = $this->genKodeRM();
                $resp['insert'] = $this->registrasi_pasien_model->pasien_add($data);	
				$resp['info'] = "new";
                $resp['status'] = true;
                $resp['msg'] = "Data berhasil di simpan!";
                $resp['code'] = '200';
                $resp['kode_rm'] = $data['kode_rm'];
            }else{
			    $cek_rm = $this->registrasi_pasien_model->pasien_by_rm($inpRM);
                if((count($cek_rm))>0){
                    $resp['insert'] = $this->registrasi_pasien_model->pasien_update($inpRM, $data);	
                    $resp['info'] = "update";
                    $resp['status'] = true;
                    $resp['msg'] = "Data berhasil di update!";
                    $resp['code'] = '201';
                }else{
                    $data['kode_rm'] = $this->genKodeRM();
                    $resp['insert'] = $this->registrasi_pasien_model->pasien_add($data);	
                    $resp['info'] = "new";
                    $resp['status'] = true;
                    $resp['msg'] = "Data berhasil di simpan!";
                    $resp['code'] = '200';
                    $resp['kode_rm'] = $data['kode_rm'];
                }
            }
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}


    public function genKodeRM(){
        $last_data = $this->registrasi_pasien_model->last_data_pasien();
        if(!empty($last_data->rm)){
            $rm = intval(substr($last_data->rm, 3));
        }else{
            $rm = 0;
        }
        // $rm = intval(substr($last_data->rm, 3));
        $rm_kode = '';
        do {
            $rm++;
            $rm_kode = 'A3-'.sprintf("%05d", $rm);
            // $rm_kode = 'A3-'.$rm;
            
            $cek_data_rm = $this->registrasi_pasien_model->pasien_by_rm($rm_kode);

        } while (count($cek_data_rm) < 0);
        // var_dump($rm_kode);exit();
       return $rm_kode;
    }

    public function getloadtabelcari(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$rm = strtolower($request->getPost('crinpNoRM'));
            if(!empty($rm)){
                $cek_rm = substr($rm, 0,3);
                if($cek_rm != 'a3-'){
                    $rm = 'a3-'.$rm;
                }
            }
			$nama = strtolower($request->getPost('crinpNama'));
			$dataInsKode =array(
                'norm' => !empty($rm) ? $rm: null,
                'nama' => !empty($nama) ? $nama: null,
			);
			$resp['data'] = $this->registrasi_pasien_model->pasien_cari($dataInsKode);
			$resp['status'] = TRUE;
		} else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

    public function getambilpasien(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$dataInsKode = array(
				'id' =>!empty($request->getPost('id')) ? $request->getPost('id'): ''
			);
			$resp['data'] = $this->registrasi_pasien_model->pasien_ambilcari($dataInsKode);
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


