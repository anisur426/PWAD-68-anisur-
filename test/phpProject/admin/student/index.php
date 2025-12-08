<?php
include_once("inc/db_config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $control_URL ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $control_URL ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $control_URL ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $control_URL ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $control_URL ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("../inc/nvber.php") ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include("../inc/leftber.php")
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- /.card -->
              <?php
              if (isset($_SESSION['msg'])) {
                echo '<div class="alert alert-success">' . $_SESSION['msg'] . '</div>';
                session_destroy();
                //session_unset();
              }

              ?>

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>date of birth</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT * FROM employees";
                      $rawdata = $conn->query($sql);
                      ?>
                      <?php
                      while ($row = $rawdata->fetch_object()) :
                      ?>

                        <tr>
                          <td><?php echo $row->employeeID ?></td>
                          <td><?php echo $row->first_name ?></td>
                          <td><?php echo $row->last_name ?></td>

                          <td><?php echo $row->birthdate ?></td>

                          <td class="text-center">
                            <a href="student_edit.php?stid=<?php echo $row->employeeID; ?>"> <i class="fas fa-edit"></i></a>
                            &nbsp;
                            <a onclick="return('are you sure to delete?')" href="student_delete.php?stid=<?php echo $row->employeeID; ?>"> <i class="fas fa-trash"></i></a>

                          </td>
                        </tr>
                      <?php endwhile ?>

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>date of birth</th>
                        <th>Action</th>
                      </tr>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("../inc/footer.php"); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo $control_URL ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $control_URL ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?php echo $control_URL ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo $control_URL ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $control_URL ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo $control_URL ?>dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>