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

<div class="col-sm-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Konfigurasi <?= $subtitle; ?></h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-sm text-center">
                <thead>
                    <tr>
                        <th width='50px'>No</th>
                        <th>Tahun</th>
                        <th>Tahun Ajaran</th>
                        <th>Status</th>
                        <th>Active / Non-Active</th>
                        <th width='100px'>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $no = 1;

                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ta['tahun'];  ?></td>
                            <td><?= $ta['ta'];  ?></td>
                            <td>
                                <?php
                                    if ($ta['status'] == 1) {
                                        echo "<label class='badge badge-success'>Active</label>";
                                    }else {
                                        echo "<label class='badge badge-danger'>Non-Active</label>";
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($ta['status'] == 1) { ?>
                                        <a href="<?= base_url('admin/statusNonaktif/'.$ta['id_ta']); ?>" class="btn btn-danger btn-xs btn-flat">Non-aktifkan</a>
                                
                                <?php
                                    }else { ?>
                                        <a href="<?= base_url('admin/statusAktif/'.$ta['id_ta']); ?>" class="btn btn-success btn-xs btn-flat">Aktifkan</a>
                                <?php
                                    } ?>
                            </td>
                            <td>
                                <button class="btn btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $ta['id_ta']; ?>">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal edit -->

<div class="modal fade" id="edit<?= $ta['id_ta']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit Tahun Ajaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php echo form_open('admin/saveTa'); ?>
        <div class="modal-body">
        <div class="form-group">
                <label>Tahun</label>
                    <select name="tahun" id="" class="form-control">
                        <?php
                            $now = date("Y");
                            for ($i=2018; $i <= $now ; $i++) {  
                            ?>
                            <option value="<?= $i;?>" <?= ($i == $ta['tahun']) ? 'selected' : '' ?>><?= $i;?></option>
                            <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun Ajaran</label>
                    <input type="text" name="ta" value="<?= $ta['ta']; ?>" class="form-control" placeholder="Tahun Ajaran" required>
                </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
        </div>
        <?php echo form_close(); ?>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?= $this->endSection() ?>