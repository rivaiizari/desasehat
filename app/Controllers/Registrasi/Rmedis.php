<?php
namespace App\Controllers\Registrasi;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Registrasi_medis_model;

class Rmedis extends BaseController {
    protected $registrasi_medis_model;

    public function __construct() {
        $this->registrasi_medis_model = new Registrasi_medis_model();

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

            $inpmFKemampuan = $request->getVar('inpmFKemampuan');
            if(!empty($inpmFKemampuan)){
                $inpmFKemampuan = implode("|" , $inpmFKemampuan);
            }
           
            $data = array(
				// 'id_medis' =>  $request->getPost('inpm_id'),
				'kode_rm' =>  $request->getPost('inpRM_r'),
				'anamesis' => !empty($request->getPost('inpmMedisAnamnesis')) ? $request->getPost('inpmMedisAnamnesis'): null,
				'keluhan_utama' => !empty($request->getPost('inpmKeluhanUtamaMedis')) ? $request->getPost('inpmKeluhanUtamaMedis'): null,
				'riwayat_penyakit_sekarang' => !empty($request->getPost('inpmKeluhanSekarangMedis')) ? $request->getPost('inpmKeluhanSekarangMedis'): null,
				'riwayat_penyakit' => !empty($request->getPost('inpmKeluhanDahuluMedis')) ? $request->getPost('inpmKeluhanDahuluMedis'): null,
				'td' => !empty($request->getPost('inpmSistol')) ? $request->getPost('inpmSistol'): '',
				'hr' => !empty($request->getPost('inpmDiastole')) ? $request->getPost('inpmDiastole'): '',
				'suhu' => !empty($request->getPost('inpmSuhu')) ? $request->getPost('inpmSuhu'): '',
				'rr' => !empty($request->getPost('inpmNafas')) ? $request->getPost('inpmNafas'): '',
				'skor_nyeri' => '',
				'kfungsioinal' =>$inpmFKemampuan,
				'psk_muskuloskeletal' => !empty($request->getPost('inpmMedisMuskuloskeletal')) ? $request->getPost('inpmMedisMuskuloskeletal'): null,
				'psk_neuromuskuler' => !empty($request->getPost('inpmMedisNeuromuskuler')) ? $request->getPost('inpmMedisNeuromuskuler'): null,
				'psk_karfiopulmonal' => !empty($request->getPost('inpmMedisKardiopulmonalr')) ? $request->getPost('inpmMedisKardiopulmonalr'): null,
				'psk_integumen' => !empty($request->getPost('inpmMedisIntegumen')) ? $request->getPost('inpmMedisIntegumen'): null,
				'pk_muskuloskeletal' => !empty($request->getPost('inpmMedisPengukuranMuskuloskeletal')) ? $request->getPost('inpmMedisPengukuranMuskuloskeletal'): null,
				'pk_neuromuskuler' => !empty($request->getPost('inpmMedisPengukuranNeuromuskuler')) ? $request->getPost('inpmMedisPengukuranNeuromuskuler'): null,
				'pk_karfiopulmonal' => !empty($request->getPost('inpmMedisPengukuranKardiopulmonalr')) ? $request->getPost('inpmMedisPengukuranKardiopulmonalr'): null,
				'pk_integumen' => !empty($request->getPost('inpmMedisPengukuranIntegumen')) ? $request->getPost('inpmMedisPengukuranIntegumen'): null,
				'df_impairment' => !empty($request->getPost('inpmMedisDFImpairment')) ? $request->getPost('inpmMedisDFImpairment'): null,
				'df_limitation' => !empty($request->getPost('inpmMedisDFFunctional')) ? $request->getPost('inpmMedisDFFunctional'): null,
				'df_restriction' => !empty($request->getPost('inpmMedisDFParticipation')) ? $request->getPost('inpmMedisDFParticipation'): null,
				'rencana_terapi' => !empty($request->getPost('inpmMedisRencanaTerapi')) ? $request->getPost('inpmMedisRencanaTerapi'): null,
				'intervensi' => !empty($request->getPost('inpmMedisIntervensi')) ? $request->getPost('inpmMedisIntervensi'): null,
				'evaluasi' => !empty($request->getPost('inpmMedisEvaluasi')) ? $request->getPost('inpmMedisEvaluasi'): null,
				// 'id_user_medis' => !empty($request->getPost('inpPekerjaan')) ? $request->getPost('inpPekerjaan'): null,
				// 'updatedate' => !empty($request->getPost('inpPekerjaan')) ? $request->getPost('inpPekerjaan'): null,
			);

            $data_paket = array(
				'id_beli_paket' => !empty($request->getPost('inpmMedisPaket')) ? $request->getPost('inpmMedisPaket'): null,
			);

            // $inpkd_id = $request->getPost('inpm_id');
            $inpkd_id = !empty($request->getPost('inpm_id')) ? $request->getPost('inpm_id'): null;

            if(empty($inpkd_id)){
                // try {
                //     $user = $userModel->find($id);
                // } catch (\Exception $e) {
                //     die($e->getMessage());
                // }
                $data['id_user'] = $this->logged_in;
                $data['insertdate'] = date("Y-m-d H:i:s");

                try {
                    $resp['insert'] = $this->registrasi_medis_model->medis_add($data);

                    $data_paket['id_medis'] = $resp['insert'];
                    $data_paket['id_user_pendaftaran'] = $this->logged_in;
                    $data_paket['insertdate_pendaftaran'] = date("Y-m-d H:i:s");
                    $this->registrasi_medis_model->medis_monitoring_add($data_paket);

                    $resp['info'] = "new";
                    $resp['status'] = true;
                    $resp['msg'] = "Data berhasil di simpan!";
                    $resp['code'] = '200';
                } catch (\Exception $e) {
                    // die($e->getMessage());
                    $resp['status'] = false;
                    $resp['msg'] = $e->getMessage();
                    $resp['code'] = '200';
                }
            }else{
			    $cek_rm = $this->registrasi_medis_model->medis_by_id($inpkd_id);
                if((count($cek_rm)>0)){
                    $data_paket['id_medis'] = $cek_rm;
                    $data_paket['id_user'] = $this->logged_in;
                    $data_paket['insertdate'] = date("Y-m-d H:i:s");
                    $this->registrasi_medis_model->medis_monitoring_add($data_paket);


                    $resp['insert'] = $this->registrasi_medis_model->medis_update($inpkd_id, $data);	
                    $resp['info'] = "update";
                    $resp['status'] = true;
                    $resp['msg'] = "Data berhasil di update!";
                    $resp['code'] = '201';
                }else{
                    $resp['status'] = false;
                    $resp['msg'] = 'maaf, ada kesalahan di data';
                    $resp['code'] = '200';
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


    public function getloadtabelcari(){
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
		if ($is_ajax) {
			$rm = strtolower($request->getPost('crinpNoRM'));
			$dataInsKode =array(
                'norm' => !empty($rm) ? $rm: null,
			);
			$resp['data'] = $this->registrasi_medis_model->medis_cari($dataInsKode);
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


