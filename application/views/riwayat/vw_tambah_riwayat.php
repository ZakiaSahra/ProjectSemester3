<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Riwayat Barang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Profil') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('Riwayat') ?>">Riwayat Barang</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Riwayat Barang
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('Riwayat/tambah'); ?>" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control"
                                        value="<?= set_value('tanggal') ?>" id="tanggal" placeholder="Tanggal">
                                    <?= form_error('tanggal', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>                                
                                <div class="form-group">
                                <label for="id_stock">Id Stock</label>
                                    <select name="id_stock" id="id_stock" class="form-control"
                                        value="<?= set_value('id_stock') ?>" placeholder="Id Stock">
                                        <option value=".." disabled selected>Id Stock</option>
                                        <option value="PO01">PO01</option>
                                        <option value="PJ01">PJ01</option>
                                        <option value="TB01">TB01</option>
                                    </select>
                                    <?= form_error('id_stock', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_bungkus">Jumlah /bungkus</label>
                                    <input type="text" name="jumlah_bungkus" class="form-control"
                                        value="<?= set_value('jumlah_bungkus') ?>" id="jumlah_bungkus"
                                        placeholder="Jumlah /bungkus">
                                    <?= form_error('jumlah_bungkus', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_pcs">Jumlah /pcs</label>
                                    <input type="text" name="jumlah_pcs" class="form-control"
                                        value="<?= set_value('jumlah_pcs') ?>" id="jumlah_pcs"
                                        placeholder="Jumlah /pcs">
                                    <?= form_error('jumlah_pcs', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control"
                                        value="<?= set_value('status') ?>" placeholder="Status">
                                        <option value=".." disabled selected>Status</option>
                                        <option value="Barang Masuk">Barang Masuk</option>
                                        <option value="Barang Keluar">Barang Keluar</option>
                                    </select>
                                    <?= form_error('status', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('Riwayat') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                    Riwayat</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>