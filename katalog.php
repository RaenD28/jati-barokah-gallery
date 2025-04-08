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




    <!-- JUDUL KATALOG -->
    <section class="judul-katalog">
        <h1 style="text-align: center"> Katalog </h1>
    </section>




    <!-- ISI KATALOG -->
    <section class="isi-katalog">
        <div class="download-katalog">
            <h2> Download Katalog anda di sini </h2>
            <img src="Katalog Jati Barokah/preview-katalog.jpg" alt="" class="preview-katalog">
            <a href="Katalog Jati Barokah/Katalog Jati Barokah.pdf" download="Katalog Jati Barokah Gallery"
                class="tombol-download">
                Download
            </a>
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