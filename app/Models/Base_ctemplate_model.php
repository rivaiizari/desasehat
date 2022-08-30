<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Base_ctemplate_model extends Model {

    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function get_authprofile($id = false){
        $query = $this->db->query("SELECT up.nama AS nama_users, pf.nama_profile
        ,CASE
           WHEN up.id_profile = '1' THEN CONCAT( lkb.nama, ' - ',lkc.nama, ' - ', lke.nama)
           ELSE lkb.nama
       END AS alamat
       FROM users_profile up
       JOIN users us ON us.id = up.id_user
       LEFT JOIN profile pf ON up.id_profile = pf.id_profile
       LEFT JOIN propinsi lp ON lp.id_propinsi = up.id_propinsi
       LEFT JOIN kabkota lkb ON lkb.id_kabkota = up.id_kabkota
       LEFT JOIN kecamatan lkc ON lkc.id_kecamatan = up.id_kecamatan
       LEFT JOIN kelurahan lke ON lke.id_kelurahan = up.id_kelurahan
       WHERE up.id_profile IS NOT NULL
       AND up.id_user = '".$id."'
       LIMIT 1");
        return $query->getRow();
    }

}