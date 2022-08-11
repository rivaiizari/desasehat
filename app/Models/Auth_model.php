<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Auth_model extends Model {
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function cek_auth_akses($id = false){
        $query = $this->db->query("SELECT up.*
        FROM users u
        JOIN users_profile up ON u.id = up.id_user
        WHERE active = '1'
        AND status = '1'
        AND u.id = '".$id."'");
        return $query->getRowArray();
    }
    
    public function auth_akses($id = false, $idp = false){
        $query = $this->db->query("SELECT mp.isaktif
            FROM menu_profile mp
            LEFT JOIN menu mn ON mp.id_menu = mn.id_menu
            WHERE mp.id_profile = $id
            AND mp.id_menu = $idp
            AND mn.isaktif  = 1 ");
        return $query->getResultArray();
    }
}