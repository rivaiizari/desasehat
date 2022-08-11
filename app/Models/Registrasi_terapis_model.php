<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Registrasi_terapis_model extends Model {
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function data_add($data){
        $query = $this->db->table('pasien_registrasi')->insert($data);
        return  $this->db->insertID();
    }

    public function tabel_cari($data){
        $where_awal = "";
        $where_akhir = "";
        if (!empty($data['tgl_awal'])) {
			$where_awal = "DATE('".$data['tgl_awal']."')";
		}else{
			$where_awal = "DATE(CURDATE())";
        }
        if (!empty($data['tgl_akhir'])) {
			$where_akhir = "DATE('".$data['tgl_akhir']."')";
		}else{
            $where_akhir = "DATE_ADD(CURDATE(), INTERVAL 10 DAY)";
        }
        
        $query = $this->db->query("SELECT p.kode_rm, p.nama, pr.tgl_periksa, pr.status
        FROM pasien_registrasi pr
        JOIN medis m ON m.id_medis = pr.id_medis
        JOIN pasien p ON p.kode_rm = m.kode_rm
        WHERE (DATE(pr.tgl_periksa) BETWEEN ".$where_awal." AND ".$where_akhir.")");
        return $query->getResult();
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

    

    public function pasien_ambilcari($data){
        $query = $this->db->query("SELECT DISTINCT * 
        FROM pasien
        WHERE isaktif = '1'
        AND id_pasien = '".$data['id']."'
        LIMIT 1");
       return $query->getrow();
    }
   
   
}