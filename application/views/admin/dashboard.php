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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Yuk Saling Bantu</h3>
        </div>
        <div class="box-body text-center">
          <h4>Selamat Datang di Halaman Admin  Website Yuk Saling Bantu</h4>
          <div class="row">
          	<div class="col-md-4"></div>
          	<div class="col-md-4">
          		<table class="table table-bordered table-striped">
          	<tr>
          		<th>Nama</th>
          		<th>:</th>
          		<th><?= $this->session->userdata('nama'); ?></th>
          	</tr>
          	<tr>
          		<th>Username</th>
          		<th>:</th>
          		<th><?= $this->session->userdata('username'); ?></th>
          	</tr>
          </table>
          	</div>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
