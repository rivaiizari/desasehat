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

        //    var_dump( $request->getPost());
        //    die();

           $nik = !empty($request->getPost('inpmNik')) ? $request->getPost('inpmNik'): null;
           if(empty($nik)){
                $resp['status'] = false;
                $resp['code'] = '204';
                $resp['message'] = 'Maaf Data NIK harus ada';
                return $this->response->setJSON($resp);
                die();
            }
            
            $data = array(
				// 'id_medis' =>  '1',
				// 'id_pasien' => !empty($request->getPost('inpbpjs')) ? $request->getPost('inpbpjs'): null,
				'nik' => $nik,
				'no_rm' => !empty($request->getPost('inpRM')) ? $request->getPost('inpRM'): null,

				'berat' => !empty($request->getPost('inpmBerat')) ? $request->getPost('inpmBerat'): null,
				'tinggi' => !empty($request->getPost('inpmTinggi')) ? $request->getPost('inpmTinggi'): null,
				'lingkar_perut' => !empty($request->getPost('inpmPerut')) ? $request->getPost('inpmPerut'): null,
				'suhu' => !empty($request->getPost('inpmSuhu')) ? $request->getPost('inpmSuhu'): null,
				'sistole' => !empty($request->getPost('inpmSistol')) ? $request->getPost('inpmSistol'): null,
				'diastole' => !empty($request->getPost('inpmDiastole')) ? $request->getPost('inpmDiastole'): null,
				'frek_nadi' => !empty($request->getPost('inpmNadi')) ? $request->getPost('inpmNadi'): null,
				'pernafasan' => !empty($request->getPost('inpmNafas')) ? $request->getPost('inpmNafas'): null,
				'lab_kolestrol' => !empty($request->getPost('inpmKolestrol')) ? $request->getPost('inpmKolestrol'): null,
				'lab_guladarah' => !empty($request->getPost('inpmGula')) ? $request->getPost('inpmGula'): null,
				'lab_asam_urat' => !empty($request->getPost('inpmAsamurat')) ? $request->getPost('inpmAsamurat'): null,
				
                'anamnesa' => !empty($request->getPost('inpmAnamnesis')) ? $request->getPost('inpmAnamnesis'): null,
				'keluhan_utama' => !empty($request->getPost('inpmKeluhanUtama')) ? $request->getPost('inpmKeluhanUtama'): null,
				'keluhan_tambahan' => !empty($request->getPost('inpmRiwayatPenyakit_now')) ? $request->getPost('inpmRiwayatPenyakit_now'): null,
				'riwayat_penyakit' => !empty($request->getPost('inpmRiwayatPenyakit')) ? $request->getPost('inpmRiwayatPenyakit'): null,
				'ro_hcl' => !empty($request->getPost('inpmObat_hct')) ? $request->getPost('inpmObat_hct'): null,
				'ro_captopril' => !empty($request->getPost('inpmObat_captopril')) ? $request->getPost('inpmObat_captopril'): null,
				'ro_valsarta' => !empty($request->getPost('inpmObat_valsarta')) ? $request->getPost('inpmObat_valsarta'): null,
				'ro_amlodipine' => !empty($request->getPost('inpmObat_amlodipine')) ? $request->getPost('inpmObat_amlodipine'): null,
				'ro_text' => !empty($request->getPost('inpmRiwayat_obat')) ? $request->getPost('inpmRiwayat_obat'): null,
				'riwayat_alergi' => !empty($request->getPost('inpmRiwayatAlergi')) ? $request->getPost('inpmRiwayatAlergi'): null,
				'riwayat_keluarga' => !empty($request->getPost('inpmRiwayatKeluarga')) ? $request->getPost('inpmRiwayatKeluarga'): null,

				// 'kode_faskes' => !empty($request->getPost('inpbpjs')) ? $request->getPost('inpbpjs'): null,
				'id_user' =>  $this->logged_in,
				'insertdate' =>  date("Y-m-d H:i:s"),
			);

            try {
                $resp['insert'] = $this->registrasi_medis_model->medis_add($data);	
                $resp['info'] = "new";
                $resp['status'] = true;
                $resp['msg'] = "Data berhasil di simpan!";
                $resp['code'] = '200';
            } catch (\Exception $e) {
                $resp['status'] = false;
                $resp['msg'] = $e->getMessage();
                $resp['code'] = '404';
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


