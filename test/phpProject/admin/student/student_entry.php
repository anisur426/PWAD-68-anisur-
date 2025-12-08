<?php
include("../inc/db_config.php");
session_start();

// যদি লগইন করা থাকে → index.php তে পাঠানো হবে
if (isset($_SESSION['loggedin'])) {
  header("Location:index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Entry</title>

  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php include("../inc/top_navber.php") ?>
    <?php include("../inc/leftber.php") ?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <h1>Student Entry</h1>
        </div>
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">

              <?php
              if (isset($_POST['submit'])) {

                $first_name  = $_POST['first_name'];
                $last_name   = $_POST['last_name'];
                $birth_date  = $_POST['birth_date'];
                $note        = $_POST['note'];
                $fullpath    = "";

                // ---- FILE UPLOAD ----
                if (isset($_FILES['photo']) && $_FILES['photo']['name'] != "") {

                  $photo_name = time() . "_" . $_FILES['photo']['name'];
                  $tmp_name   = $_FILES['photo']['tmp_name'];
                  $upload_path = "students/uploads/";

                  // Folder না থাকলে তৈরি করবে
                  if (!file_exists($upload_path)) {
                    mkdir($upload_path, 0777, true);
                  }

                  $fullpath = $upload_path . $photo_name;
                  move_uploaded_file($tmp_name, $fullpath);
                }

                // ---- SQL INSERT ----
                $sql = "INSERT INTO employees (Fname, Lname, dob, notes, photo) 
                        VALUES ('$first_name', '$last_name', '$birth_date', '$note', '$fullpath')";

                if ($conn->query($sql)) {
                  echo '<div class="alert alert-success">Successfully Inserted</div>';
                } else {
                  echo '<div class="alert alert-danger">Error: ' . $conn->error . '</div>';
                }
              }
              ?>

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add New Student</h3>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                  <div class="card-body">

                    <div class="form-group">
                      <label>Fname</label>
                      <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Lname</label>
                      <input type="text" name="last_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>DOB</label>
                      <input type="date" name="birth_date" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Notes</label>
                      <input type="text" name="note" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Photo</label>
                      <input type="file" name="photo" class="form-control">
                    </div>

                  </div>

                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

            </div>

          </div>
        </div>
      </section>

    </div>

    <?php include("../inc/footer.php") ?>

  </div>
</body>

</html>