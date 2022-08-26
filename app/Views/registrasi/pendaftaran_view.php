<?= $this->extend('layout/template')?>
<?= $this->section('content'); ?>

<!-- daterange picker -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/daterangepicker/daterangepicker.css" />
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/select2/css/select2.min.css" />
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets/plugins/bs-stepper/bs-stepper.min.css" />
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets/plugins/bs-stepper/all.css" />
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->

<!-- dropzonejs -->
<link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/dropzone/min/dropzone.min.css" />
<style type="text/css">
    .hrmBlue {
        margin-top: 0rem;
        /* margin-bottom: 1rem; */
        border: 0;
        border-top: 0px solid rgba(0,0,0,.1);
        border-top-width: 3px;
        border-top-style: solid;
        border-top-color: #17a2b8;
    }

    .card-header-head-spas{
        padding: .3rem 1.25rem;
    }
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pendaftaran Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pendaftaran</a></li>
                    <li class="breadcrumb-item active">Form</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body p-0">
                    <!-- <h3>Linear stepper</h3> -->
                    <div id="stepper1" class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#test-l-1">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1">
                                    <span class="bs-stepper-circle fas fa-user"></span>
                                    <span class="bs-stepper-label">Paiens</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-2">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2">
                                    <span class="bs-stepper-circle fas fa-save"></span>
                                    <span class="bs-stepper-label">Medis</span>
                                </button>
                            </div>
                        </div>
                        <hr class="hrmBlue">
                        <div class="bs-stepper-content">
                            <div id="test-l-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                                            <button class="btn btn btn-warning fw-bold float-right" id="btnModalCariP" data-toggle="modal" data-target="#modal-xl-caripasien" data-backdrop="static" style="min-width:150px; "><i class="fa fa-search"></i> Cari <span class="d-none d-sm-inline-block"> Pasien</span></button>
                                            <button type="button" class="btn btn-info" onClick="newpasien()">Add Pasien Baru</button>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                                <form id="form_dpasien" class="form-horizontal" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="input" class="form-control" id="inp_idpasien" name="inp_idpasien" placeholder="id pasien">
                                            <div class="form-group row">
                                                <label for="inpnik" class="col-sm-3 col-form-label text-lg-right text-sm-left">NIK <span class="required-label">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inpnik" name="inpnik" placeholder="NIK" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpbpjs" class="col-sm-3 col-form-label text-lg-right text-sm-left">No BPJS</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inpbpjs" name="inpbpjs" placeholder="no bpjs" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpRM" class="col-sm-3 col-form-label text-lg-right text-sm-left">Rekam Medis</label>
                                                <div class="col-sm-9">
                                                    <input type="input" class="form-control" id="inpRM" name="inpRM" placeholder="no rm" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpNama" class="col-sm-3 col-form-label text-lg-right text-sm-left">Nama <span class="required-label">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inpNama" name="inpNama" placeholder="Nama Pasien" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inp_tgl_lahir" class="col-sm-3 col-form-label text-lg-right text-sm-left">Tanggal Lahir <span class="required-label">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="inp_tgl_lahir" name="inp_tgl_lahir" data-inputmask-alias="datetime" data-inputmask-inputFormat="dd/mm/yyyy" required autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpJK" class="col-sm-3 col-form-label text-lg-right text-sm-left">Jenis Kelamin<span class="required-label"> *</span></label>
                                                <div class="col-sm-9">
                                                    <div class="form-check icheck-primary form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inpJK" id="inpJKLaki" value="1">
                                                        <label class="form-check-label" for="inpJKLaki">Laki-Laki</label>
                                                    </div>
                                                    <div class="form-check icheck-primary form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inpJK" id="inpJKPerempuan" value="2">
                                                        <label class="form-check-label" for="inpJKPerempuan">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpPhone" class="col-sm-3 col-form-label text-lg-right text-sm-left">No WA</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inpPhone" name="inpPhone" autocomplete="off" data-inputmask='"mask": "99999999999999"' data-mask />
                                                </div>
                                            </div>                            
                                            <div class="form-group row">
                                                <label for="inpVaksinasi" class="col-sm-3 col-form-label text-lg-right text-sm-left">Vaksinasi </label>
                                                <div class="col-sm-9">
                                                    <?php showDropdownVaksinasi( $attribut = 'id="inpVaksinasi" name="inpVaksinasi" class="form-control select2bs4" style="width: 100%" '); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="inpAgama" class="col-sm-3 col-form-label text-lg-right text-sm-left">Agama</label>
                                                <div class="col-sm-9">
                                                    <?php showDropdownAgama( $attribut = 'id="inpAgama" name="inpAgama" class="form-control select2bs4" style="width: 100%" '); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpPernikahan" class="col-sm-3 col-form-label text-lg-right text-sm-left">Pernikahan <span class="required-label"> *</span></label>
                                                <div class="col-sm-9">
                                                    <?php showDropdownPernikahan( $attribut = 'id="inpPernikahan" name="inpPernikahan" class="form-control select2bs4" style="width: 100%" '); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpPekerjaan" class="col-sm-3 col-form-label text-lg-right text-sm-left">Pekerjaan </label>
                                                <div class="col-sm-9">
                                                    <?php showDropdownPekerjaan( $attribut = 'id="inpPekerjaan" name="inpPekerjaan" class="form-control select2bs4" style="width: 100%" '); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpAlamat" class="col-sm-3 col-form-label text-lg-right text-sm-left">Alamat Domisili <span class="required-label"> *</span></label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control"  id="inpAlamat" name="inpAlamat" cols="30" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpRefProponsi" class="col-sm-3 col-form-label text-lg-right text-sm-left">Provinsi <span class="required-label">*</span></label>
                                                <div class="col-sm-9">
                                                    <?php showDropdownPropinsi( $attribut = 'id="inpRefProponsi" name="inpRefProponsi" class="form-control select2bs4" style="width: 100%" required onchange="ddKabKota()"'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpKabupaten" class="col-sm-3 col-form-label text-lg-right text-sm-left">Kabupaten/Kota <span class="required-label">*</span></label>
                                                <div class="col-sm-9">
                                                    <select id="inpKabupaten" name="inpKabupaten" class="form-control select2bs4" style="width: 100%"  required disabled onchange="ddKecamatan()">
                                                        <option value="" >&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpKecamatan" class="col-sm-3 col-form-label text-lg-right text-sm-left">Kecamatan </label>
                                                <div class="col-sm-9">
                                                    <select id="inpKecamatan" name="inpKecamatan" class="form-control select2bs4" style="width: 100%" disabled onchange="ddKelurahan()">
                                                        <option value="" >&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inpKelurahan" class="col-sm-3 col-form-label text-lg-right text-sm-left">Kelurahan </label>
                                                <div class="col-sm-9">
                                                    <select id="inpKelurahan" name="inpKelurahan" class="form-control select2bs4" style="width: 100%" disabled>
                                                        <option value="" >&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-next btn-success fw-bold float-right" id="btnNextPasien" name="btnNextPasien" value="Selanjutnya" >
                                    <br>
                                    <br>
                                    <!-- <button class="btn btn-primary float-right" onclick="stepper1.next()">Next</button> -->
                                </form>
                            </div>
                            <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                                            <button class="btn btn btn-warning fw-bold float-right" id="btnModalCariPaket" data-toggle="modal" onClick="cari_hpaket()" data-backdrop="static" style="min-width:150px; "><i class="fa fa-search"></i> Histori <span class="d-none d-sm-inline-block"> Paket</span></button>
                                            <button type="button" class="btn btn-info" onClick="newpaket()">Add Paket Baru</button>
                                        </div>
                                        <br><br>
                                    </div>
                                </div> -->
                                <form id="form_dmedis" class="form-horizontal" novalidate>
                                    
                                    <h4 class="text-section">Pemeriksaan Fisik Tanda Vital:</h4>
                                    <hr class="hrm">
                                    <div class="form-group row">
                                        <label for="inpmTinggi" class="col-sm-3 col-form-label text-lg-right text-sm-left">Tinggi/Berat Badan <span class="required-label"></span></label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmTinggi" name="inpmTinggi" placeholder="Tinggi" data-inputmask-regex="[0-9.]{5}" autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>cm</span>  
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control"  id="inpmBerat" name="inpmBerat" placeholder="Berat" data-inputmask-regex="[0-9.]{5}" autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>Kg</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmPerut" class="col-sm-3 col-form-label text-lg-right text-sm-left">Lingkar Perut </label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmPerut" name="inpmPerut" placeholder="Lingkar perut" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> cm</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmSuhu" class="col-sm-3 col-form-label text-lg-right text-sm-left">Suhu <span class="required-label">*</span> </label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmSuhu" name="inpmSuhu" placeholder="Suhu dalam Celcius" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> &#176;C</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmDiastole" class="col-sm-3 col-form-label text-lg-right text-sm-left">Tekanan Darah <span class="required-label">*</span></label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmSistol" name="inpmSistol" placeholder="Sistole" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>mm/Hg</span>  
                                                        <!-- <i class=" fa fa-italic"></i> -->
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control"  id="inpmDiastole" name="inpmDiastole" placeholder="Diastole" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>mm/Hg</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmNadi" class="col-sm-3 col-form-label text-lg-right text-sm-left">Frekuensi Nadi <span class="required-label">*</span> </label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmNadi" name="inpmNadi" placeholder=" kali per menit" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> x/menit</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmNafas" class="col-sm-3 col-form-label text-lg-right text-sm-left">Pernafasan <span class="required-label">*</span> </label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmNafas" name="inpmNafas" placeholder="pernafasan" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> x/menit</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmKolestrol" class="col-sm-3 col-form-label text-lg-right text-sm-left">Pemeriksaan Laboratorium</span></label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmKolestrol" name="inpmKolestrol" placeholder="Kolesterol" data-inputmask-regex="[0-9.]{5}" autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>mg/dL</span>  
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control"  id="inpmGula" name="inpmGula" placeholder="Gula Darah" data-inputmask-regex="[0-9.]{5}" autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>mg/dL</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmAsamurat" class="col-sm-3 col-form-label text-lg-right text-sm-left"></label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmAsamurat" name="inpmAsamurat" placeholder="Asam Urat" data-inputmask-regex="[0-9.]{5}" autocomplete="off">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>mg/dL</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <h4 class="text-section">ANAMNESA DAN PEMERIKSAAN :</h4>
                                    <div class="form-group row">
                                        <label for="inpmMedisAnamnesis" class="col-sm-3 col-form-label text-lg-right text-sm-left">Anamnesa <span class="required-label">*</span></label>
                                        <div class="col-sm-6">
                                            <?php //showDropdownAnamnesis( $attribut = 'id="inpmMedisAnamnesis" name="inpmMedisAnamnesis" class="custom-control-input" style="width: 100%" '); ?>
                                            <textarea class="form-control" id="inpmAnamnesis" name="inpmAnamnesis" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <hr class="hrm">
                                    <div class="form-group row">
                                        <label for="inpmKeluhanUtama" class="col-sm-3 col-form-label text-lg-right text-sm-left">Keluhan Utama <span class="required-label">*</span></label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="inpmKeluhanUtama" name="inpmKeluhanUtama" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmRiwayatPenyakit_now" class="col-sm-3 col-form-label text-lg-right text-sm-left">Riwayat Penyakit Sekarang <span class="required-label">*</span></label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="inpmRiwayatPenyakit_now" name="inpmRiwayatPenyakit_now" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmRiwayatPenyakit" class="col-sm-3 col-form-label text-lg-right text-sm-left">Riwayat Penyakit</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="inpmRiwayatPenyakit" name="inpmRiwayatPenyakit" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <hr class="hrm">
                                    <div class="form-group row">
                                        <label for="inpmRiwayat_obat" class="col-sm-3 col-form-label text-lg-right text-sm-left">Riwayat Pengobatan </label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmObat_hct" name="inpmObat_hct" placeholder="Hct" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> mg</span>  
                                                    </span>
                                                </div>

                                                <input type="text" class="form-control"  id="inpmObat_captopril" name="inpmObat_captopril" placeholder="Captopril" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> mg</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmRiwayat_obat" class="col-sm-3 col-form-label text-lg-right text-sm-left"></label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control"  id="inpmObat_valsarta" name="inpmObat_valsarta" placeholder="Valsartan" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> mg</span>  
                                                    </span>
                                                </div>

                                                <input type="text" class="form-control"  id="inpmObat_amlodipine" name="inpmObat_amlodipine" placeholder="Amlodipine" data-inputmask-regex="[0-9.]{4}" autocomplete="off" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span> mg</span>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmRiwayat_obat" class="col-sm-3 col-form-label text-lg-right text-sm-left"></label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="inpmRiwayat_obat" name="inpmRiwayat_obat" rows="3" placeholder="Riwayat Obat Lainnya"></textarea>
                                        </div>
                                    </div>
                                    <hr class="hrm">
                                    <div class="form-group row">
                                        <label for="inpmRiwayatAlergi" class="col-sm-3 col-form-label text-lg-right text-sm-left">Riwayat Alergi</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="inpmRiwayatAlergi" name="inpmRiwayatAlergi" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inpmRiwayatKeluarga" class="col-sm-3 col-form-label text-lg-right text-sm-left">Riwayat Keluarga</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="inpmRiwayatKeluarga" name="inpmRiwayatKeluarga" rows="3"></textarea>
                                        </div>
                                    </div>


                                    <button class="btn btn-primary fw-bold float-left" onclick="stepper1.previous()">Previous</button>
                                    <input type="submit" class="btn btn-next btn-success fw-bold float-right" id="btnNextMedis" name="btnNextMedis" value="Selanjutnya" >
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/jquery/jquery.min.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/moment/moment.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url().BASE_URL ?>/assets/plugins/bs-stepper/bs-stepper.min.js"></script>
<script src="<?= base_url().BASE_URL ?>/assets/plugins/bs-stepper/main.js"></script>

<!-- dropzonejs -->
<script src="<?= base_url().BASE_URL ?>/assets_lte/plugins/dropzone/min/dropzone.min.js"></script>

<script>
    var xhrp_ddKabKota;
    var xhrp_ddKecamatan;
    var xhrp_ddKelurahan;

    var xhrp_csave;
    var xhrp_save;
    var xhrp_ambil;
    var tblListdatacarip;

    var xhrm_paketmedis;
    var xhrm_save;
    var xhrm_ambil;
    var tblListdatacarim;

    var xhrt_ambil;
    var tblListdatacarit;


    $(function () {
        jadwal_datenow();
        //Initialize Select2 Elements
        // $(".select2").select2();
        $(".select2").select2({
            theme: "bootstrap4",
        });

        //Initialize Select2 Elements
        $(".select2bs4").select2({
            theme: "bootstrap4",
        });
       
        $(document).on("select2:open", () => {
            document.querySelector(".select2-container--open .select2-search__field").focus()
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        // $('[data-mask]').inputmask()
        Inputmask({ "placeholder": "" }).mask(document.querySelectorAll("input"));


        // BS-Stepper Init
        // document.addEventListener("DOMContentLoaded", function () {
        //     window.stepper = new Stepper(document.querySelector(".bs-stepper"));
        // });
       
        $('#form_dpasien').validate({
            rules: {
                inpnik: {
                    required: true,
                    minlength: 16
                },
                inpNama: {
                    required: true,
                    minlength: 3
                },
                inp_tgl_lahir: {
                    required: true
                },
                inpJK: {
                    required: true
                },
                inpPernikahan: {
                    required: true,
                },
                inpAlamat: {
                    required: true
                },
                inpRefProponsi: {
                    required: true
                },
                inpKabupaten: {
                    required: true
                },
            },
            messages: {
                inpnik: {
                    required: "Harap isikan NIK Pasien",
                    minlength: "Panjang nama minimal 16 characters"
                },
                inpNama: {
                    required: "Harap isikan Nama Pasien",
                    minlength: "Panjang nama minimal 3 characters"
                },
                inp_tgl_lahir: {
                    required: "Harap isikan tgl lahir pasien"
                },
                inpJK: {
                    required: "Harap isikan jenis kelamin"
                },
                inpPernikahan: {
                    required: "Harap isikan status pernikahan"
                },
                inpAlamat: {
                    required: "Harap isikan alamat pasien"
                },
                inpRefProponsi: {
                    required: "Harap isikan alamat provinsi pasien"
                },
                inpKabupaten: {
                    required: "Harap isikan alamat kabupaten pasien"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group .col-sm-9').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

       

        $('#form_dmedis').validate({
            rules: {
                inpmSistol: {
                    required: true,
                },
                inpmDiastole: {
                    required: true,
                },
                inpmSuhu: {
                    required: true
                },
                inpmNadi: {
                    required: true
                },
                inpmNafas: {
                    required: true,
                },

                inpmNadi: {
                    required: true
                },
                inpmNafas: {
                    required: true
                },
                inpmTinggi: {
                    required: true
                },
                inpmBerat: {
                    required: true
                },
            },
            messages: {
                inpmSistol: {
                    required: "Harap isikan pemeriksaan Sistol",
                },
                inpmDiastole: {
                    required: "Harap isikan pemeriksaan Diastole",
                },
                inpmSuhu: {
                    required: "Harap isikan pemeriksaan suhu"
                },
                inpmNadi: {
                    required: "Harap isikan pemeriksaan Frekuensi Nadi"
                },
                inpmNafas: {
                    required: "Harap isikan pemeriksaan Pernafasan "
                },

                inpmAnamnesis: {
                    required: "Harap isikan pemeriksaan Anamnesis"
                },
                inpmKeluhanUtama: {
                    required: "Harap isikan pemeriksaan Keluhan Utama"
                },
                inpmRiwayatPenyakit_now: {
                    required: "Harap isikan pemeriksaan Penyakit Sekarang"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group .col-sm-9 .col-sm-6').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });

    // JS FOR TAB PASIEN//
    //_START_##################################//
    $(document).on('submit', '#form_dpasien', function(event) {
        event.preventDefault();
        
        var  id = document.getElementById("inpnik").value;
        var  idp = document.getElementById("inp_idpasien").value;
        if(typeof id != 'undefined' && id){
            xhrp_csave && xhrp_csave.abort();
            xhrp_csave = $.ajax({
                url : "<?php echo site_url('registrasi/pasien/tsave');?>",
                method : "POST",
                data : {id: id, idp:idp},
                dataType : 'json',
                beforeSend: function() {
                }
            })
            .done(function(data) {
                console.log(data);
                if(data.status){
                    if(data.info >= 1){
                        if(data.code == '200'){
                            document.getElementById("ide").value = data.insert[0]['id'];
                        }
                        Swal.fire({
                            title: 'NIK Sudah terdaftar',
                            text: "Apakah yakin ingin memperbaharui data ini!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Iya, perbaharui !',
                            cancelButtonText: 'Tidak, jangan perbaharui!',
                            reverseButtons: true
                            }).then((result) => {
                            if (result.isConfirmed) {
                                save_pasien();
                            } else if (result.dismiss === Swal.DismissReason.cancel) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'data berhasil tidak dirubah',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    $("html, body").animate({scrollTop: 0}, 500);
                                    stepper.next();
                                });
                            }
                        })
                    }else{
                        save_pasien();
                    }
                }else{
                    if(data.code == '204'){
                        swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: data.message,
                            showConfirmButton: false,
                            timer: 2000
                        })
                    }else if(data.code == '203'){
                        swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: data.message,
                            showConfirmButton: false,
                            timer: 2000
                        }).then( function() {
                            // caripasien_verif(data.nik, 'nonpcare');
                        });
                    }
                }
            })
            .fail(function(reason) {
                toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }else{
            toastr.warning('Mohon maaf terjadi kesalahan, no NIK tidak boleh kosong');
        }
    });

    function save_pasien(){
        var  id = document.getElementById("inpnik").value;
        if(typeof id != 'undefined' && id){
            var form = $('#form_dpasien')[0];
            var postData = new FormData(form);
            
            xhrp_save && xhrp_save.abort();
            xhrp_save = $.ajax({
                url : "<?php echo site_url('registrasi/pasien/save');?>",
                method : "POST",
                data: postData,
                dataType : 'json',
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    Swal.fire({
                        title: 'Mohon Menunggu...',
                        html: 'Sedang Proses Menyimpan Data',
                        allowEscapeKey: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })
                }
            })
            .done(function(data) {
                swal.close();
                if(data.status){
                    swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data.msg,
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        stepper1.next();
                        $("html, body").animate({scrollTop: 0}, 500);
                    });
                }else{
                    if(typeof id != 'undefined' && id){

                    }else{
                        toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
                    }
                }
            })
            .fail(function(reason) {
                toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }else{
            toastr.warning('Mohon maaf terjadi kesalahan, no NIK tidak boleh kosong');
        }
    }

    function newpasien(){
        window.location.reload();
    }

    function ddKabKota(){
        var id = document.getElementById("inpRefProponsi").value;
        var html = '';
        if (typeof id != 'undefined' && id) { 
            document.getElementById("inpKabupaten").disabled = false;
            xhrp_ddKabKota && xhrp_ddKabKota.abort();
            xhrp_ddKabKota = $.ajax({
                url : "<?php echo site_url('registrasi/kabupaten');?>",
                method : "POST",
                data : {id: id},
                dataType : 'json',
                beforeSend: function() {
                    Swal.fire({
                        title: 'Mohon Menunggu...',
                        html: 'Sedang proses validasi data',
                        allowEscapeKey: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })

                    html += '<option value="" >&nbsp;</option>';
                    $("#inpKecamatan").attr("disabled", true);
                    $("#inpKelurahan").attr("disabled", true);
                    $("#inpKecamatan").val('').trigger('change');
                    $("#inpKelurahan").val('').trigger('change');
                }
            })
            .done(function(data) {
                swal.close();

                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id_kabkota+'>'+data[i].nama+'</option>';
                }
                $('#inpKabupaten').html(html);
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }
    };

    function ddKecamatan(){
        var id = document.getElementById("inpKabupaten").value;
        var html = '';
        if (typeof id != 'undefined' && id) { 
            document.getElementById("inpKecamatan").disabled = false;
            xhrp_ddKecamatan && xhrp_ddKecamatan.abort();
            xhrp_ddKecamatan = $.ajax({
                url : "<?php echo site_url('registrasi/kecamatan');?>",
                method : "POST",
                data : {id: id},
                dataType : 'json',
                beforeSend: function() { 
                    html += '<option value="" >&nbsp;</option>';
                    $("#inpKelurahan").attr("disabled", true);
                    $("#inpKelurahan").val('').trigger('change');
                }
            })
            .done(function(data) {
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_kecamatan+'>'+data[i].nama+'</option>';
                    }
                    $('#inpKecamatan').html(html);
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }
    }

    
    function ddPaket_medis(){
        var id = document.getElementById("inpmMedisPaket").value;
        var html = '';
        if (typeof id != 'undefined' && id) { 
            xhrm_paketmedis && xhrm_paketmedis.abort();
            xhrm_paketmedis = $.ajax({
                url : "<?php echo site_url('registrasi/medis/paket_medis');?>",
                method : "POST",
                data : {id: id},
                dataType : 'json',
                beforeSend: function() {
                    html = '';
                }
            })
            .done(function(data) {
               console.log(data);
                $('#inpKelurahan').html(html);
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }
    }
    function ddKelurahan(){
        var id = document.getElementById("inpKecamatan").value;
        var html = '';
        if (typeof id != 'undefined' && id) { 
            document.getElementById("inpKelurahan").disabled = false;
            xhrp_ddKelurahan && xhrp_ddKelurahan.abort();
            xhrp_ddKelurahan = $.ajax({
                url : "<?php echo site_url('registrasi/kelurahan');?>",
                method : "POST",
                data : {id: id},
                dataType : 'json',
                beforeSend: function() {
                    html += '<option value="" >&nbsp;</option>';
                }
            })
            .done(function(data) {
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id_kelurahan+'>'+data[i].nama+'</option>';
                }
                $('#inpKelurahan').html(html);
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }
    }

    function promchange_profinsi(id, ids){
        var html = '';
        if (typeof id != 'undefined' && id) { 
            document.getElementById("inpKabupaten").disabled = false;
            xhrp_ddKabKota && xhrp_ddKabKota.abort();
            xhrp_ddKabKota = $.ajax({
                url : "<?php echo site_url('registrasi/kabupateninj');?>",
                method : "POST",
                data : {id: id},
                dataType : 'json',
                beforeSend: function() {
                    Swal.fire({
                        title: 'Mohon Menunggu...',
                        html: 'Sedang proses mengambil data',
                        allowEscapeKey: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })                      
                }
            })
            .done(function(data) {
                swal.close();

                var i;
                html += '<option value="" >&nbsp;</option>';
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id_kabkota+'>'+data[i].nama+'</option>';
                }
                $('#inpKabupaten').html(html);
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {
                $('#inpKabupaten').val(ids).select2({ theme: 'bootstrap4' })
            });
        }
    }
        
    function promchange_ddKabKota(id, ids){
        var html = '';
        if (typeof id != 'undefined' && id) { 
            document.getElementById("inpKecamatan").disabled = false;
            xhrp_ddKecamatan && xhrp_ddKecamatan.abort();
            xhrp_ddKecamatan = $.ajax({
                url : "<?php echo site_url('registrasi/kecamataninj');?>",
                method : "POST",
                data : {id: id},
                dataType : 'json',
                beforeSend: function() { 
                }
            })
            .done(function(data) {
                    var i;
                    html += '<option value="" >&nbsp;</option>';
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_kecamatan+'>'+data[i].nama+'</option>';
                    }
                    $('#inpKecamatan').html(html);
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {
                $('#inpKecamatan').val(ids).select2({ theme: 'bootstrap4' })
            });
        }
    }
    function promchange_ddKecamatan(id, ids){
        var html = '';
        if (typeof id != 'undefined' && id) { 
            document.getElementById("inpKelurahan").disabled = false;
            xhrp_ddKelurahan && xhrp_ddKelurahan.abort();
            xhrp_ddKelurahan = $.ajax({
                url : "<?php echo site_url('registrasi/kelurahaninj');?>",
                method : "POST",
                data : {id: id},
                dataType : 'json',
                beforeSend: function() {
                    html += '<option value="" >&nbsp;</option>';
                }
            })
            .done(function(data) {
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id_kelurahan+'>'+data[i].nama+'</option>';
                }
                $('#inpKelurahan').html(html);
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {
                $('#inpKelurahan').val(ids).select2({ theme: 'bootstrap4' })
            });
        }
    }

    function promchange_ddKelurahan(idc){
        $('#inpKelurahan').val(idc).trigger('change');
    }

    function clrpCari(){
        document.getElementById("crformDataPasien").reset();
    }

    $(document).on('submit', '#crformDataPasien', function(event) {
        event.preventDefault();

        tblListdatacarip = $("#examplepcari").DataTable({
            "destroy": true,
            "responsive": true, "lengthChange": true, "autoWidth": false,
            // "buttons": ["colvis",],
            "columnDefs": [ { orderable: false, targets: -1 }],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: {
                url:  "<?php echo site_url('/registrasi/pasien/loadtabelcari');?>",
                type: 'post',
                dataType: 'json',
                data: function ( d ) {
                    d.crinpNoRM =  $('#crinpNoRM').val();
                    d.crinpNama =  $('#crinpNama').val();
                },
                beforeSend: function() {
                    // showLoadingNotification();
                }
            },
            "columnDefs": [
                // { "visible": false, "targets": 0 }
            ],
            columns: [
                {
                    "data": null,
                    render: function (data, type, full, meta) {
                        ikon_hiu = '<div class="btn-group btn-group-sm"><button onClick="funcambil(\''+data.id_pasien+'\')" type="button" class="btn btn-info"> <i class="fas fa-eye"></i> Pilih </button></div>';
                        return ikon_hiu;
                    },
                    "width":"50"
                },
                {"data": "kode_rm",  "width":"100"},
                {"data": "nama", "width":"175"},
                {"data": "tgl_lahir", "width":"100"},
                {"data": "alamat"},
            ],
            rowCallback: function (row, data, index) {
            },
            initComplete: function (settings, json) {
                // hideLoadingNotification();
            },
            drawCallback: function () {
                // hideLoadingNotification();
            },
        }).buttons().container().appendTo('#examplepcari_wrapper .col-md-6:eq(0)');
    });

    async function funcambil(id){
        if (typeof id != 'undefined' && id) {
            xhrp_ambil && xhrp_ambil.abort();
            xhrp_ambil = $.ajax({
                url : "<?php echo site_url('registrasi/pasien/ambilpasien')?>",
                type: "POST",
                dataType: "JSON",
                data: {id: id},
                async : true,
                dataType : 'json',
                beforeSend: function() { 
                    // clearDataPasien('cls');
                }
            })
            .done(function(data) {
                if(data.status){
                    console.log(data);
                    if (typeof data.data.kode_rm != 'undefined' && data.data.kode_rm) {
                        $('#inpRM_r').val(data.data.kode_rm);
                    }
                    if (typeof data.data.nama != 'undefined' && data.data.nama) {
                        $('#inpNama').val(data.data.nama);
                    }
                    if (typeof data.data.alamat != 'undefined' && data.data.alamat) {
                        $('#inpAlamat').text(data.data.alamat);
                    }
                    if (typeof data.data.no_telp != 'undefined' && data.data.no_telp) {
                        $('#inpPhone').val(data.data.no_telp);
                    }
                    if (typeof data.data.id_pernikahan != 'undefined' && data.data.id_pernikahan) {
                        $('#inpPernikahan').val(data.data.id_pernikahan).trigger('change');
                    }
                    $('#inp_tgl_lahir').val(data.data.tgl_lahir_f);
                    $('#inpPekerjaan').val(data.data.id_pekerjaan).trigger('change');
                    $('#inpRefProponsi').val(data.data.id_propinsi).select2({ theme: 'bootstrap4' });
                    promchange_profinsi(data.data.id_propinsi, data.data.id_kabkota);
                    promchange_ddKabKota(data.data.id_kabkota, data.data.id_kecamatan);
                    promchange_ddKecamatan(data.data.id_kecamatan, data.data.id_kelurahan);
                        
                    if(data.data.jk == 1){
                        $('#inpJKLaki').prop('checked', true); 
                        $('#inpJKPerempuan').prop('checked', false); 
                    }else if(data.data.jk == 2){
                        $('#inpJKLaki').prop('checked', false); 
                        $('#inpJKPerempuan').prop('checked', true); 
                    }
                    
                    
                    $('#modal-xl-caripasien').modal('toggle'); 
                }
            })
            .fail(function(reason) {
                toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }
    }
    
    // JS FOR TAB PASIEN//
    //_END_##################################//
    //--------------------------------------//
    // JS FOR TAB MEDIS//
    //_START_##############################//
    $(document).on('submit', '#form_dmedis', function(event) {
        event.preventDefault();
        
        var  idk = document.getElementById("inpnik").value;
        var  idp = document.getElementById("inp_idpasien").value;
        if (typeof idk != 'undefined' && idk) {
            save_medis();
        }else{
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Data pasien tidak di keteahui',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                $("html, body").animate({scrollTop: 0}, 500);
                // stepper1.previous();
            });
        }
    });
    function save_medis(){
        var  idk = document.getElementById("inpnik").value;
        var  idp = document.getElementById("inp_idpasien").value;
        var  inpRM = document.getElementById("inpRM").value;

        var form = $('#form_dmedis')[0];
		var postData = new FormData(form);
        postData.append('inpmNik', idk);
        postData.append('inp_idpasien', idp);
        postData.append('inpRM', inpRM);

        xhrm_save && xhrm_save.abort();
        xhrm_save = $.ajax({
            url : "<?php echo site_url('registrasi/medis/save');?>",
            method : "POST",
            data: postData,
            dataType : 'json',
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon Menunggu...',
                    html: 'Sedang Proses Menyimpan Data',
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
            }
        })
        .done(function(data) {
            swal.close();
            if(data.status){
                swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: data.msg,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location = "<?php echo site_url('/pemeriksaan')?>"
                });
            }else{
                toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            }
        })
        .fail(function(reason) {
            toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
        })
        .always(function() {});
    }

    function cari_hmedis(){
        var  idm = document.getElementById("inpRM_r").value;
        if (typeof idm != 'undefined' && idm) {
            tblListdatacarim && tblListdatacarim.abort();
            tblListdatacarim = $.ajax({
                url : "<?php echo site_url('registrasi/medis/loadtabelcari');?>",
                method : "POST",
                data : {crinpNoRM: idm},
                dataType : 'json',
                beforeSend: function() {
                    $('#dhistory_medis').html('');
                }
            })
            .done(function(data) {
                console.log(data.data);
                var i;
                var html = '';
                if(data.status){
                    for(i=0; i<data.data.length; i++){
                        var status_tex2 = '';
                        var status_tex = '';
                        var status_periksa = data.data[i].status_periksa;
                        if (typeof status_periksa != 'undefined' && status_periksa) {
                            if(data.status == '3'){
                                status_tex = 'card-success';
                            }else if(data.status == '2'){
                                status_tex = 'card-primary';
                            }else if(data.status == '1'){
                                status_tex = 'card-info';
                            }else{
                                status_tex = 'card-danger';
                            }
                        }

                        if (typeof data.data[i].status_text != 'undefined' && data.data[i].status_text) {
                            status_tex2 = '[ '+data.data[i].status_text+' ] '
                        }

                        html += '<div class="card '+status_tex+' collapsed-card">';
                            html += '<div class="card-header card-header-head-spas" data-card-widget="collapse">';
                                html += ' <h3 class="card-title float-sm-left">'+status_tex2+data.data[i].tgl_periksa+'</h3>';
                                html += '<div class="card-tools">';
                                    html += '<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>';
                                html += '</div>';
                            html += '</div>';
                            html += '<div class="card-body"><div class="row">';
                                html += '<div class="col-md-6">';
                                    html += '';
                                    html += '';
                                html += '</div>';
                            html += '</div></div>';
                            html += '<div class="card-footer">Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.</div>';
                        html += '</div>';
                    }
                    $('#dhistory_medis').html(html);
                }
                
            })
            .fail(function(reason) {
                //toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
            $('#modal-xl-carimedis').modal('show');
        }else{
            toastr.warning('Harap isikan data pasien dahulu');
        }
    };


    // JS FOR TAB MEDIS//
    //_END_##################################//
    //--------------------------------------//
    // JS FOR TAB TERAPIS//
    //_START_##############################//
    $(document).on('submit', '#crformDataJadwal', function(event) {
        event.preventDefault();
        
        var  idm = document.getElementById("inpj_tglakhir").value;
        if (typeof idm != 'undefined' && idm) {
            tblListdatacarit = $("#examplejcari").DataTable({
                "destroy": true,
                "responsive": true, "lengthChange": true, "autoWidth": false,
                // "buttons": ["colvis",],
                "columnDefs": [ { orderable: false, targets: -1 }],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                ajax: {
                    url:  "<?php echo site_url('/registrasi/terapis/loadtabelcari');?>",
                    type: 'post',
                    dataType: 'json',
                    data: function ( d ) {
                        d.inpj_tglawal =  $('#inpj_tglawal').val();
                        d.inpj_tglakhir =  $('#inpj_tglakhir').val();
                    },
                    beforeSend: function() {
                        // showLoadingNotification();
                    }
                },
                "columnDefs": [
                    // { "visible": false, "targets": 0 }
                ],
                columns: [
                    
                    {"data": "kode_rm",  "width":"100"},
                    {"data": "nama", "width":"175"},
                    {"data": "tgl_periksa", "width":"100"},
                    {
                        "data": null,
                        render: function (data, type, full, meta) {
                            if(data.status == '3'){
                                ikon_hiu = '<span class="badge bg-success">selesai</span>';
                            }else if(data.status == '2'){
                                ikon_hiu = '<span class="badge bg-primary">periksa</span>';
                            }else if(data.status == '1'){
                                ikon_hiu = '<span class="badge bg-info">registrasi</span>';
                            }else{
                                ikon_hiu = '<span class="badge bg-danger">batal</span>';
                            }
                            return ikon_hiu;
                        },
                        "width":"50"
                    },
                ],
                rowCallback: function (row, data, index) {
                },
                initComplete: function (settings, json) {
                    // hideLoadingNotification();
                },
                drawCallback: function () {
                    // hideLoadingNotification();
                },
            }).buttons().container().appendTo('#examplepcari_wrapper .col-md-6:eq(0)');
        }else{
            toastr.warning('Harap isikan minimal tanggal batas pencarian akhir');
        }
    });

    $(document).on('submit', '#form_jdterapi', function(event) {
        event.preventDefault();
        
        var  idm = document.getElementById("inpm_id").value;
        var  idrm = document.getElementById("inpRM_r").value;
        if (typeof idrm != 'undefined' && idrm) {
            if (typeof idm != 'undefined' && idm) {
                Swal.fire({
                    title: 'Data tidak bisa diubah',
                    text: "Apakah yakin ingin membuat jadwal ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Simpan data',
                    cancelButtonText: 'Tidak, Simpan data',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        save_terapis();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'data batal disimpan',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            $("html, body").animate({scrollTop: 0}, 500);
                        });
                    }
                })
            }else{
                notif_terapis('Data medis tidak di keteahui');
            }
        }else{
            notif_terapis('Data pasien tidak di keteahui');
        }
    });

    function notif_terapis(info){
        Swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: info,
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            $("html, body").animate({scrollTop: 0}, 500);
            // stepper1.previous();
        });
    }
    function save_terapis(){
        var  ide = document.getElementById("inpRM_r").value; //id pasien di dbs
        var  idm = document.getElementById("inpm_id").value;

        var form = $('#form_jdterapi')[0];
		var postData = new FormData(form);
        postData.append('inpRM_r', ide);
        postData.append('inpm_id', idm);

        xhrm_save && xhrm_save.abort();
        xhrm_save = $.ajax({
            url : "<?php echo site_url('registrasi/terapis/save');?>",
            method : "POST",
            data: postData,
            dataType : 'json',
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            beforeSend: function() {
                // Swal.fire({
                //     title: 'Mohon Menunggu...',
                //     html: 'Sedang Proses Menyimpan Data',
                //     allowEscapeKey: false,
                //     allowOutsideClick: false,
                //     didOpen: () => {
                //         Swal.showLoading()
                //     }
                // })
            }
        })
        .done(function(data) {
            console.log(data);
            swal.close();
            if(data.status){
                swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: data.msg,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    // window.location = "<?php echo site_url('/')?>"
                });
            }else{
                swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: data.msg,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    
                });
            }
        })
        .fail(function(reason) {
            toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
        })
        .always(function() {});
    }

    // JS FOR TAB TERAPIS//
    //_END_##################################//
    //--------------------------------------//
    // JS FOR TAB GLOBAL//
    //_START_##############################//

    function jadwal_datenow(){
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = (day)+"-"+(month)+"-"+now.getFullYear() ;
        $('#inpj_tglawal').val(today);
        $('#inpj_tglakhir').val(today);
    }
        
    
</script>
<!-- ######################### MODAL CARI PASIEN ########################## -->
<div class="modal fade" id="modal-xl-caripasien">
    <div class="modal-dialog modal-xl card-outline">
        <div class="modal-content card-outline">
            <div class="modal-header" style="background: #007bff;">
                <h6 class="modal-title" style="color:#fff;">Cari Pasien</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <form  id="crformDataPasien" class="form-horizontal" novalidate> 
                                    <div class="row invoice-info">
                                        <div class="col-sm-5 invoice-col">
                                            <div class="form-group row">
                                                <label for="crinpNoRM" class="col-sm-3 col-form-label text-lg-right text-leftt"><span class="d-none d-sm-inline-block">No</span> RM </label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control"  id="crinpNoRM" name="crinpNoRM"  autocomplete="off" placeholder="Nomor Rekam Medis Pasien" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 invoice-col">
                                            <div class="form-group row">
                                                <label for="crinpNama" class="col-sm-3 col-form-label text-lg-right text-left">Nama</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control"  id="crinpNama" name="crinpNama" placeholder="nama pasien" autocomplete="off" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row invoice-info float-right">
                                        <div class="btn-group float-right">
                                            <button type="submit" class="btn btn-success fw-bold float-right" id="crbtnModalCariP"><i class="fa fa-search"></i> Cari Pasien</span></button>
                                            <button type="button" class="btn btn-primary fw-bold float-right" id="crbtnModalBaruP" onclick="clrpCari()"><i class="fa fa-lg fa-eraser"></i>  Reset Kriteria</span></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="card-body table-responsive p-1">
                                <table id="examplepcari" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>REKAM MEDIS</th>
                                            <th>NAMA PASIEN</th>
                                            <th>TGL LAHIR</th>
                                            <th>ALAMAT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer float-right">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>

<!-- ######################### MODAL CARI PAKET ########################## -->
<div class="modal fade" id="modal-xl-caripaket">
    <div class="modal-dialog modal-xl card-outline">
        <div class="modal-content card-outline">
            <div class="modal-header" style="background: #007bff;">
                <h6 class="modal-title" style="color:#fff;">Cari Paket</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body table-responsive p-1">
                                <table id="example_paketcari" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>KD PAKET</th>
                                            <th>REKAM MEDIS</th>
                                            <th>NAMA PASIEN</th>
                                            <th>TGL BELI</th>
                                            <th>PAKET</th>
                                            <th>HARGA</th>
                                            <th>SISA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer float-right">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>

<!-- ######################### MODAL CARI MEDIS ########################## -->
<div class="modal fade" id="modal-xl-carimedis">
    <div class="modal-dialog modal-xl card-outline">
        <div class="modal-content card-outline">
            <div class="modal-header" style="background: #007bff;">
                <h6 class="modal-title" style="color:#fff;">Riwayat Medis Pasien</h6>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool">
                        <i class="fa fa-search"></i>
                    </button>
                    <button type="button" class="btn btn-tool close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12" id="dhistory_medis">
                        
                        <div class="card card-success collapsed-card">
                            <div class="card-header card-header-head-spas" data-card-widget="collapse">
                                <h3 class="card-title float-sm-left">Select2 (Bootstrap4 Theme)</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Minimal</label>
                                            <select class="form-control select2bs4" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer float-right">
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>
<!-- ######################### MODAL CARI JADWAL ########################## -->
<div class="modal fade" id="modal-xl-carijadwal">
    <div class="modal-dialog modal-xl card-outline">
        <div class="modal-content card-outline">
            <div class="modal-header" style="background: #007bff;">
                <h6 class="modal-title" style="color:#fff;">Cek Jadwal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <form  id="crformDataJadwal" class="form-horizontal" novalidate> 
                                    <div class="row invoice-info">
                                        <div class="form-group row">
                                            <label for="inpj_tglawal" class="col-sm-3 col-form-label text-lg-right text-sm-left">Tgl Awal</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inpj_tglawal" name="inpj_tglawal" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-inputmask-placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inpj_tglakhir" class="col-sm-3 col-form-label text-lg-right text-sm-left">Tgl Akhir</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="inpj_tglakhir" name="inpj_tglakhir" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-inputmask-placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row invoice-info float-right">
                                        <div class="btn-group float-right">
                                            <button type="submit" class="btn btn-success fw-bold float-right" id="crbtnModalCariJ"><i class="fa fa-search"></i> Cek Jadwal</span></button>
                                            <button type="button" class="btn btn-primary fw-bold float-right" id="crbtnModalBaruJ" onclick="jadwal_datenow()"><i class="fa fa-lg fa-eraser"></i>  Reset Kriteria</span></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="card-body table-responsive p-1">
                                <table id="examplejcari" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>REKAM MEDIS</th>
                                            <th>NAMA PASIEN</th>
                                            <th>TGL PERIKSA</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer float-right">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
