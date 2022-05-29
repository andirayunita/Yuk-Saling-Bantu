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
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <?= $this->session->flashdata('pesan');  ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50px">No.</th>
                    <th>Nama Program</th>
                    <th>Nama Donatur</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Nominal</th>
                    <th>Metode Pembayaran</th>
                    <th width="150px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($donasi as $data) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data->nama_program; ?></td>
                    <td><?= $data->nama_donatur; ?></td>
                    <td><?= $data->email; ?></td>
                    <td><?= $data->pesan; ?></td>
                    <td><?= $data->nominal; ?></td>
                    <td><?= $data->metode_pembayaran; ?></td>
                    <td align="center">
                      <a class="btn btn-danger" href="<?= base_url('admin/donasi/hapus/') . $data->id_donasi; ?>" onclick="return confirm('Yakin Hapus?');"> Hapus</a>
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