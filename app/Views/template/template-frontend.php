<?php

$db = \Config\Database::connect();

$setting = $db->table('tbl_setting')
  ->where('id', 1)
  ->get()->getRowArray();

$ta = $db->table('tbl_ta')
  ->where('id_ta', 1)
  ->get()->getRowArray();
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?> | <?= $subtitle ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?= base_url(); ?>/template/index3.html" class="navbar-brand">
        <img src="<?= base_url(); ?>/logo/<?= $setting['logo']; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>PPDB Online <?= $setting['nama_sekolah']; ?></b></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url(); ?>" class="nav-link">Home</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">Pengumuman</a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('pendaftaran'); ?>" class="nav-link">Pendaftaran</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">About</a>
          </li>

        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <?php
            if (session()->get('nisn') == "") { ?>
              <a class="nav-link" href="<?= base_url('auth/loginSiswa'); ?>">
                <i class="fas fa-user"></i> Login
              </a>
          <?php  
            }else { ?>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-user"></i> <?= session()->get('nama_lengkap'); ?></a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="<?= base_url('siswa'); ?>" class="dropdown-item">Profil</a></li>
                <li class="dropdown-divider"></li>
                <li><a href="<?= base_url('auth/logout_siswa'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </li>
          <?php
            }
          ?>

        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php
              if ($ta['status'] == 1) {
                ?>
                <h1>Pendaftaran Tahun Ajaran <?= $ta['ta']; ?></h1>
                <?php
              } else{
                echo "<h1 style='color:red'>Mohon maaf, pendaftaran sudah ditutup</h1>";
              }
            ?>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">

            <?= $this->renderSection('content') ?>

           <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="<?= $setting['web'] ?>"><?= $setting['nama_sekolah'] ?></a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>/template/dist/js/demo.js"></script>
</body>
</html>