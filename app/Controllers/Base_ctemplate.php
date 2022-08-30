<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Base_ctemplate_model;

class Base_ctemplate extends BaseController {
    protected $base_ctemplate_model;
    protected $logged_in;
	protected $grup_in;

    public function __construct() {
        $this->base_ctemplate_model = new Base_ctemplate_model();

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

    public function pprofile(){
        $session = \Config\Services::session();
		$request = \Config\Services::request();
        $is_ajax = $request->isAJAX();
        $data = $request->getPost();
        if ($is_ajax) {
            if(empty($this->logged_in)){
                $resp['msg'] = $session->setFlashdata('info_ses', 'ada kesalahan, harap hunungi admin atau refresh halaman');
                return redirect()->to(site_url('/logout'));
            }
            $get_profile = $this->base_ctemplate_model->get_authprofile($this->logged_in);
            if(!empty($get_profile)){
                $resp['status'] = true;
				$resp['code'] = '200';
				$resp['data'] = $get_profile;
            }else{
                $resp['status'] = false;
				$resp['code'] = '404';
				$resp['message'] = 'Data Profile tidak di temukan';
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
