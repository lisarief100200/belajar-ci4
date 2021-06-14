<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>

<?php
    if ($ta['status'] == 1) { ?>
        <div class="col-md-5">
            <img class="img-fluid pad" src="<?= base_url('logo/register.png'); ?>" alt="">
        </div>

        <div class="col-md-7">
            <?= form_open('pendaftaran/simpanPendaftaran'); ?>
            <div class="col-md-12 col-sm-12 col-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h5 class="card-title m-0"><b>Pendaftaran</b></h5>
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

                    ?>

                        <div class="row">
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

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" value="<?= old('nama_lengkap'); ?>" class="form-control" placeholder="Nama Lengkap">
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('nama_lengkap'))
                                            {
                                                echo \Config\Services::validation()->getError('nama_lengkap');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Panggilan</label>
                                    <input type="text" name="nama_panggilan" value="<?= old('nama_panggilan'); ?>" class="form-control" placeholder="Nama Panggilan">
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('nama_panggilan'))
                                            {
                                                echo \Config\Services::validation()->getError('nama_panggilan');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk" id="" class="form-control">
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('jk'))
                                            {
                                                echo \Config\Services::validation()->getError('jk');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>"  class="form-control" placeholder="Tempat Lahir">
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('tempat_lahir'))
                                            {
                                                echo \Config\Services::validation()->getError('tempat_lahir');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <select name="tanggal" id="" class="form-control">
                                    <option value="">--Tanggal--</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('tanggal'))
                                            {
                                                echo \Config\Services::validation()->getError('tanggal');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Bulan Lahir</label>
                                    <select name="bulan" id="" class="form-control">
                                    <option value="">--Bulan--</option>
                                    <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('bulan'))
                                            {
                                                echo \Config\Services::validation()->getError('bulan');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tahun Lahir</label>
                                    <select name="tahun" id="" class="form-control">
                                    <option value="">--Tahun--</option>
                                        <?php
                                            $now = date("Y");
                                            for ($i=1990; $i <= $now ; $i++) {  
                                            ?>
                                            <option value="<?= $i;?>"><?= $i;?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                    <p class="text-danger">
                                        <?php
                                            if (\Config\Services::validation()->hasError('tahun'))
                                            {
                                                echo \Config\Services::validation()->getError('tahun');
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-12">
                                <button type="submit" class="btn btn-primary btn-flat btn-block"><i class="fas fa-save"></i> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
<?php
    }else { ?>
    <div class="col-md-12">
        <div class="alert alert-warning alert-dismissible">
            <h5><i class="icon fas fa-exclamation-triangle"></i> Pemberitahuan!</h5>
            Pendaftaran tahun <?= $ta['ta']; ?> sudah ditutup.
        </div>
    </div>
<?php
    } ?>

<?= $this->endSection() ?>