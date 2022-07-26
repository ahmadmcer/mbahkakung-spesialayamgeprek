<?php
require 'accountcheck.php';
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
            <h1 class="m-0">Tambah Minuman</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <form action="tambahminuman.php" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>Nama Minuman</label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Minuman">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="price" placeholder="Masukkan Harga">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea type="text" class="form-control" rows="3" name="description" placeholder="Masukkan Keterangan Minuman"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
            </div>
            <div>
                <button type="submit" name="Submit" value="Add" class="btn btn-primary">Submit</button>
            </div>
      </form>
      </div><!-- /.container-fluid -->
    </div> <!-- /.content -->
  </div><!-- /.content-wrapper -->

  <?php
    
    // include database connection file
    include_once("config.php");
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $picture = $_FILES['picture']['name'];
        $tmp_name = $_FILES['picture']['tmp_name'];
        $path = "../image/".$picture;
        move_uploaded_file($tmp_name, $path);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
    
        // Insert user data into table
        $result = mysqli_query($connection, "INSERT INTO beverages VALUES('','$picture','$name','$price','$description')");

        // memberikan allert
      echo "<script>alert('Makanan Berhasil Ditambahkan!')</script>";
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
