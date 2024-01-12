<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Barang Keluar Terpentol</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Profil') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('StockKeluar') ?>">Barang Keluar</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Edit Barang Keluar
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('StockKeluar/edit/') . $stockkeluar['id']; ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $stockkeluar['id'] ?>">

                                <div class="form-group">
                                    <label for="nama_instansi">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" 
                                    value="<?= $stockkeluar['nama_barang'] ?>" id="nama_barang" placeholder="Nama Barang">
                                    <?= form_error('nama_barang', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="text" name="kode" class="form-control" 
                                    value="<?= $stockkeluar['kode'] ?>" id="kode" placeholder="kode">
                                    <?= form_error('kode', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_pcs">Jumlah /pcs</label>
                                    <input type="text" name="jumlah_pcs" class="form-control" value="<?= $stockkeluar['jumlah_pcs'] ?>"
                                    id="bidang_kerja" placeholder="Jumlah /pcs">
                                    <?= form_error('jumlah_pcs', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_bungkus">Jumlah /bungkus</label>
                                    <input type="text" name="jumlah_bungkus" class="form-control" value="<?= $stockkeluar['jumlah_bungkus'] ?>"
                                    id="jumlah_bungkus" placeholder="jumlah /bungkus">
                                    <?= form_error('jumlah_bungkus', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="harga_pcs">harga /pcs</label>
                                    <input type="text" name="harga_pcs" class="form-control" value="<?= $stockkeluar['harga_pcs'] ?>"
                                    id="harga_pcs" placeholder="harga /pcs">
                                    <?= form_error('jumlah_bungkus', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="total_bungkus">Total /bungkus</label>
                                    <input type="text" name="total_bungkus" class="form-control" value="<?= $stockkeluar['total_bungkus'] ?>"
                                    id="total_bungkus" placeholder="Total /bungkus">
                                    <?= form_error('total_bungkus', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            
                                <a href="<?= base_url('StockKeluar') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

