 <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">  </script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- sweet aleart -->

<script src="assets/js/pages/dashboard2.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

  
    if (isset($_SESSION['title']) && isset($_SESSION['text']) &&isset($_SESSION['icon']) && isset($_SESSION['button']) ) {?>
          <script>
            swal({
                title: " <?php echo $_SESSION['title']?>",
                text: "<?php echo $_SESSION['text']?>",
                icon: "<?php echo $_SESSION['icon']?>",
                button: "<?php echo $_SESSION['button']?>",
              });
          </script>
<?php unset( $_SESSION['title']); unset( $_SESSION['text']); unset( $_SESSION['icon']); unset( $_SESSION['button']);} ?>

<script type="text/javascript">
     $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>>

</body>
</html>