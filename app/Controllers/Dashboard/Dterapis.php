<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Dterapis extends BaseController {
    public function index(){
        return view('dashboard/dterapis_view');
    }

    
}
