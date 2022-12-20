<footer class=" text-white p-3 small" style="background-color: rgb(63, 63, 63)">
    <div class="text-center">&copy;Copyright <?php echo date("Y"); ?> The Prediksi
    </div>
</footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>dist/js/adminlte.min.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script src="<?= base_url('assets/template/gijgo/js/gijgo.min.js') ?>"></script>
  <script src="<?= base_url('assets/template/js/'); ?>sweetalert2.min.js"></script>
  <script>
    /** add active class and stay opened when selected */
    var url = window.location;
    // for sidebar menu entirely but not cover treeview 
    $('ul.nav-sidebar a').filter(function() {
      return this.href == url;
    }).addClass('active');
    // for treeview 
    $('ul.nav-treeview a').filter(function() {
      return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
  </script>

</body>

</html>