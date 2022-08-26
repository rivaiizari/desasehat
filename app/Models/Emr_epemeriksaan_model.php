<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Emr_epemeriksaan_model extends Model {
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function medis_add($data){
        $query = $this->db->table('medis')->insert($data);
        return  $this->db->insertID();
    }

    public function getloadtabel($data = false){
        $where = "";
        if(!empty($data['isdokter'])){
            if($data['isdokter'] == '1'){
                $where .= "AND m.status != '6'";
            }
        }
       
        $query = $this->db->query("SELECT p.nama AS nama_pasien, TIMESTAMPDIFF(YEAR, p.tgl_lahir, CURDATE()) AS umur
        ,m.id_medis AS id ,m.insertdate AS tdl_daftar
        ,CASE 
            WHEN m.status = '5' THEN 'Selesai'
            WHEN m.status = '4' THEN 'Pengambilan Obat'
            WHEN m.status = '3' THEN 'Menunggu Obat'
            WHEN m.status = '2' THEN 'batal pendaftaran'
            WHEN m.status = '1' THEN 'Menunggu Pemeriksaan'
            ELSE '-'
        END AS status_pemeriksaan
        ,m.status AS statusp
        FROM medis m
        JOIN pasien p ON p.nik = m.nik
        LEFT JOIN expertise e ON e.id_medis = m.id_medis
        WHERE m.deleted_at IS NULL
        $where
        ORDER BY m.insertdate DESC");
        return $query->getResultArray();
    }
   
    public function m_pbatal($idm, $data){
        // $this->db->transBegin();

        // if ($this->db->transStatus() === false) {
        //     $this->db->transRollback();
        //     return false;
        // } else {
        //     $this->db->transCommit();
        //     return true;
        // }
        return $this->db->table('medis')->update($data, ['id_medis' => $idm]);
    }

    public function m_getmedis_detail($data = false){
        $where = "";
        if(!empty($data['id'])){
            // $where .= "AND m.status != '6'";
        }
       
        $query = $this->db->query("SELECT p.nama AS nama_pasien, TIMESTAMPDIFF(YEAR, p.tgl_lahir, CURDATE()) AS umur
        ,m.insertdate AS tdl_daftar, m.*
        ,e.pemeriksaan AS e_pemeriksaan, e.obat AS e_obat
        FROM medis m
        JOIN pasien p ON p.nik = m.nik
        LEFT JOIN expertise e ON e.id_medis = m.id_medis
        WHERE m.deleted_at IS NULL
        AND m.id_medis = '".$data['id']."'");
        return $query->getRow();
    }

    public function m_getmedis_penginput($data = false){
        $where = "";
        if(!empty($data['id'])){
            // $where .= "AND m.status != '6'";
        }
       
        $query = $this->db->query("SELECT pf.nama_profile
        ,m.insertdate AS tdl_daftar
        ,lp.nama AS nama_profinsi
        ,lkb.nama AS nama_kabkota
        ,lkc.nama AS nama_kecamatan
        ,lke.nama AS nama_kelurahan
        FROM medis m
        JOIN users_profile up ON up.id_user = m.id_user
        JOIN PROFILE pf ON pf.id_profile = up.id_profile
        LEFT JOIN propinsi lp ON lp.id_propinsi = up.id_propinsi
        LEFT JOIN kabkota lkb ON lkb.id_kabkota = up.id_kabkota
        LEFT JOIN kecamatan lkc ON lkc.id_kecamatan = up.id_kecamatan
        LEFT JOIN kelurahan lke ON lke.id_kelurahan = up.id_kelurahan
        WHERE m.deleted_at IS NULL
        AND m.id_medis = '".$data['id']."'");
        return $query->getRow();
    }
}