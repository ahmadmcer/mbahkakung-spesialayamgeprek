<?php
require ('admin/config.php');
$minuman = mysqli_query($connection, "Select * FROM beverages");
$makanan = mysqli_query($connection, "Select * FROM food");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Daftar Menu</title>
    <link rel="icon mbah kakung" href="image/favicon_io/favicon.ico">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>

        <!-- Navbar -->
        <nav id="navbar-profile" class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container-fluid">
                
                <!-- LOGO NAVBAR -->
                <a class="navbar-brand" href="#">
                    <img id="logo" src="image/LogoMbahkakung.png" alt="">
                </a>

                <!-- NAVBAR TOGGLER -->
                <!-- Muncul saat ukuran layar kecil (mobile) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENU NAVBAR -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="menu.php">DAFTAR MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>
    <main>
        <!-- Judul -->
        <div id="profile" class="container my-5">
            <div class="row">
                <div class="col">
                    <h2 class="judul-profile">Daftar Menu Makanan</h2>
                </div>
                <!-- Card Box -->
                <div class="row">
                <?php $i = 1;?>
                    <?php foreach ($makanan as $barismakanan) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="image/<?= $barismakanan["picture"];?>" alt="Card image cap" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><b><?= $barismakanan["name"];?></b></h4>
                                <p class="card-text">Rp<?= $barismakanan["price"];?></p>
                                <p class="card-text"><?= $barismakanan["description"];?></p><br><br>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div id="profile" class="container my-5">
            <div class="row">
                <div class="col">
                    <h2 class="judul-profile">Daftar Menu Minuman</h2>
                </div>
                <!-- Card Box -->
                <div class="row">
                    <?php $i = 1;?>
                    <?php foreach ($minuman as $barisminuman) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="image/<?= $barisminuman["picture"];?>" alt="Card image cap" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><b><?= $barisminuman["name"];?></b></h4>
                                <p class="card-text">Rp<?= $barisminuman["price"];?></p>
                                <p class="card-text"><?= $barisminuman["description"];?></p><br><br>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center py-3">
                <span class="text-muted">&copy; Mbah Kakung, All Right Reserved 2022</span>
            </div>
        </footer>
    </main>
</body>
</html>