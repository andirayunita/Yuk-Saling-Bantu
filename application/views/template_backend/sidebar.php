  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li class="<?= ($title == "Dashboard") ? 'active' : '' ?>"><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="<?= ($title == "Data User") ? 'active' : '' ?>"><a href="<?= base_url('admin/user'); ?>"><i class="fa fa-users"></i> <span>Data User</span></a></li>
        <li class="<?= ($title == "Data Donasi") ? 'active' : '' ?>"><a href="<?= base_url('admin/donasi'); ?>"><i class="fa fa-gift"></i> <span>Data Donasi</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->