<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.addons.css') ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png" ') ?>/>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?= base_url('assets/images/logo.svg') ?>" alt="logo"/></a>            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/images/logo-mini.svg') ?>" alt="logo"/></a>
          </div>

        </div>
      </div>
      <div class="nav-bottom">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('admin/dataBarang') ?>" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Barang</span></a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('admin/kelola-kategori') ?>" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Kelola Kategori</span></a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('logout') ?>" class="nav-link"><i class="link-icon  icon-power"></i><span class="menu-title">Keluar</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
