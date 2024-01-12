<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Barang Keluar Terpentol</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Profil') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('StockKeluar') ?>">Barang Keluar</a></li>
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
                            Inputan Barang Keluar
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('StockKeluar/tambah/') ?>" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control"
                                        value="<?= set_value('tanggal') ?>" id="tanggal" placeholder="Tanggal">
                                    <?= form_error('tanggal', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_instansi">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control"
                                        value="<?= set_value('nama_barang') ?>" id="nama_barang"
                                        placeholder="Nama Barang">
                                    <?= form_error('nama_barang', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <select name="kode" id="kode" class="form-control">
                                        <option value="">Pilih Kode</option>
                                        <?php foreach ($stock as $s): ?>
                                            <option value="<?= $s['id']; ?>">
                                                <?= $s['kode']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('status', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar"
                                            accept=".jpg,.jpeg,.png">
                                        <label for="gambar" class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_pcs">Jumlah /pcs</label>
                                    <input type="text" name="jumlah_pcs" class="form-control"
                                        value="<?= set_value('jumlah_pcs') ?>" id="bidang_kerja"
                                        placeholder="Jumlah /pcs">
                                    <?= form_error('jumlah_pcs', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_bungkus">Jumlah /bungkus</label>
                                    <input type="text" name="jumlah_bungkus" class="form-control"
                                        value="<?= set_value('jumlah_bungkus') ?>" id="jumlah_bungkus"
                                        placeholder="jumlah /bungkus">
                                    <?= form_error('jumlah_bungkus', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="harga_pcs">harga /pcs</label>
                                    <input type="text" name="harga_pcs" class="form-control" value="<?= set_value('harga_pcs') ?>"
                                    id="harga_pcs" placeholder="harga /pcs">
                                    <?= form_error('jumlah_bungkus', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div> -->
                                <div class="form-group">
                                    <label for="total_bungkus">Total /bungkus</label>
                                    <input type="text" name="total_bungkus" class="form-control"
                                        value="<?= set_value('total_bungkus') ?>" id="total_bungkus"
                                        placeholder="Total /bungkus">
                                    <?= form_error('total_bungkus', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>

                                <a href="<?= base_url('StockKeluar') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>