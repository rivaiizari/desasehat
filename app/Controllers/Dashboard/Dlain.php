<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Dlain extends BaseController {
    public function index(){
        return view('dashboard/dlain_view');
    }

    
}
