
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?= $title; ?> | <?= $subtitle; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Navbar Search -->
      <h3>Halaman Admin</h3>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-unlock"></i> Logout
            </a>
        </li>
      </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin'); ?>" class="brand-link">
      <img src="<?= base_url(); ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PPDB Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/foto/<?= session()->get('foto'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama_user'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?= base_url('jurusan'); ?>" class="nav-link">
                <i class="nav-icon fas fa-people-arrows"></i>
                <p>
                  Jurusan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('pekerjaan'); ?>" class="nav-link">
                <i class="nav-icon fas fa-suitcase"></i>
                <p>
                  Pekerjaan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('pendidikan'); ?>" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Pendidikan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('agama'); ?>" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Agama
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('penghasilan'); ?>" class="nav-link">
                <i class="nav-icon fas fa-money-bill-wave"></i>
                <p>
                  Penghasilan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('user'); ?>" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  User
                </p>
              </a>
            </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/setting'); ?>" class="nav-link">
                  <i class="fas fa-atlas nav-icon"></i>
                  <p>Setting Web</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/ta'); ?>" class="nav-link">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>
                    Setting Tahun Ajaran
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('jalurmasuk'); ?>" class="nav-link">
                  <i class="fas fa-sitemap nav-icon"></i>
                  <p>
                    Setting Jalur Masuk
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('baner'); ?>" class="nav-link"> 
                  <i class="fab fa-accusoft nav-icon"></i>
                  <p>Setting Banner</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/beranda'); ?>" class="nav-link"> 
                  <i class="fas fa-home nav-icon"></i>
                  <p>Setting Beranda</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $subtitle; ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
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


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
<!-- Summernote -->
<script src="<?= base_url(); ?>/template/plugins/summernote/summernote-bs4.min.js"></script>

<script>
  // buat tutup card pada saat waktu yg ditentukan
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000);
</script>

<script> 
  // Buat load gambar pada saat isi form
  function bacaGambar(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#gambar_load').attr('src', e.target.result)
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $('#preview_gambar').change(function() {
    bacaGambar(this);
  });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
  })
</script>

</body>
</html>
