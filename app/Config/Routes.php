<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$grup = '';

if (session()->get('logged_in')) {
	$session = session();
	$session_param = $session->get();
	$grup = $session_param['grup'];

    // 1  terapis       1        1         
    // 2  admin         1        0         
    // 3  masteradmin   1        0         
    // 8  pemilik       1        1     

    if(!empty($grup = 1)){
        $routes->get('/', 'Dashboard\Dterapis::index');
    }else if(!empty($grup = 2)){

    }else{
        $routes->get('/', 'Dashboard\Dlain::index');
    }
}else{
    $routes->get('/', 'Home::index');
}

$routes->group('dashboard', ['filter' => 'filterakses:1'], function ($routes) {
// $routes->group('dashboard', function ($routes) {
    // 1  terapis       1        1         
    // 2  admin         1        0         
    // 3  masteradmin   1        0         
    // 8  pemilik       1        1     

    if(!empty($grup = 1)){
        $routes->get('/', 'Dashboard\Dterapis::index');
    }else if(!empty($grup = 2)){

    }else{
        $routes->get('/', 'Dashboard\Dlain::index');
    }
});


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('home', function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('template', 'Home::template');
	$routes->post('pendaftaran', 'Home::pendaftaran');
});
$routes->group('harga', function ($routes) {
    $routes->get('/', 'Harga::index');
    $routes->get('detail', 'Harga::detail');
	$routes->post('csession_auth', 'Gfaplication\Gauth::getcsession_auth');
});


$routes->group('registrasi', ['filter' => 'filterakses:2'], function ($routes) {
    $routes->get('/', 'Registrasi/Rpasien::index');
    $routes->get('terapis', 'Dashboard\Dterapis::index');

    $routes->group('pasien', function ($routes) {
        $routes->post('tsave', 'Registrasi\Rpasien::ajax_cek_save_pasien');
        $routes->post('save', 'Registrasi\Rpasien::save');
        $routes->post('gen', 'Registrasi\Rpasien::genKodeRM');
        $routes->post('loadtabelcari', 'Registrasi\Rpasien::getloadtabelcari');
        $routes->post('ambilpasien', 'Registrasi\Rpasien::getambilpasien');
    });

    $routes->group('medis', function ($routes) {
        $routes->post('save', 'Registrasi\Rmedis::save');
    });

    $routes->post('kabupaten', 'Master_modul::getAllKabKota');
	$routes->post('kecamatan', 'Master_modul::getAllKecamatan');
	$routes->post('kelurahan', 'Master_modul::getAllKelurahan');
	//inj langsung
	$routes->post('kabupateninj', 'Master_modul::getAllKabKota_inj');
	$routes->post('kecamataninj', 'Master_modul::getAllKecamatan_inj');
	$routes->post('kelurahaninj', 'Master_modul::getAllKelurahan_inj');
});

$routes->group('pemeriksaan', ['filter' => 'filterakses:3'], function ($routes) {
    $routes->get('/', 'Emr\Epemeriksaan::index');
    $routes->post('loadtabel', 'Emr\Epemeriksaan::loadtabel');
    $routes->post('batal', 'Emr\Epemeriksaan::pbatal');
    $routes->post('save', 'Emr\Epemeriksaan::psave');
    $routes->get('periksa_dokter/(:num)', 'Emr\Epemeriksaan::pperiksa_dokter/$1');
});



// $routes->group('pemeriksaan', function ($routes) {
//     $routes->get('/', 'Dashboard\Dlain::index');
//     $routes->get('terapis', 'Dashboard\Dterapis::index');
// });

$routes->group('pemeriksaan_', function ($routes) {
    $routes->get('/', 'Dashboard\Dlain::index');
    $routes->get('terapis', 'Dashboard\Dterapis::index');
});

// $routes->group('dashboard', ['filter' => 'filterakses:29'], function ($routes) {
//     if(!empty($grup)){
//         $routes->get('/', 'Dashboard\Dlain::index');

//     }else{

//     }
// });

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
