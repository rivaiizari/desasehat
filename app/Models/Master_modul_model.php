<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Master_modul_model extends Model {
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function getAllPropinsi($id = false){
        $query = $this->db->query("select id_propinsi, nama from propinsi where isaktif = '1'");
        return $query->getResult();
    } 

    public function getDataAllKabKota($id = false){
        $query = $this->db->query("select id_kabkota, nama from kabkota where isaktif = '1' AND id_propinsi= '".$id."'");
        return $query->getResult();
    } 

    public function getDataAllKecamatan($id = false){
        $query = $this->db->query("select id_kecamatan, nama from kecamatan where isaktif = '1' AND id_kabkota= '".$id."'");
        return $query->getResult();
    } 

    public function getDataAllKelurahan($id = false){
        $query = $this->db->query("select id_kelurahan, nama from kelurahan where isaktif = '1' AND id_kecamatan= '".$id."'");
        return $query->getResult();
    }
    // inj alamat
    public function getDataAllKabKota_inj($id = false){
        $query = $this->db->query("select id_kabkota, nama from kabkota where isaktif = '1' AND id_kabkota LIKE '".$id."%'");
        return $query->getResult();
    } 
    public function getDataAllKecamatan_inj($id = false){
        $query = $this->db->query("select id_kecamatan, nama from kecamatan where isaktif = '1' AND id_kecamatan LIKE '".$id."%'");
        return $query->getResult();
    } 
    public function getDataAllKelurahan_inj($id = false){
        $query = $this->db->query("select id_kelurahan, nama from kelurahan where isaktif = '1' AND id_kelurahan LIKE '".$id."%'");
        return $query->getResult();
    }

    public function get_isdokter_byid($id = false){
        $query = $this->db->query("SELECT up.id_user, pf.isdokter, pf.isnakes, pf.isapotik
        FROM users_profile up
        JOIN users us ON up.id_user = us.id
        JOIN profile pf ON up.id_profile = pf.id_profile
        WHERE up.id_profile IS NOT NULL
        AND pf.isaktif = '1'
        AND up.id_user = '".$id."'");
        return $query->getRow();
    } 

   
}