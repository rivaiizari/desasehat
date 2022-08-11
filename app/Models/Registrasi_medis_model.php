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

    public function medis_update($idm, $data){
        return $this->db->table('medis')->update($data, ['id_medis' => $idm]); 
    }

    public function medis_by_id($data){
        $query = $this->db->query("SELECT id_medis AS id, kode_rm AS rm
        FROM medis
        WHERE id_medis  = '".$data."'");
        return $query->getResult();
    }
    
    public function medis_cari($data){
        $where = "";
        if (!empty($data['norm'])) {
			$where .= " AND lower(p.kode_rm) = lower('" .$data['norm']. "') ";
		}
        $query = $this->db->query("SELECT d1.*
        FROM (
            SELECT p.nama AS namap, m.*, pr.tgl_periksa AS tgl_periksa, pr.status AS status_periksa
            ,CASE
                WHEN pr.status = '0' THEN 'batal'
                WHEN pr.status = '1' THEN 'registrasi'
                WHEN pr.status = '2' THEN 'periksa'
                WHEN pr.status = '3' THEN 'selesai'
            END AS status_text
            FROM medis m
            JOIN pasien p ON m.kode_rm = p.kode_rm
            LEFT JOIN pasien_registrasi pr ON pr.id_medis = m.id_medis
            WHERE pr.status !='0'
            $where
            
            UNION
            
            SELECT p.nama AS namap, m.*, DATE(m.insertdate) AS tgl_periksa, '99' AS status_periksa, 'unregistrasi' AS status_text
            FROM medis m
            JOIN pasien p ON m.kode_rm = p.kode_rm
            LEFT JOIN pasien_registrasi pr ON (pr.id_medis = m.id_medis) AND (pr.id_registrasi IS NULL) AND (pr.status !='0')
            WHERE m.isaktif != '0'
            $where
        )d1
        ORDER BY d1.tgl_periksa ASC");
        return $query->getResult();
    }

    public function medis_ambilcari($data){
        $query = $this->db->query("SELECT DISTINCT * 
        FROM pasien
        WHERE isaktif = '1'
        AND id_pasien = '1'
        LIMIT 1");
       return $query->getrow();
    }

    public function gpaket_medis($data){
        $query = $this->db->query("SELECT id_paket, pertemuan
        FROM harga_paket_layanan
        WHERE id_paket = '" .$data['id_paket']. "'
        LIMIT 1");
       return $query->getrow();
    }





    public function medis_monitoring_add($data){
        $query = $this->db->table('medis_monitoring')->insert($data);
        return  $this->db->insertID();
    }
   
   
}