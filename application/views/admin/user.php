  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <a href="<?= base_url('admin/user/tambah'); ?>" class="btn btn-success" style="margin-bottom: 5px;"> Tambah Data User</a>
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <?= $this->session->flashdata('pesan');  ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50px">No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th width="150px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($user as $data) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data->nama; ?></td>
                    <td><?= $data->username; ?></td>
                    <td><?= $data->hak_akses; ?></td>
                    <td align="center">
                      <a class="btn btn-primary" href="<?= base_url('admin/user/edit/') . $data->id_user; ?>"> Edit</a>
                      <a class="btn btn-danger" href="<?= base_url('admin/user/hapus/') . $data->id_user; ?>" onclick="return confirm('Yakin Hapus?');"> Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->

        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->