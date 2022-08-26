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

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><?= $data_title ?></h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $data_title ?></li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="container-fluid" id="containertabel">
        <div class="row">
            <div class="col-12">
                <?php if(session()->getFlashdata('info_ses') !== NULL) : ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                        <?php echo session()->getFlashdata('info_ses')?>
                    </div>
                <?php endif; ?>
                <button type="button" class="btn btn-success fw-bold float-right btn-sm" id="btn_segarkan"><i class="fas fa-redo-alt"></i> Segarkan</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
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

        tblListdata = $("#example1").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: {
                url:  "<?php echo site_url('/pemeriksaan/loadtabel');?>",
                type: 'post',
                dataType: 'json',
                // data: function ( d ) {
                //     d.id = fteltglawal()
                //     d.th = fteltglakhir()
                // },
                beforeSend: function() {
                    // showLoadingNotification();
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
            },
            columns: [
                {"data": "nama_pasien"},
                {"data": "umur", "width":"60px"},
                {"data": "tdl_daftar", "width":"125px"},
                {
                    "data": null,
                    render: function (data, type, full, meta) {
                        var ikon_hiu;
                        if(data.statusp == '6'){
                            ikon_hiu = '&nbsp;<span class="badge bg-success">'+data.status_pemeriksaan+'</span>';
                        }else if(data.statusp == '4'){
                            ikon_hiu = '&nbsp;<span class="badge bg-warning">'+data.status_pemeriksaan+'</span>';
                        }else if(data.statusp == '3'){
                            ikon_hiu = '&nbsp;<span class="badge bg-info">'+data.status_pemeriksaan+'</span>';
                        }else if(data.statusp == '2'){
                            ikon_hiu = '&nbsp;<span class="badge bg-warning">'+data.status_pemeriksaan+'</span>';
                        }else if(data.statusp == '1'){
                            ikon_hiu = '&nbsp;<span class="badge bg-info">'+data.status_pemeriksaan+'</span>';
                        }else{
                            ikon_hiu = '&nbsp;<span class="badge bg-primary">'+data.status_pemeriksaan+'</span>';
                        }
                        return ikon_hiu;
                    },
                    "width":"130px"
                },
                {
                    "data": null,
                    render: function (data, type, full, meta) {
                        var ikon_hiu;
                        ikon_hiu = '<div class="btn-group btn-group-sm" style="width:100%">';
                        ikon_hiu +='<button onClick="dataJawab('+data.id+')" type="button" class="btn btn-info"> <i class="fas fa-eye"></i> View</button>';
                        if(data.statusp == 1){
                            ikon_hiu += '<button onClick="dataBatal('+data.id+')" type="button" class="btn btn-warning"> <i class="fas fa-times"></i> Batal Periksa</button>';
                        }
                        ikon_hiu += '</div>';
                        return ikon_hiu;
                    },
                    "width":"200px"
                },
            ],
            rowCallback: function (row, data, index) {
            },
            initComplete: function (settings, json) {
                swal.close();
                // hideLoadingNotification();
            },
            drawCallback: function () {
                swal.close();
                // hideLoadingNotification();
            },
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        
    });

    $("#btn_segarkan").click(function(){
        console.log('btntblsegarkan');
        // window.location.reload();
        $("#example1").DataTable().ajax.reload();
    });

    function dataBatal(id){
        if (typeof id != 'undefined' && id) {
            Swal.fire({
                title: 'Apakah anda ingin membatalkan konsultasi ini?',
                text: "Anda tidak bisa mengubah data ini setelah di dibatalkan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'iyaa',
                cancelButtonText: 'Tidak',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    xhre_dataBatal && xhre_dataBatal.abort();
                    xhre_dataBatal = $.ajax({
                        url : "<?php echo site_url('/pemeriksaan/batal');?>",
                        data: { id:id },
                        method : "POST",
                        dataType : 'json',
                        beforeSend: function() {
                            Swal.fire({
                                title: 'Mohon Menunggu...',
                                html: 'Sedang proses permintaan',
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
                                title: 'data berhasil di ubah :)',
                                showConfirmButton: false,
                                timer: 1500
                            }).then((result) => {
                                $("#example1").DataTable().ajax.reload();
                            });
                        }else{
                            Swal.fire({
                                position: 'top-end',
                                icon: 'warning',
                                title: 'Maaf, permintaan belum berhasil di proses :(    ',
                                showConfirmButton: false,
                                timer: 1500
                            }).then((result) => {
                                $("#example1").DataTable().ajax.reload();
                            });
                        }
                    })
                    .fail(function(reason) {
                        swal.close();
                        toastr.warning('Mohon maaf terjadi kesalahan, refresh halaman atau hubungi Administator');
                    })
                    .always(function() {});
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    result.dismiss === Swal.DismissReason.cancel
                }
            })
        }else{
            fdata_null();
        }
    }

    function dataJawab(id){
        if (typeof id != 'undefined' && id) {
            location.href = "<?php echo site_url('/pemeriksaan/periksa_dokter/');?>"+id;
        }else{
            fdata_null();
        }
    }

    function fdata_null(){
        Swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'maaf, data tidak diketahui :)',
            showConfirmButton: false,
            timer: 1500
        }).then((result) => {
            window.location.reload();
        });
    }

    
</script>
<?= $this->endSection('content'); ?>