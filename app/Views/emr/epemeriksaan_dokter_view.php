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
                            <input type="hidden" name="imp_idm" id="imp_idm" placeholder="id m" value="<?php if(!empty($data_detail->id_medis)){ echo $data_detail->id_medis; }?>">
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
                                    <i class="fas fa-globe"></i> Tgl <small class="adheadertglKons_minta"><?php if(!empty($data_penginput->tdl_daftar)){ echo $data_penginput->tdl_daftar; } ?></small>
                                    <small class="float-right"><button type="button" class="btn btn-warning btn-block" id="btncetakhasil" onclick="btnExpertiseCetakHasil()"><i class="fa fa-print"></i><b>  Cetak <span class="d-none d-sm-inline-block">Pemeriksaan</span></b> </button></small>
                                </h4>
                            </div>
                        </div>
                        <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                                Pasien
                                <address>
                                    <strong id="adMaster_rm"><?php echo $data_detail->nama_pasien;?></strong><br />
                                    <address id="adMaster_namap">No Rm: <?php echo $data_detail->no_rm;?></</address>
                                </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                Dari
                                <address>
                                    <strong id="adDarinama"><?php echo $data_penginput->nama_profile;?> - <?php echo $data_penginput->nama_input;?></strong><br />
                                    <address id="adDariRS">
                                        <?php
                                            if(!empty($data_penginput->nama_kelurahan)){
                                                echo '<b>'.$data_penginput->nama_kelurahan.'</b>';
                                            }
                                            if(!empty($data_penginput->nama_kecamatan)){
                                                echo ', '.$data_penginput->nama_kecamatan;
                                            }
                                            if(!empty($data_penginput->nama_kabkota)){
                                                echo ', '.$data_penginput->nama_kabkota;
                                            }
                                            if(!empty($data_penginput->nama_profinsi)){
                                                echo ', <br><b>'.$data_penginput->nama_profinsi.'</b>';
                                            }
                                        ?>
                                    </address>
                                </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong id="adKenama"><?php echo 'Pukesmas ABCdef'; ?></strong><br />
                                    <address>
                                            <strong>tgl. dijawab:</strong>
                                            <i class="adheadertglKons_jwb"><?php if(!empty($data_detail->tgl_jawab)){ echo $data_detail->tgl_jawab; }else{ echo '-'; } ?></i>
                                        </address>
                                </address>
                            </div>
                        </div>

                        <div class="separator-solid"></div>
                        <h4 class="text-section profile-username ">Informasi Medis & Diagnosa</h4>
                        <hr>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong> Berat :</strong>
                                <address id="ddMedis_berat"><?= $data_detail->berat ?> Kg </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Tinggi : </strong>
                                <address id="ddMedis_tinggi"><?= $data_detail->tinggi ?> cm °C</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Lingkar Perut :</strong>
                                 <address id="ddMedis_perut"><?= $data_detail->lingkar_perut ?> cm</address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong> Nadi :</strong>
                                <address id="ddMedis_nadi"><?= $data_detail->frek_nadi ?> x/menit</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Frek. Nafas :</strong>
                                <address id="ddMedis_nafas"><?= $data_detail->pernafasan ?> x/menit</address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Tekanan Darah :</strong>
                                 <address id="ddMedis_darah"><?= $data_detail->sistole ?> / <?= $data_detail->diastole ?> mm/Hg</address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong>Saturasi Oksigen :</strong>
                                <address id="ddMedis_oksigen"> </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong> Umur</strong>
                                <address id="ddMedis_umur"></address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong></strong>
                                <address id="ddMedis_lain"></address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Laboratorium :</strong>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong>Kolesterol</strong>
                                <address id="ddMedis_labKolestrol"><?= $data_detail->lab_kolestrol ?></address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong>Gula Darah</strong>
                                <address id="ddMedis_labGula"><?= $data_detail->lab_guladarah ?></address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong>Asam Urat</strong>
                                <address id="ddMedis_labAsamurat"><?= $data_detail->lab_asam_urat ?></address>
                            </div>
                        </div>

                        <div class="separator-solid"></div>
                        <h4 class="text-section profile-username ">Informasi Pemeriksaan</h4>
                        <hr>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Anamnesa / Keluhan Utama : </strong>
                                <address id="ddInfo_anamnesa"><?= nl2br(htmlspecialchars($data_detail->anamnesa));  ?></address>
                                <address id="ddInfo_keluhan_utama"><?= nl2br(htmlspecialchars($data_detail->keluhan_utama)); ?></address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Keluhan Tambahan : </strong>
                                <address id="ddInfo_keluhan_tambahan"><?= nl2br(htmlspecialchars($data_detail->keluhan_tambahan)); ?></address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Riwayat Penyakit : </strong>
                                <address id="ddInfo_riwayat"><?= nl2br(htmlspecialchars($data_detail->riwayat_penyakit)); ?></address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Riwayat Alergi : </strong>
                                <address id="ddInfo_alergi"><?= nl2br(htmlspecialchars($data_detail->riwayat_alergi)); ?></address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Riwayat Keluarga : </strong>
                                <address id="ddInfo_keluarga"><?= nl2br(htmlspecialchars($data_detail->riwayat_keluarga)); ?></address>
                            </div>
                        </div>

                        <div class="separator-solid"></div>
                        <h4 class="text-section profile-username ">Riwayat Pengobatan Pasien</h4>
                        <hr>
                        <div class="row invoice-info">
                            <div class="col-sm-3 invoice-col">
                                <strong>Hcl</strong>
                                <address id="ddObat_hcl"><?php if(!empty($data_detail->ro_hcl)){ echo $data_detail->ro_hcl.' Mg';}  ?></address>
                            </div>
                            <div class="col-sm-3 invoice-col">
                                <strong>Captopril</strong>
                                <address id="ddObat_captopril"><?php if(!empty($data_detail->ro_captopril)){ echo $data_detail->ro_captopril.' Mg';} ?></address>
                            </div>
                            <div class="col-sm-3 invoice-col">
                                <strong>Valsartan</strong>
                                <address id="ddObat_valsartan"><?php if(!empty($data_detail->ro_valsarta)){ echo $data_detail->ro_valsarta.' Mg';} ?></address>
                            </div>
                            <div class="col-sm-3 invoice-col">
                                <strong>Amlodipine</strong>
                                <address id="ddObat_amlodipine"><?php if(!empty($data_detail->ro_amlodipine)){ echo $data_detail->ro_amlodipine.' Mg';}  ?></address>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                                <strong> Riwayat Pengobatan Lain : </strong>
                                <address id="ddObat_lain"><?= nl2br(htmlspecialchars($data_detail->ro_text)); ?></address>
                            </div>
                        </div>

                    <?php if($data_ptype['isdokter'] == '1'){ ?>
                        <div class="separator-solid"></div><hr>
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Pemeriksaan Medis Dokter</h3>
                                <div class="card-tools">
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="form_dpemeriksaan" class="form-horizontal" novalidate>
                                    <input type="hidden" id="inpp_ide" name="inpp_ide" autocomplete="off" placeholder="id_e" value="<?php if(!empty($data_detail->ide)){ echo $data_detail->ide; }?>">
                                    <div class="form-group row">
                                        <label for="impp_pemeriksaan" class="col-sm-3 col-form-label text-lg-right text-sm-left">Terapi dan saran</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="impp_pemeriksaan" name="impp_pemeriksaan" rows="3" placeholder="Terapi dan saran" required><?= nl2br(htmlspecialchars($data_detail->e_pemeriksaan)); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="impp_obat" class="col-sm-3 col-form-label text-lg-right text-sm-left">Resep Obat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="impp_obat" name="impp_obat" rows="3" placeholder="Pemberian Resep Obat"><?= nl2br(htmlspecialchars($data_detail->e_obat)); ?></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-next btn-success fw-bold float-right" id="btn_pemeriksaan" name="btn_pemeriksaan" value="Simpan Konsultasi" >
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
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
    <script>
        var tblListdata;
        var xhre_dataBatal;
        var xhre_save;

        var xhrm_csave;

        $(function () {

            $('#form_dpemeriksaan').validate({
                rules: {
                    impp_pemeriksaan: {
                        required: true,
                    },
                },
                messages: {
                    impp_pemeriksaan: {
                        required: "Harap isikan Saran atau terapi",
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

        });


        $(document).on('submit', '#form_dpemeriksaan', function(event) {
            event.preventDefault();
            var  idm = document.getElementById("imp_idm").value;
            var  ide = document.getElementById("inpp_ide").value;
            if(typeof idm != 'undefined' && idm){
                if(typeof ide != 'undefined' && ide){
                    Swal.fire({
                        title: 'Update Data',
                        text: "Apakah yakin ingin memperbaharui data ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Perbaharui data',
                        cancelButtonText: 'Tidak, Perbaharui data',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            btnSavedPemeriksaan();
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'data berhasil tidak dirubah',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                window.location.reload();
                            });
                        }
                    })
                }else{
                    btnSavedPemeriksaan();
                }
            }else{
                toastr.warning('Mohon maaf terjadi kesalahan, data medis tidak ditemukan');
            }
        });

        function btnSavedPemeriksaan(){
            var  idm = document.getElementById("imp_idm").value;

            var form = $('#form_dpemeriksaan')[0];
            var postData = new FormData(form);
            postData.append('imp_idm', idm);

            xhre_save && xhre_save.abort();
            xhre_save = $.ajax({
                url : "<?php echo site_url('/pemeriksaan/save');?>",
                method : "POST",
                data : postData,
                dataType : 'json',
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
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data.info,
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.reload();
                    });
                }else{
                    if(data.code == '204'){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: data.info,
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }else{
                        Swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: data.info,
                            text: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                    
                }
            })
            .fail(function(reason) {
                swal.close();
                toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
            })
            .always(function() {});
        }
    </script>
<?= $this->endSection('content'); ?>	