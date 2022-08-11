<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Registrasi_paket_model extends Model {
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function data_add($data){
        $query = $this->db->table('pembelian_paket')->insert($data);
        return  $this->db->insertID();
    }

    public function data_update($idm, $data){
        return $this->db->table('pembelian_paket')->update($data, ['id_beli_paket' => $idm]); 
    }

    public function tabel_cari($data){
        $where = "";
        if (!empty($data['norm'])) {
			$where = "AND LOWER(pp.kode_rm) = LOWER('".$data['norm']."')";
		}	
        
        $query = $this->db->query("SELECT pp.*, hpl.nama_paket, hpl.harga, p.nama AS namap, DATE_FORMAT(pp.insertdate, '%d-%m-%Y') AS tgl_daftar
        FROM pembelian_paket pp
        JOIN harga_paket_layanan hpl ON hpl.id_paket = pp.id_paket
        JOIN pasien p ON LOWER(p.kode_rm) = LOWER(pp.kode_rm)
        WHERE pp.isaktif = '1'
        $where
        ORDER BY pp.id_beli_paket DESC");
        return $query->getResult();
    }

    public function get_ambilcari($data){
        $query = $this->db->query("SELECT pp.id_beli_paket, pp.id_paket, pp.status_bayar, pp.jenis_bayar, COUNT(mm.id_monitoring) jml
        FROM pembelian_paket pp
        LEFT JOIN medis_monitoring mm ON pp.id_beli_paket = mm.id_beli_paket 
        WHERE pp.isaktif = '1'
        AND pp.id_beli_paket = '".$data['id']."'
        GROUP BY pp.id_beli_paket, pp.id_paket, pp.status_bayar
        LIMIT 1");
       return $query->getrow();
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

    

   
   
   
}