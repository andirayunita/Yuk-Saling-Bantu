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
        <div class="col-md-6">
          <div class="box box-success">
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('admin/user/tambah/'); ?>" method="post">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= set_value('nama', ''); ?>">
                    <?= form_error('nama', '<div class="text-small text-danger">','</div>') ?>
                  </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control">
                  <?= form_error('username', '<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
                  <?= form_error('password', '<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                  <label for="Hak Akses">Hak Akses</label>
                  <select name="hak_akses" class="form-control">
                    <option value="">Pilih Hak Akses</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                  </select>
                   <?= form_error('hak_akses', '<div class="text-small text-danger">','</div>') ?>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
            <!-- /.box-body -->
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
