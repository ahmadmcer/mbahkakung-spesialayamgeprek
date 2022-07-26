<?php
$name = $_SESSION['name'];

$actual_link = "$_SERVER[REQUEST_URI]";
$page_name = substr($actual_link, 36);
?>

<aside class="main-sidebar sidebar-dark-warning elevation-4">
  <!-- Brand Logo -->
  <a href="logout.php" class="brand-link">
    <img src="../image/LogoMbahkakung.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
    <center><span class="brand-text font-weight-light">Keluar</span></center>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><?php echo $name; ?></a> <!-- ini nanti diganti sama nama username dari database -->
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
              <a href="admin.php" class="nav-link <?php echo ($page_name == "admin.php") ? "active" : "";?>">
                <p>Daftar Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="makanan.php" class="nav-link <?php echo ($page_name == "makanan.php") ? "active" : "";?>">
                <p>Makanan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="minuman.php" class="nav-link <?php echo ($page_name == "minuman.php") ? "active" : "";?>">
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