<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Stock Barang Terpentol</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Profil') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('Stock') ?>">Stock</a></li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Barang
                    </div>
                    <div class="card-body">

                        <h2 class="card-title">
                            <?= $stock['nama_barang']; ?>
                        </h2>

                        <div class="card mb-3" style="max-width: 900px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/img/stock/'); ?>" alt="" style="max-width: 100%">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Nama Barang</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $stock['nama_barang']; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">Jumlah /Pcs</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $stock['jumlah_pcs']; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">Jumlah pcs/bungkus</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $stock['jumlah_bungkus']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Harga /Pcs</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $stock['harga_pcs']; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Total /Bungkus</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6">
                                        <?= $stock['total_bungkus']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= base_url('Stock') ?>" class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>