<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Registrasi_pasien_model extends Model {
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function pasien_add($data){
        $query = $this->db->table('pasien')->insert($data);
        return  $this->db->insertID();
    }

    public function pasien_update($idm, $data){
        return $this->db->table('pasien')->update($data, ['id_pasien' => $idm]); 
    }

    public function pasien_by_rm($data){
        $query = $this->db->query("SELECT id_pasien as id, kode_rm as rm, nama as namap
            FROM pasien
            WHERE kode_rm = '".$data."'");
        return $query->getResult();
    }
    
    public function last_data_pasien(){
        $query = $this->db->query("SELECT id_pasien as id, kode_rm as rm, nama as namap
        FROM pasien
        ORDER BY id_pasien DESC
        LIMIT 1");
        return $query->getrow();
    }

    public function pasien_cari($data){
        $where = "";
        if (!empty($data['norm'])) {
			$where .= " AND lower(kode_rm) = '" .$data['norm']. "' ";
		}
        if (!empty($data['nama'])) {
			$where .= " AND LOWER(nama) LIKE '%".$data['nama']."%' ";
		}
        
        $query = $this->db->query("SELECT id_pasien, kode_rm, nama, alamat, tgl_lahir
        FROM pasien
        WHERE isaktif = '1'
        $where
        ORDER BY nama, kode_rm ASC");
        return $query->getResult();
    }

    public function pasien_ambilcari($data){
        $query = $this->db->query("SELECT DISTINCT *, DATE_FORMAT(tgl_lahir, '%d%m%Y') AS tgl_lahir_f
        FROM pasien
        WHERE isaktif = '1'
        AND id_pasien = '".$data['id']."'
        LIMIT 1");
       return $query->getrow();
    }
   
   
}