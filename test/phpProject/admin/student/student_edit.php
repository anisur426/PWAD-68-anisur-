<?php include("../inc/db_config.php");
session_start();
<<<<<<< HEAD
if (!isset($_SESSION['logggedin'])) {
=======
if (!isset($_SESSION['loggdin'])){
>>>>>>> 8cb1aba2d7e2d9232c63ea4df69a8546ad61b790
  header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("../inc/top_navber.php") ?>
    <!-- /.navbar -->


    <!-- Sidebar -->
    <?php include("../inc/leftber.php") ?>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Student</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
     
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <!-- one student record -->
      <?php
      $id = $_REQUEST['stid'];
      $sql = "SELECT * FROM employees WHERE employeeID='$id'";
      $rowdata = $conn->query($sql);
      $row = $rowdata->fetch_object();

      //print_r($row)
      ?>
            <!-- jquery validation -->
           
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add student</small></h3>

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Fname</label>
                      <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Fname">
                    </div>
                    <div class="form-group">
                      <label>Lname</label>
                      <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" value="<?php echo $row['last_name'] ?>" placeholder="Enter Lname">
                    </div>
                    <div class="form-group">
                      <label>dob</label>
                      <input type="text" name="birth_date" class="form-control" value="<?php echo $row['birthdate'] ?>" id="exampleInputEmail1" placeholder="Enter Lname">
                    </div>
                    <div class="form-group">
                      <label>notes</label>
                      <input type="text" name="note" class="form-control" id="exampleInputEmail1" value="<?php echo  $row['notes'] ?>" placeholder="Enter Lname">
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                       <?php
              if (isset($_POST['update'])) {
                extract($_POST);
                $sql = "UPDATE employees SET first_name='$first_name', last_name='$last_name',birthdate='$birth_date',notes='$note' WHERE employeeID='$id'";

                $conn->query($sql);
                if ($conn->affected_rows); {
                  session_start();
                  $_SESSION['msg'] = "update succesfully";
                  header("Location: index.php");
                  // echo '<div class ="alert alert-success"> succesfully inserted</div>';

                }
              }
              $conn->close();
              ?>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("../inc/footer.php") ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <!--<script>
    $(function() {
      $.validator.setDefaults({
        submitHandler: function() {
          alert("Form successful submitted!");
        }
      });
      $('#quickForm').validate({
        rules: {
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
            minlength: 5
          },
          terms: {
            required: true
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
         <--   -->
</body>

</html>