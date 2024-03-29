<div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <?= $this->session->flashdata('message') ?>
                                    <form method="POST" action="<?= base_url('auth/cek_login') ?>">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="<?= set_value('email'); ?>" id="email" name="email" type="email" placeholder="Masukan Alamat Email..." />
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" value="<?= set_value('nama'); ?>" name="password" id="password" type="password" placeholder="Password" />
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <button class="btn btn-danger" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div><a class="small" href="password.html" style="text-decoration: none; font-weight: bold;">Forgot Password?</a></div>
                                    <div class="small"><a href="<?= base_url('Auth/registrasi'); ?>" style="text-decoration: none; font-weight: bold;">Buat akun</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>