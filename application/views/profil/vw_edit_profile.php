<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Terpentol</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Stock') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Profil</li>
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
                            Form Edit Data Diri
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="gambar">Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $profil['id']; ?>">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <?= form_error('Nama Lengkap', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ruangan">email</label>
                                    <input type="text" name="email" value="<?= $profil['email']; ?>"
                                        class="form-control" id="email" placeholder="email">
                                    <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <a href="<?= base_url('Profil') ?>" class="btn btn-danger">Tutup</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>