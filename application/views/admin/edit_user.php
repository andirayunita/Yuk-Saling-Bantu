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

      <?php foreach($user as $data) : ?>
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <!-- /.box-header -->
              <!-- form start -->
              <form action="<?= base_url('admin/user/edit/') . $data->id_user; ?>" method="post">
                <div class="box-body">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="Nama">Nama</label>
                      <input type="hidden" name="id_user" class="form-control" value="<?= $data->id_user; ?>">
                      <input type="text" name="nama" class="form-control" value="<?= $data->nama; ?>">
                      <?= form_error('nama', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" name="username" class="form-control" value="<?= $data->username; ?>">
                      <?= form_error('username', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <label for="Ganti Password">Ganti Password</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="Hak Akses">Hak Akses</label>
                      <select name="hak_akses" class="form-control">
                        <option value="Admin" <?= ($data->hak_akses == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                        <option value="User" <?= ($data->hak_akses == 'User') ? 'selected' : ''; ?>>User</option>
                      </select>
                      <?= form_error('hak_akses', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
                </div>
                <!-- /.box-body -->
              </form>
            </div>
            <!-- /.box -->
          </div>

        </div>
      <?php endforeach; ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
