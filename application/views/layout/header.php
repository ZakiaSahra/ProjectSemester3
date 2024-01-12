<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Terpentol</title>
    <link href="<?= base_url('assets/') ?>img/terpentol/terpentol.jpeg" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-color: red">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= base_url('Stock/vw_liststock') ?>">Terpentol</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-warning" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-white small">
                        <?= $user['nama']; ?>
                    </span>

                    <img class="img-profile rounded-circle"
                        src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="" width="30" height="30">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('Profil') ?>">Profile</a></li>
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion " id="sidenavAccordion" style="background-color: white">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <img class="img-profile rounded-circle mx-auto"
                            src="<?= base_url('assets/img/terpentol/terpentol.jpeg'); ?>" alt="" width="75%"
                            height="75%" style="padding: 20px;">


                        <div class="sb-sidenav-menu-heading text-warning">Menu</div>
                        <?php
                        if ($user['role'] == 'Admin') { ?>
                         <li class="nav-item">
                                <a class="nav-link text-warning text-center" href="<?= site_url('masterStock/') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    <span>Stock</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-warning text-center" href="<?= site_url('Stock/') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    <span>Barang Masuk</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-warning text-center" href="<?= site_url('StockKeluar/') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    <span>Barang Keluar</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-warning text-center" href="<?= site_url('Riwayat/') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    <span>Riwayat</span>
                                </a>
                            </li>
                           

                        <?php } else {
                            ?>
                            <?php
                        } ?>
                    </div>
                </div>
            </nav>
        </div>