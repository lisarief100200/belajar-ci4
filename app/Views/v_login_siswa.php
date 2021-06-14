<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>

        <div class="col-md-5">
            <div class="text-center">
                <img class="img-fluid pad" src="<?= base_url('logo/login.png'); ?>" alt="" width="350px">
            </div>
        </div>

        <div class="col-md-7">
            <?= form_open('auth/cek_login_siswa'); ?>
            <div class="col-md-12 col-sm-12 col-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h5 class="card-title m-0">Login Siswa</h5>
                    </div>

                    <div class="card-body">

                    <?php //\Config\Services::validation()->listErrors() ?>

                    <?=
                        session()->getFlashdata('errors');
                    ?>

                    <?php

                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                        echo session()->getFlashdata('pesan');
                        echo '</h5></div>';
                    }

                    if (session()->getFlashdata('salah')) {
                        echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                        echo session()->getFlashdata('salah');
                        echo '</h5></div>';
                    }

                    ?>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <p class="text-danger"><b>*) Silahkan lakukan pendaftaran sebelum login</b></p>
                                    <p class="text-danger"><b>*) Gunakan Tanggal-Bulan-Tahun sebagai Password</b></p>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="text" name="nisn" value="<?= old('nisn'); ?>" class="form-control" placeholder="NISN">
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('nisn'))
                                            {
                                                echo \Config\Services::validation()->getError('nisn');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" value="<?= old('password'); ?>" class="form-control" placeholder="Tanggal Lahir (contoh: 10022000)">
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('password'))
                                            {
                                                echo \Config\Services::validation()->getError('password');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button class="btn btn-success btn-flat btn-block" type="submit"> Login</button>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">                                
                                    <a href="<?= base_url('pendaftaran');?>" class="btn btn-info btn-flat btn-block" type="submit"> Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close(); ?>
        </div>

        <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>

        <script>
        // buat tutup card pada saat waktu yg ditentukan
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
            });
        }, 3000);
        </script>

<?= $this->endSection() ?>