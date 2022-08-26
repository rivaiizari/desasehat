<?= $this->extend('layout/template')?>
<?= $this->section('content'); ?>
    
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/daterangepicker/daterangepicker.css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url().BASE_URL ?>/assets_lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style type="text/css">
    .hrm {
        margin-top: 0rem;
        /* margin-bottom: 1rem; */
        border: 0;
        border-top: 0px solid rgba(0,0,0,.1);
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: rgba(0, 0, 0, 0.1);
    }

    .hrmb {
        margin-top: 0rem;
        /* margin-bottom: 1rem; */
        border: 0;
        border-top: 0px solid rgba(0,0,0,.1);
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: rgba(0, 0, 0, 0.1);
        border-top-color: #17a2b8;
    }

    .hrmBlue {
        margin-top: 0rem;
        /* margin-bottom: 1rem; */
        border: 0;
        border-top: 0px solid rgba(0,0,0,.1);
        border-top-width: 3px;
        border-top-style: solid;
        border-top-color: #007bff;
    }
	</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 id="txt_judul">Medis Pasien </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Medis</a></li>
                        <li class="breadcrumb-item active" id="txtsub_judul">Detail </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- ############################# -->
        <!-- //view data show -->
        <!-- ======================== -->
        <div class="container-fluid" id="containerdetail">
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3">
                        <div class="row">
                            <input type="hidden" name="idKonsulTel" id="idKonsulTel" placeholder="id jawab telemedicine" value="<?php if(!empty($data[0]->idt)){ echo $data[0]->idt; }?>">
                            <div class="col-12">
                                <button type="button" class="btn btn-tool float-right" onclick="backtabel()">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="separator-solid"></div>
                                <h4 class="text-section profile-username text-center">Data Medis <small>Pasien</small></h4>
                                <h6 class="text-center"><small>Detail Informasi Data Medis Pasien</small></h6>
                                <hr class="hrmBlue"><br>
                                <h4>
                                    <?php echo $data_penginput->nama_profile; ?>
                                    <i class="fas fa-globe"></i> Tgl <small class="adheadertglKons_minta"><?php if(!empty($data[0]->tgl_minta)){ echo $data[0]->tgl_minta; } ?></small>
                                    <small class="float-right"><button type="button" class="btn btn-warning btn-block" id="btncetakhasil" onclick="btnExpertiseCetakHasil()"><i class="fa fa-print"></i><b>  Cetak <span class="d-none d-sm-inline-block">Pemeriksaan</span></b> </button></small>
                                </h4>
                                <input type="hidden" id="inpep_status" name="inpep_status" value="<?php if(!empty($data[0]->status_tel)){ echo $data[0]->status_tel; }?>">
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Dari
                                <address>
                                    <strong id="adDarinama">adDarinama</strong><br />
                                    <address id="adDariRS">adDariRS</address>
                                </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong id="adKenama"><?php echo 'adKenama'; ?></strong><br />
                                    <address id="adKeRS"><?php echo 'adKeRS'; ?></address>
                                    <address>
                                            <strong>tgl. dijawab:</strong>
                                            <i class="adheadertglKons_jwb">adheadertglKons_jwb</i>
                                        </address>
                                </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong id="adjenisKonsul"><?php echo '$data[0]->jenis_sps'; ?></strong>
                                <address>
                                    <strong>spesialisasi</strong>
                                    <i id="adheadersps"><?= '$data[0]->nama_sps' ?></i>
                                </address>
                                <address>
                                    <strong>dokter peminta:</strong>
                                    <i id="adheadertglpeminta"><?= '$data[0]->nama_dok' ?></i>
                                </address>
                            </div>
                        </div>
                        

                        <div class="separator-solid"></div>
                        <h4 class="text-section profile-username ">Informasi Pasien & Diagnosa</h4>
                        <hr>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> No Rekam Medis :</strong>  <strong id="ddlnorm"> norm</strong> 
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong> Nama Pasien :</strong>
                                <address>
                                    <strong id="ddlNamaPasien"><?= '$data[0]->nama_p' ?></strong>
                                </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Suhu : </strong>
                                <address id="ddlSuhu"><?= '$data[0]->suhu' ?> °C</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Tanggal Diagnosa :</strong>
                                 <address id="ddlTgl"><?= '$data[0]->tgl_minta' ?></address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong> Nadi :</strong>
                                <address id="ddlNadi"><?= '$data[0]->frek_nadi' ?> x/menit</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Frek. Nafas :</strong>
                                <address id="ddlFrekNafas"><?= '$data[0]->pernafasan' ?> x/menit</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Tekanan Darah :</strong>
                                 <address id="ddlTekDarah"><?= '$data[0]->sistole' ?> / <?= '$data[0]->diastole' ?> mm/Hg</address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong> Berat Badan :</strong>
                                <address id="ddlNadi"> 0Kg</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Tinggi Badan :</strong>
                                <address id="ddlFrekNafas"> 0cm</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Umur :</strong>
                                <address id="ddlTekDarah">
                                    0 tahun
                                </address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Kesadaran :</strong>
                                <address id="ddlKesadaran" style="margin-bottom: 0rem;  font-weight: bold;"><?= '$data[0]->nama_ks' ?></address>
                                <address id="ddlKesadaranDet"><?= '$data[0]->kesadaran_ds' ?></address>
                            </div>
                        </div>

                        <div class="separator-solid"></div>
                        <h4 class="text-section profile-username ">Informasi Pemeriksaan</h4>
                        <hr>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Anamnesa / Keluhan Utama : </strong>
                                <address id="ddlKelUtama">Keluhan Utama ad</address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Keluhan Tambahan : </strong>
                                <address id="ddlKelTambahan"> Keluhan Tambahan</address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Status Generalis / Lokalis :</strong>
                                <address> Status Gen</address>
                            </div>
                        </div>

                        <div class="separator-solid"></div>
                        <h4 class="text-section profile-username ">Riwayat Lengkap Pasien</h4>
                        <hr>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Riwayat Alergi : </strong>
                                <address id="ddlRiwayatAlergi">alerg</address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Riwayat Penyakit : </strong>
                                <address id="ddlRiwayatPenyakit">'r penyakit'</address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Status Generalis / Lokalis :</strong>
                                <address id="ddlRiwayatPenatalaksanaan"> s gen</address>
                            </div>
                        </div>

                        <div class="separator-solid"></div>
                        <h4 class="text-section profile-username ">Media Medis</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
    <script src="<?= base_url() ?>/assets_lte/plugins/jquery/jquery.min.js"></script>
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
    <script>
        var tblListdata;
        var xhre_dataBatal;

        $(function () {

        });
    </script>
<?= $this->endSection('content'); ?>	