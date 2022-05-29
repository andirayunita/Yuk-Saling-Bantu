<footer class="main-footer">
  <div class="text-center">
   <strong>Copyright &copy; <?= date('Y'); ?> by<a href=""> Yuk Saling Bantu</a>.</strong>
 </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets/admin/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/admin/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/admin/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/admin/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/admin/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/'); ?>dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/admin/select2/dist/js/'); ?>select2.min.js"></script>
<!-- CK Editor 4 -->
<script src="<?= base_url('assets/admin/ckeditor'); ?>/ckeditor.js"></script>
<script src="<?= base_url('assets/admin/ckeditor/samples'); ?>/js/sample.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>

<script>
  initSample();
</script>

</body>
</html>