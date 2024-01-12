<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Barang Keluar</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Profil') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Barang Keluar</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul2; ?>
            </h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>StockKeluar/tambah" class="btn btn-info mb-2">Input Barang Keluar</a>
                </div>
                <div class="col-md-12">
                    <?= $this->session->flashdata('message'); ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Stock</th>
                                <th>Tanggal</th>
                                <th>Nama Barang</th>
                                <th>Kode</th>
                                <!-- <th>Foto</th> -->
                                <th>Jumlah /pcs</th>
                                <th>Jumlah pcs/bungkus</th>
                                <!-- <th>Harga /pcs</th> -->
                                <th>Total /bungkus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($stockKeluar as $us): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>
                                    </td>
                                    <td>
                                        <?= $us['id']; ?>
                                    </td>
                                    <td><?= $us['tanggal']; ?></td>
                                    <td>
                                        <?= $us['nama_barang']; ?>
                                    </td>
                                    <td>
                                        <?= $us['kode']; ?>
                                    </td>
                                    <!-- <td>
                                        <img src="<?= base_url('assets/img/stock/') . $us['gambar']; ?>" style="width: 100px;"
                                            class="img-thumbnail">
                                    </td> -->
                                    <td>
                                        <?= $us['jumlah_pcs']; ?>
                                        /pcs
                                    </td>
                                    <td>
                                        <?= $us['jumlah_bungkus']; ?>
                                        
                                    </td>
                                    <!-- <td>
                                        Rp.
                                        <?= $us['harga_pcs']; ?>
                                    </td> -->
                                    <td>
                                        <?= $us['total_bungkus']; ?>
                                        /bungkus
                                    </td>
                                    <td>
                                        <a href="<?= base_url('StockKeluar/hapus/') . $us['id']; ?>"
                                            class="btn btn-danger">Hapus</a>
                                        <a href="<?= base_url('StockKeluar/edit/') . $us['id']; ?>"
                                            class="btn btn-warning">Edit</a>
                                        <!-- <a href="<?= base_url('StockKeluar/detail/') . $us['id']; ?>"
                                            class="btn btn-info">Detail</a> -->
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>