<?php
require ('config.php');
$minuman = mysqli_query($connection,"Select * FROM beverages");
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
            <h1 class="m-0">Daftar Minuman</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;?>
              <?php foreach ($minuman as $baris) : ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><img src="../image/<?= $baris["picture"];?>" alt="" width="300px"></td>
                  <td><?= $baris["name"];?> </td>
                  <td><?= $baris["price"];?> </td>
                  <td><?= $baris["description"];?> </td>
                  <td>
                    <a href="ubahminuman.php?id=<?php echo $baris['id'];?>"><button type="button" class="btn btn-block btn-info btn-sm">Ubah</button></a>
                    <a href="hapusminuman.php?id=<?php echo $baris['id'];?>"><button type="button" class="btn btn-block btn-outline-danger btn-sm">Hapus</button></a>
                  </td>
                </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
            <a href="tambahminuman.php">  
              <button type="button" class="btn btn-block bg-gradient-warning">Tambah Minuman</button>
            </a>
        </div>
      </div><!-- /.container-fluid -->
    </div> <!-- /.content -->
  </div><!-- /.content-wrapper -->

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