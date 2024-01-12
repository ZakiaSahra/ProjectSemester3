<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Riwayat Barang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Stock') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Riwayat Barang </li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-md-6"><a href="<?= base_url() ?>Riwayat/tambah" class="btn btn-info mb-2">Tambah Barang</a>
                </div> -->
                <div class="col-md-12">
                    <?= $this->session->flashdata('message'); ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Id Riwayat</td>
                                <td>Tanggal</td>
                                <td>Nama Barang</td>
                                <!-- <td>Id Stock</td> -->
                                <td>Jumlah /bungkus</td>
                                <td>Jumlah /pcs</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($riwayat as $us): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>
                                    </td>
                                    <td>
                                        <?= $us['id']; ?>
                                    </td>
                                    <td>
                                        <?= $us['tanggal']; ?>
                                    </td>
                                    <td>
                                        <?= $us['nama_barang']; ?>
                                    </td>
                                    <td>
                                        <?= $us['jumlah_bungkus']; ?>
                                    </td>
                                    <td>
                                        <?= $us['jumlah_pcs']; ?>
                                    </td>
                                    <td>
                                        <?= $us['status']; ?>
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
</div>