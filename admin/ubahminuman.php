<?php
include('config.php');
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM beverages WHERE id ='$id'");
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../image/LogoMbahkakung.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <center><span class="brand-text font-weight-light">Admin</span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a> <!-- ini nanti diganti sama nama username dari database -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <p>Daftar Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="makanan.php" class="nav-link">
                  <p>Makanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="minuman.php" class="nav-link active">
                  <p>Minuman</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Minuman</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <form action="ubahminuman.php" method="post" >
        <input type="hidden" value="<?php echo $baris['id'];?>" name="id">
            <div class="form-group">
                <label>Nama Minuman</label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Minuman" value="<?php echo $baris['name'];?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="price" placeholder="Masukkan Harga" value="<?php echo $baris['price'];?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea type="text" class="form-control" rows="3" name="description" placeholder="Masukkan Keterangan Minuman"><?php echo $baris['description'];?></textarea>
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
    // include_once("config.php");
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $query = mysqli_query($connection, "SELECT * FROM beverages WHERE id='$id'");
	      $baris = mysqli_fetch_array($query);

        // Insert user data into table
        $result = mysqli_query($connection, "UPDATE beverages SET name='$name', price='$price', description='$description' WHERE id=$id");
        
        // memberikan allert
        echo "<script>window.location.href='minuman.php'</script>";
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
