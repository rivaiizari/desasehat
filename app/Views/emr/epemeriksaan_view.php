<?= $this->extend('layout/template')?>
<?= $this->section('content'); ?>



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
                <button type="button" class="btn btn-success fw-bold float-right btn-sm" id="btntblsegarkan"><i class="fas fa-redo-alt"></i> Segarkan</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Spesialisasi</th>
                            <th>Pemeriksaan</th>
                            <th>Faskes Penerima</th>
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
<?= $this->endSection('content'); ?>