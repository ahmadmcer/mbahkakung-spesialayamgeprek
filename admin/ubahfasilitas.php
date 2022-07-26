<?php
require 'accountcheck.php';
include('config.php');
$id = 1;
$query = mysqli_query($connection, "SELECT * FROM fasilitas WHERE id ='$id'");
$baris = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Fasilitas</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->   

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <form action="ubahfasilitas.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Fasilitas</label>
                <textarea type="text" class="form-control" rows="3" name="fasilitas" placeholder="Masukkan Keterangan Fasilitas"><?php echo $baris['fasilitas'];?></textarea>
            </div>
            <div class="form-group">
                <label>Fasilitas2</label>
                <textarea type="text" class="form-control" rows="3" name="fasilitas2" placeholder="Masukkan Keterangan Fasilitas"><?php echo $baris['fasilitas2'];?></textarea>
            </div>
            <div class="form-group">
                <label>Fasilitas3</label>
                <textarea type="text" class="form-control" rows="3" name="fasilitas3" placeholder="Masukkan Keterangan Fasilitas"><?php echo $baris['fasilitas3'];?></textarea>
            </div>
            <div class="form-group">
                <label>Fasilitas4</label>
                <textarea type="text" class="form-control" rows="3" name="fasilitas4" placeholder="Masukkan Keterangan Fasilitas"><?php echo $baris['fasilitas4'];?></textarea>
            </div>
        
            <div>
                <button type="submit" name="Submit" value="edit" class="btn btn-primary">Submit</button>
            </div>
      </form>
      </div><!-- /.container-fluid -->
    </div> <!-- /.content -->
  </div><!-- /.content-wrapper -->

  <?php
    
    // include database connection file
    // include_once("config.php");
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = 1;
        $fasilitas = $_POST['fasilitas'];
        $fasilitas2 = $_POST['fasilitas2'];
        $fasilitas3 = $_POST['fasilitas3'];
        $fasilitas4 = $_POST['fasilitas4'];
    
        // Insert user data into table
        $result = mysqli_query($connection, "UPDATE fasilitas SET fasilitas='$fasilitas', fasilitas2='$fasilitas2', fasilitas3='$fasilitas3',fasilitas4='$fasilitas4'  WHERE id=$id");

        // memberikan allert
        echo "<script>window.location.href='ubahfasilitas.php'</script>";
      } 
    ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!--<div class="float-right d-none d-sm-inline">
      Anything you want
    </div>-->
    <!-- Default to the left -->
    <strong>&copy; Mbah Kakung, All Right Reserved 2022</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
