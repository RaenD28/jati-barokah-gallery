<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon-jati-barokah-05.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/detail-produk.css">
    <link rel="stylesheet" href="css/galeri.css">
    <link rel="stylesheet" href="css/katalog.css">
    <link rel="stylesheet" href="css/kategori-produk.css">
    <link rel="stylesheet" href="css/kategori.css">
    <link rel="stylesheet" href="css/kontak.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc767d5de0.js" crossorigin="anonymous"></script>
    <title>Jati Barokah Gallery Bogor</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php include "layout/header.php" ?>
    <!-- <nav class="navbar">
        <div class="logo-nav">
            <a href="/index.html">
                <img src="img/logo jati barokah-icon.png" alt="logo-jati">
            </a>
        </div>

        <div class="navbar-menu">
            <a href="/index.html">Home</a>
            <a href="/profil.html">Profil</a>
            <a href="/kategori.html">Kategori</a>
            <a href="/galeri.html">Galeri</a>
            <a href="/katalog.html">Katalog</a>
            <a href="/kontak.html">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"> <i data-feather="menu"></i></a>
        </div>
    </nav> -->




    <!-- JUDUL GALERI -->
    <section class="judul-galeri">
        <h1 style="text-align: center"> Galeri </h1>
    </section>




    <!-- ISI GALERI -->
    <section class="isi-galeri">
        <div class="isi-foto-galeri">
            <div class="foto-galeri">
                <img src="img/galeri/1.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/2.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/3.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/4.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/5.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/6.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/7.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/8.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/9.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/10.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/11.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/12.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/13.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/14.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/15.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/16.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/17.jpg" alt="">
            </div>
            <div class="foto-galeri">
                <img src="img/galeri/18.jpg" alt="">
            </div>
        </div>

        <div class="foto-popup">
            <span>&times;</span>
            <img src="img/galeri/1.jpg" alt="">
        </div>
    </section>





    <!-- FOOTER -->
    <?php include "layout/footer.php" ?>




    <!-- Script AOS (Animation) -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>

    <!-- Script JS -->
    <script src="js/script.js"></script>

    <!-- Script icon -->
    <script>
        feather.replace();
    </script>
</body>

</html>