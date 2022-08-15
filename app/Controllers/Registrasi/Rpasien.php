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
        $data = [
			'idLog' => $this->logged_in,
		];
		// $data['books'] = $this->expertise_epermintaan_model->dataRiwayatPerExpertise($dataIn);
        return view('registrasi/pendaftaran_view', $data);
    }

    public function ajax_cek_save_pasien(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
			$idp = !empty($request->getPost('idp')) ? $request->getPost('idp'):NULL; 
			$nik = !empty($request->getPost('id')) ? $request->getPost('id'):NULL; 
			$data = array(
				'id_pasien' =>  $idp,
				'nik' =>  $nik,
			);
			if(empty($nik)){
				$resp['status'] = false;
				$resp['code'] = '204';
				$resp['message'] = 'Maaf Data NIK harus ada';
				return $this->response->setJSON($resp);
				die();
			}
			$insert = $this->registrasi_pasien_model->pasien_cek_serch($data);
			if((count($insert)>=1) && (empty($idp))){
                // idp null dan data nip sudah ada
				$resp['status'] = false;
				$resp['code'] = '203';
				$resp['message'] = 'Maaf Data NIK sudah dipakai';
				$resp['nik'] = $nik;
			}else if((count($insert)>=1) && (!empty($idp))){
                // idp ada dan nip lebih lebih dari 1
				$resp['status'] = true;
				$resp['code'] = '201';
				$resp['info'] = count($insert);
				$resp['insert'] = $insert;
			}else{
				$resp['status'] = true;
				$resp['code'] = '200';
				$resp['info'] = count($insert);
				$resp['insert'] = $insert;
			}
        } else {
            $resp['status'] = false;
            $resp['code'] = '403';
            $resp['subtitle'] = 'FORBIDDEN';
            $resp['message'] = 'No direct script access allowed';
        }
        return $this->response->setJSON($resp);
	}

    public function save(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
           
            $id_pasien =  !empty($request->getPost('inp_idpasien')) ? $request->getPost('inpNama'): null;
            $nik =  !empty($request->getPost('inpnik')) ? $request->getPost('inpnik'): null;
            $convertDate = date("Y/m/d", strtotime(str_replace('/', '-', $request->getPost('inp_tgl_lahir'))));
            $data = array(
				// 'id_pasien' =>  $request->getPost('inpNoBPJS'),
				'nik' => $nik,
				'no_bpjs' => !empty($request->getPost('inpbpjs')) ? $request->getPost('inpbpjs'): null,
				'nama' => !empty($request->getPost('inpNama')) ? $request->getPost('inpNama'): null,
				'no_telp' => !empty($request->getPost('inpPhone')) ? $request->getPost('inpPhone'): null,
				'alamat' => !empty($request->getPost('inpAlamat')) ? $request->getPost('inpAlamat'): '',
				'id_propinsi' => !empty($request->getPost('inpRefProponsi')) ? $request->getPost('inpRefProponsi'): '99',
				'id_kabkota' => !empty($request->getPost('inpKabupaten')) ? $request->getPost('inpKabupaten'): '9999',
				'id_kecamatan' => !empty($request->getPost('inpKecamatan')) ? $request->getPost('inpKecamatan'): null,
				'id_kelurahan' => !empty($request->getPost('inpKelurahan')) ? $request->getPost('inpKelurahan'): null,
				'tgl_lahir' => !empty($convertDate) ? $convertDate: null,
				'jk' => !empty($request->getPost('inpJK')) ? $request->getPost('inpJK'): null,
				// 'id_agama' => !empty($request->getPost('inpAgama')) ? $request->getPost('inpAgama'): null,
				'id_pernikahan' => !empty($request->getPost('inpPernikahan')) ? $request->getPost('inpPernikahan'): null,
				'id_pekerjaan' => !empty($request->getPost('inpPekerjaan')) ? $request->getPost('inpPekerjaan'): null,
				'vaksin_cov' => !empty($request->getPost('inpVaksinasi')) ? $request->getPost('inpVaksinasi'): null,
			);

            $data_cek = array(
				'nik' =>  $nik,
			);
		    $cek_nik = $this->registrasi_pasien_model->pasien_cek_serch($data_cek);
            if(empty($id_pasien) && (count($cek_nik)>1)){
                $resp['info'] = 'cnik_ada';

                $resp['status'] = false;
				$resp['code'] = '204';
				$resp['message'] = 'Maaf Data sudah di pakai';
				return $this->response->setJSON($resp);
				die();
            }

            if(empty($id_pasien)){
                $data['id_user'] =  $this->logged_in;
                $data['insertdate'] = date("Y-m-d H:i:s");

                $resp['insert'] = $this->registrasi_pasien_model->pasien_add($data);	
				$resp['info'] = "new";
                $resp['status'] = true;
                $resp['msg'] = "Data berhasil di simpan!";
                $resp['code'] = '200';
            }else{
			    $data['updated_id'] =  $this->logged_in;
                $data['updated_at'] = date("Y-m-d H:i:s");

                $resp['insert'] = $this->registrasi_pasien_model->pasien_update($inpRM, $data);	
                $resp['info'] = "update";
                $resp['status'] = true;
                $resp['msg'] = "Data berhasil di update!";
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


