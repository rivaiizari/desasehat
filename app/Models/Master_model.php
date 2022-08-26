<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Master_model extends Model {

    protected $logged_in;
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
        // $builder = $db->table('ci_users');

        if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in'])) {
            $this->logged_in = $_SESSION['logged_in'];
        }else{
            $this->logged_in = '';
        }
    }

    public function getNavMenuTemplate($id = false){
        $query = $this->db->query('SELECT m.*
        ,CASE
            WHEN (SELECT COUNT(*) FROM menu mu WHERE mu.menu_parent = m.id_menu  AND mu.isaktif = 1) >= 1 THEN 1
            WHEN m.menu_parent IS NULL THEN 0
            ELSE 1
        END AS has_cild
        FROM menu m
        INNER JOIN menu_profile mp ON mp.id_menu = m.id_menu
        INNER JOIN users_profile up ON mp.id_profile = up.id_profile
        WHERE up.id_user = '.$this->logged_in.'
        AND menu_parent IS NULL
	    AND m.isaktif = 1
        AND mp.isaktif = 1
        ORDER BY menu_urut, menu_parent, menu_text ASC');
        return $query->getResultArray();
    }

    public function getAllPekerjaan($id = false){
        $query = $this->db->query('select id_pekerjaan, nama from pekerjaan where isaktif="1" ORDER BY nama ASC');
        return $query->getResult();
    }

    public function getAllPernikahan($id = false){
        $query = $this->db->query("SELECT id_pernikahan AS id, nama
        FROM pernikahan
        WHERE isaktif = '1' ORDER BY nama ASC");
        return $query->getResult();
    }

    public function getAllTerapis(){
        $query = $this->db->query("SELECT up.nama AS nama, up.id_user as id
        FROM users us
        JOIN users_profile up ON us.id = up.id_user
        JOIN profile p ON up.id_profile = p.id_profile
        WHERE p.isdokter = '1'
        AND us.active = '1'
        AND us.status = '1'
        ORDER BY nama ASC");
        return $query->getResult();
    }

    public function getAllFKemampuan(){
        $query = $this->db->query("SELECT nama_ref AS nama, value_ref AS id
        FROM ref_medis_form
        WHERE isaktif = '1'
        AND jenis = 'jmkfungsonal'
        ORDER BY urut ASC");
        return $query->getResult();
    }

    public function getAllAnamnesis(){
        $query = $this->db->query("SELECT nama_ref AS nama, value_ref AS id
        FROM ref_medis_form
        WHERE isaktif = '1'
        AND jenis = 'janamnesis'
        ORDER BY urut ASC");
        return $query->getResult();
    }

    public function getAllPaket_periksa(){
        $query = $this->db->query("SELECT id_paket AS id, nama_paket AS nama, pertemuan, harga
        FROM harga_paket_layanan
        WHERE isaktif ='1'
        AND DATE(NOW()) BETWEEN DATE(tgl_berlaku) AND DATE(tgl_akhir)");
        return $query->getResult();
    }

    public function getAllPaket_jenisbayar(){
        $query = $this->db->query("SELECT value_ref AS id, nama_ref AS nama
        FROM ref_medis_form
        WHERE isaktif = '1'
        AND jenis = 'jpaket'
        ORDER BY urut ASC");
        return $query->getResult();
    }

    public function getAllRef_medis_form($jenis, $isaktif){
        // all = semua, aktif = 1,tidak aktif = 0
        $where = "";
        if($isaktif == 'all'){
            $where = "";
        }else if($isaktif == 'tidak'){
            $where = "isaktif = '0'";
        }else{
            $where = "isaktif = '1'";
        }

        $query = $this->db->query("SELECT value_ref AS id, nama_ref AS nama
        FROM ref_medis_form
        WHERE jenis IS NOT NULL
        AND jenis = '".$jenis."'
        $where
        ORDER BY urut ASC");
        return $query->getResult();
    }






    
    public function getAllPropinsi($id = false){
        $query = $this->db->query('select id_propinsi, nama from propinsi where isaktif = "1"');
        return $query->getResult();
    } 

    public function getProvinsi_by_idu($id = false){
        $query = $this->db->query("SELECT IFNULL(f.id_propinsi, 0) AS id_propinsi
        FROM users_profile up
        JOIN faskes f ON f.kode_faskes = up.kode_faskes
        LEFT JOIN users us ON us.id = up.id_user
        WHERE us.active = 1
        AND up.id_user = $id");
        return $query->getResultArray();
    } 

    public function getNavMenuTemplateAll($id = false){
        $query = $this->db->query('SELECT m.*
        ,CASE
            WHEN (SELECT COUNT(*) FROM menu mu WHERE mu.menu_parent = m.id_menu) >= 1 THEN 1
            WHEN m.menu_parent IS NULL THEN 0
            ELSE 1
        END AS has_cild
        FROM menu m
        INNER JOIN menu_profile mp ON mp.id_menu = m.id_menu
        INNER JOIN users_profile up ON mp.id_profile = up.id_profile
        WHERE up.id_user = '.$this->logged_in.'
	AND m.isaktif = 1
        ORDER BY menu_urut ASC');
        return $query->getResultArray();
    }

    public function getNavSubMenuTemplate($id = false){
        $query = $this->db->query('SELECT m.*
        FROM menu m
        INNER JOIN menu_profile mp ON mp.id_menu = m.id_menu
        INNER JOIN users_profile up ON mp.id_profile = up.id_profile
        WHERE up.id_user = '.$this->logged_in.'
        AND m.menu_parent = '.$id.'
	    AND m.isaktif = 1
        AND mp.isaktif = 1
        ORDER BY menu_urut, menu_text ASC');
        return $query->getResultArray();
    }

    public function getAllFaskes($id = false){
        $query = $this->db->query('SELECT fs.kode_faskes, fs.nama AS nama_f, p.nama AS nama_p FROM faskes fs LEFT JOIN propinsi p ON p.id_propinsi = fs.id_propinsi WHERE fs.isaktif = 1 ORDER BY nama_p, nama_f ASC');
        return $query->getResult();
    }
    public function getAllFaskesid($id = false){
        $query = $this->db->query("SELECT fs.kode_faskes, fs.nama AS nama_f, p.nama AS nama_p, fs.type as type FROM faskes fs LEFT JOIN propinsi p ON p.id_propinsi = fs.id_propinsi WHERE fs.isaktif = 1 AND fs.kode_faskes = '$id' ORDER BY nama_p, nama_f ASC");
        return $query->getResult();
    }

    public function getAllSpesialis($id = false){
        $query = $this->db->query("SELECT id_spesialisasi, nama,
            CASE
                WHEN jenis = 1 THEN 'konsultasi'
                WHEN jenis = 2 THEN 'expertise'
                ELSE '-'
            END AS jenis
            FROM spesialisasi
            WHERE isaktif = 1
            AND jenis = 1
            AND parent IS NULL
            ORDER BY nama ASC");
        return $query->getResult();
    }

    public function getAllSpesialisExpertise($id = false){
        $query = $this->db->query("SELECT id_spesialisasi, nama,
            CASE
                WHEN jenis = 1 THEN 'konsultasi'
                WHEN jenis = 2 THEN 'expertise'
                ELSE '-'
            END AS jenis
            FROM spesialisasi
            WHERE isaktif = 1
            AND jenis = 2
            AND parent IS NULL
            ORDER BY nama ASC");
        return $query->getResult();
    }
    
    public function getcek_faskes($id = false){
        $query = $this->db->query("SELECT type,
            CASE
            WHEN type = 1 THEN 'Rumah Sakit'
            WHEN type = 2 THEN 'Puskesmas'
            WHEN type = 3 THEN 'Klinik'
            ELSE '0'
            END AS nama_type
            FROM faskes
        WHERE kode_faskes = $id");
        return $query->getResultArray();
    }

    public function getAllProfile($id = false){
        $where = "";
        if (isset($id)) {
            if(!empty($id)){
                $where = "AND (id_profile = $id || id_profile = 5 ) ";
            }
		}
        $query = $this->db->query("SELECT id_profile, nama_profile as nama
            FROM profile
            WHERE isaktif = 1
            $where
            ORDER BY nama_profile ASC");
        return $query->getResult();
    } 




    public function get_isdokter_byid($id = false){
        $query = $this->db->query("SELECT up.id_user, pf.isdokter, pf.isnakes
        FROM users_profile up
        JOIN users us ON up.id_user = us.id
        JOIN PROFILE pf ON up.id_profile = pf.id_profile
        WHERE us.id = '1'
        AND pf.isaktif = '1'
        AND up.id_user = '".$id."'");
        return $query->getRow();
    } 
  
}