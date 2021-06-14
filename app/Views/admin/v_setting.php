<?= $this->extend('template/template-backend-admin') ?>

<?= $this->section('content') ?>

<div class="col-sm-12">
    <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('pesan');
            echo '</h5></div>';
        }
    ?>
</div>

<div class="col-sm-4">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Logo</h3>
        </div>

        <div class="card-body">
        <?= form_open_multipart('admin/saveSetting') ?>
            <div class="text-center">
                <img id="gambar_load" class="img-fluid pad" src="<?= base_url('logo/'.$setting1['logo']); ?>" width="250px" height="250px" alt="">
            </div>

            <div class="form-group">
                <label>Ganti Logo</label>
                <input id="preview_gambar" type="file" name="logo" class="form-control" accept="image/*">
            </div>
        </div>
    </div>
</div>

<div class="col-sm-8">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Sekolah</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" value="<?= $setting1['nama_sekolah']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>No Telpon</label>
                        <input type="text" name="no_telpon" value="<?= $setting1['no_telpon']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" value="<?= $setting1['email']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Web</label>
                        <input type="text" name="web" value="<?= $setting1['web']; ?>" class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alamat Sekolah</label>
                        <input type="text" name="alamat" value="<?= $setting1['alamat']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" value="<?= $setting1['kecamatan']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kabupaten/Kota</label>
                        <input type="text" name="kabupaten" value="<?= $setting1['kabupaten']; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" name="provinsi" value="<?= $setting1['provinsi']; ?>" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Deskripsi Sekolah</h3>
        </div>

        <div class="card-body">
            <div class="form-group">
                <textarea name="deskripsi" rows="5" class="form-control"><?= $setting1['deskripsi']; ?></textarea>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <button type="submit" class="btn btn-flat btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </div>
    </div>
</div>

<?= form_close(); ?>

<?= $this->endSection() ?>