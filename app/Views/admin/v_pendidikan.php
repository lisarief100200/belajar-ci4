<?= $this->extend('template/template-backend-admin') ?>

<?= $this->section('content') ?>

<div class="col-sm-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftar <?= $subtitle; ?></h3>

            <div class="card-tools">
                <button class="btn btn-flat btn-primary btn-xs" data-toggle="modal" data-target="#add">
                    <i class="fas fa-plus"></i> Add
                </button>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
        <?php
        if (session()->getFlashdata('tambah')) {
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('tambah');
            echo '</h5></div>';
        }

        if (session()->getFlashdata('edit')) {
            echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('edit');
            echo '</h5></div>';
        }
        
        if (session()->getFlashdata('delete')) {
            echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('delete');
            echo '</h5></div>';
        }
        ?>
            <table class="table table-sm text-center">
                <thead>
                    <tr>
                        <th width='50px'>No</th>
                        <th>Pendidikan</th>
                        <th width='100px'>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $no = 1;
                        foreach ($pendidikan as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['pendidikan'];  ?></td>
                            <td>
                                <button class="btn btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $value['id_pendidikan']; ?>">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <button class="btn btn-flat btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_pendidikan']; ?>">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal add -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add Pendidikan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php echo form_open('pendidikan/insertData'); ?>
        <div class="modal-body">
                <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" name="pendidikan1" class="form-control" placeholder="Pendidikan" required>
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

<!-- Modal edit -->
<?php
    foreach ($pendidikan as $key => $value) { ?>

<div class="modal fade" id="edit<?= $value['id_pendidikan']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit Pendidikan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php echo form_open('pendidikan/editData/'.$value['id_pendidikan']); ?>
        <div class="modal-body">
                <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" name="pendidikan1" value="<?= $value['pendidikan']; ?>" class="form-control" placeholder="Pendidikan" required>
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
<?php
}
?>

<!-- Modal delete -->
<?php
    foreach ($pendidikan as $key => $value) { ?>

<div class="modal fade" id="delete<?= $value['id_pendidikan']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Hapus Pendidikan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
        Apakah anda yakin ingin menghapus pendidikan <b><?= $value['pendidikan']; ?></b>?
        </div>
        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            <a href="<?= base_url('pendidikan/deleteData/'.$value['id_pendidikan']); ?>" class="btn btn-danger btn-sm">Delete</a>
        </div>
        </div>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php
}
?>
<?= $this->endSection() ?>