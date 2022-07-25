<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- TITLE -->
    <title>Mbah Kakung</title>
    <link rel="icon mbah kakung" href="image/favicon_io/favicon.ico">
    
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- HEADER -->
    <header>
        
        <!-- NAVBAR -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
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
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="profile.php">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="menu.php">DAFTAR MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>

    </header>

    <!-- MAIN -->
    <main>

        <!-- HOME TITLE -->
        <div id="home">
            <h1 class="home-title">Gratis!</h1>
            <h3 class="home-subtitle">Tambah Nasi + Es Teh</h3>
            <h1 class="home-title">Sepuasnya!</h1>
            <a href="profile.html" class="btn btn-outline-light home-btn">Profile</a>
        </div>

        <!-- SEJARAH -->
        <div id="visi-misi" class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="visi-misi-title py-4">Sejarah<br>Mbah Kakung</h1><br>
                    <h5 class="desc-sejarah" align="justify">
                        Asal mula Mbah Kakung ini adalah, pertama kali didirikan
                        untuk mengenang Almarhum dari Bapak Owner sendiri. Kemudian,
                        termotivasi dalam merintis sebuah tempat makan, yang murah dan
                        memiliki cita rasa identik dengan jogja. Kemudian, kita buat
                        menu paket dan merelease slogan yaitu <h4 class="visi-title">Mantab, Murah, Kenyang dan Puas</h4> 
                    </h5>
                </div>
                <div class="col-sm-6 py-4">
                    <img src="image/chvmresized.jpg" class="visi-misi-image" alt="">
                </div>
            </div>
        </div>
        <!-- Fasilitas Mbah Kakung -->
        <div id="fasilitas-mbah" class="container mt-5">
          <h1 class="fasilitas-mbah-title py-4">Fasilitas Mbah Kakung</h1>
        </div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-sm-6">
              <img  class="fasilitas-mbah-img" src="image/home_fas2.jpg" alt="">
            </div>
            <div class="col-sm-6">
              <img class="fasilitas-mbah-img" src="image/home_fas1.jpg" alt="">
            </div>
            <div class="col-sm-6">
              <p class="nama-fasilitas">Tempat Makan Lesehan</p>
            </div>
            <div class="col-sm-6">
              <p class="nama-fasilitas">Mini Bar Coffee</p>
            </div>
          </div>
          <div id="fasilitas-lainnya-akhir" class="container mt-5">
            <h1 class="fasilitas-lainnya py-4">Fasilitas Lainnya:</h1>
            <ul id="list-fasilitas-lainnya">
              <li>Kamar Mandi</li>
              <li>Mushola</li>
              <li>Free Wifi</li>
              <li>Music</li>
            </ul>
          </div>
        </div>

    </main>
    
    <footer class="footer">
        <div class="container text-center py-3">
            <span class="text-muted">&copy; Mbah Kakung, All Right Reserved 2022</span>
        </div>
    </footer>


    <!-- BOOTSTRAP BUNDLE JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- JQUERY JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- CUSTOM JS -->
    <script src="js/script.js"></script>
</body>
</html>