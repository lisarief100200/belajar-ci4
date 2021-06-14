<?= $this->extend('template/template-frontend') ?>

<?= $this->section('content') ?>

<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><b>Biodata Peserta Didik</b></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

    <div class="alert alert-warning alert-dismissible">
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        Silahkan melengkapi biodata Anda sebelum melakukan mengajukan pendaftaran!
    </div>

        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Pendaftaran</b></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt text-primary"></i> Edit
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <strong><i class="fas fa-table"></i> NISN</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-3">
                            <strong><i class="fas fa-table"></i> No Pendaftaran</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-3">
                            <strong><i class="fas fa-table"></i> Tanggal Pendaftaran</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-3">
                            <strong><i class="fas fa-table"></i> Jalur Pendaftaran</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                    <h3 class="card-title"><b>Foto</b></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt text-primary"></i> Edit
                        </button>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid pad" src="<?= base_url('foto/1622564430_fdb47e80a4da7d72eab0.jpeg'); ?>" width="100%">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                    <h3 class="card-title"><b>Identitas Peserta Didik</b></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt text-primary"></i> Edit
                        </button>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong><i class="fas fa-table"></i></i> Nama Lengkap</strong>
                                <p class="text-muted">Malibu, California</p>

                                <strong><i class="fas fa-table"></i></i> NIK</strong>
                                <p class="text-muted">Malibu, California</p>

                                <strong><i class="fas fa-table"></i> Nomor Telepon</strong>
                                <p class="text-muted">Malibu, California</p>

                                <strong><i class="fas fa-table"></i> Tempat Lahir</strong>
                                <p class="text-muted">Lorem ipsum.</p>
                            </div>

                            <div class="col-md-4">
                                <strong><i class="fas fa-table"></i> Nama Panggilan</strong>
                                <p class="text-muted">Malibu, California</p>

                                <strong><i class="fas fa-table"></i> Agama</strong>
                                <p class="text-muted">Malibu, California</p>

                                <strong><i class="fas fa-table"></i> Jenis Kelamin</strong>
                                <p class="text-muted">Malibu, California</p>

                                <strong><i class="fas fa-table"></i> Tanggal Lahir</strong>
                                <p class="text-muted">Lorem ipsum.</p>
                            </div>

                            <div class="col-md-4">
                                <strong><i class="fas fa-table"></i> Tinggi Badan</strong>
                                <p class="text-muted">Malibu, California</p>

                                <strong><i class="fas fa-table"></i> Berat Badan</strong>
                                <p class="text-muted">Malibu, California</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title"><b>Data Ayah Kandung</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt text-primary"></i> Edit
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> NIK Ayah</strong>
                            <p class="text-muted">Malibu, California</p>

                            <strong><i class="fas fa-table"></i> Nama Ayah</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> Pekerjaan</strong>
                            <p class="text-muted">Malibu, California</p>

                            <strong><i class="fas fa-table"></i> Pendidikan</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> Penghasilan Perbulan</strong>
                            <p class="text-muted">Lorem ipsum.</p>

                            <strong><i class="fas fa-table"></i> Nomor Telepon</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title"><b>Data Ibu Kandung</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt text-primary"></i> Edit
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> NIK Ibu</strong>
                            <p class="text-muted">Malibu, California</p>

                            <strong><i class="fas fa-table"></i> Nama Ibu</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> Pekerjaan</strong>
                            <p class="text-muted">Malibu, California</p>

                            <strong><i class="fas fa-table"></i> Pendidikan</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> Penghasilan Perbulan</strong>
                            <p class="text-muted">Lorem ipsum.</p>

                            <strong><i class="fas fa-table"></i> Nomor Telepon</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title"><b>Data Sekolah Asal</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt text-primary"></i> Edit
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> Tahun Lulus</strong>
                            <p class="text-muted">Malibu, California</p>

                            <strong><i class="fas fa-table"></i> Nama Sekolah</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>

                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> Provinsi</strong>
                            <p class="text-muted">Malibu, California</p>

                            <strong><i class="fas fa-table"></i> Kabupaten</strong>
                            <p class="text-muted">Malibu, California</p>

                            <strong><i class="fas fa-table"></i> Kecamatan</strong>
                            <p class="text-muted">Lorem ipsum.</p>
                        </div>

                        <div class="col-md-4">
                            <strong><i class="fas fa-table"></i> Nomor Ijazah</strong>
                            <p class="text-muted">Malibu, California</p>
                            
                            <strong><i class="fas fa-table"></i> Nomor SKHUN</strong>
                            <p class="text-muted">Malibu, California</p>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title"><b>File Pendukung</b></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-default btn-xs btn-flat"><i class="fas fa-pencil-alt text-primary"></i> Edit
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Jenis</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>

            <div class="text-center">
                <a href="" class="btn btn-success btn-block btn-flat"><i class="fas fa-check"></i> Apply Pendaftaran</a>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
  </div>
</div>

<?= $this->endSection() ?>