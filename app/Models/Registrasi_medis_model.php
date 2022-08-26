<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Registrasi_medis_model extends Model {
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function medis_add($data){
        $query = $this->db->table('medis')->insert($data);
        return  $this->db->insertID();
    }

}