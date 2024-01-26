
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontrakan Online</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>

  <body>
  </body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* Tambahkan CSS berikut untuk mengatur tampilan submenu */
    .navbar-nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar-nav li {
      position: relative;
      list-style: none;
      /* Menambahkan CSS untuk menghilangkan titik-titik pada tulisan di navbar */
    }

    .navbar-nav a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      margin: 0 15px;
      display: block;
    }

    .navbar-nav a:hover {
      color: #04ac20;
    }

    .submenu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #0505057c;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
      z-index: 1;
    }

    .navbar-nav li:hover .submenu {
      display: block;
    }

    .submenu a {
      display: block;
      padding: 10px;
      color: #333;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .submenu a:hover {
      background-color: #009b088a;
      color: #fff;
    }

    .navbar-search {
      display: flex;
      align-items: center;
    }

    .search-form {
      position: relative;
      margin-left: 15px;
      /* Sesuaikan dengan margin yang diinginkan */
    }

    #search-box {
      padding: 10px;
      border: none;
      border-radius: 5px;
      width: 200px;
    }

    label[for="search-box"] {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
    }
  </style>
</head>

<body>


  <style>
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #20202000;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    .navbar-logo {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    .navbar-logo img {
      width: 50px;
    }

    .navbar-nav {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navbar-nav li {
      position: relative;
      margin-right: 20px;
    }

    .navbar-nav a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    .navbar-nav a:hover {
      color: #04ac20;
    }

    .submenu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #ffffff8f;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
      z-index: 1;
    }

    .navbar-nav li:hover .submenu {
      display: block;
    }

    .submenu a {
      display: block;
      padding: 10px;
      color: #333;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .submenu a:hover {
      background-color: #009b088a;
      color: #fff;
    }

    .navbar-search {
      display: flex;
      align-items: center;
    }

    .search-form {
      position: relative;
      margin-right: 20px;
    }

    #search-box {
      padding: 10px;
      border: none;
      border-radius: 5px;
      width: 200px;
    }

    label[for="search-box"] {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
    }
  </style>
  </head>

  <?php

  require 'function.php';

  $kontrakan = query("SELECT * FROM kontrakan");

  ?>

  <body>

    <nav class="navbar">
      <a href="#" class="navbar-logo"><img src="image/logo_kontrakan-removebg-preview.png" width="50"></a>
      <div class="navbar-nav">
        </li>
        <li><a href="#home">Home</a></li>
        <li>
          <a href="#about">Katalog Kontrakan</a>
          <ul class="submenu">
            <li><a href="tipekontrakan.php">3 Pintu</a></li>
            <li><a href="tipekontrakan.php">4 pintu</a></li>
          </ul>
        </li>
        <li>
          <a href="#menu">Pesanan</a>
          <ul class="submenu">
            <li><a href="pesanan.php">Buat Pesanan</a></li>
            <li><a href="notifpesanan.php">Notifikasi Pesanan</a></li>
          </ul>
        </li>
        <li>
          <a href="#contact">Pengaturan</a>
          <ul class="submenu">
            <li><a href="#">Akun</a></li>
            <li><a href="#">Keamanan</a></li>
          </ul>
        </li>
        <li>
          <a href="login.php">Log In</a>
        </li>
        <li><a href="login.php"><img src="./image/logout.png" width="30"></a></li>
      </div>
    </nav>
  </body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/normalizenavbar.css">
  <script src="js/navbar.js"></script>
</head>

<body>
  <div class="screen">
    <header>
      <!-- Posisikan tombol di depan header -->
      <a class="target-burger" style="margin-top: 80px;">
        <ul class="buns">
          <li class="bun"></li>
          <li class="bun"></li>
        </ul>
      </a>

      <!-- Navbar Menu Disamping-->
      <nav class="main-nav" role="navigation">
        <ul>
          <li><a href=""><span></span></a></li>
          <li><a href=""><span></span></a></li>
          <li><a href="tipekontrakan.php"><span>Katalog Kontrakan</span></a></li>
          <li><a href="pesanan.php"><span>Pesanan</span></a></li>
          <li><a href="keamanan.php"><span>Pengaturan</span></a></li>
          <li><a href=""><span></span></a></li>
        </ul>
      </nav>
    </header>

    <div class="container">
      <div class="app-content">

      </div>
    </div>
  </div>

</body>

</html>

<!-- Navbar End -->

<!-- Hero Section Start -->
<!-- Supaya nanti ketika user klik menu di navbar atau nnti di footer bagian home makaa
    dia akan mengarah ke id nya yaitu home jadi saat user klik user akan mengarah ke bagian paling atas
  dari hero section nya -->
<section class="hero" id="home">
  <main class="content">
    <h1>Cari Kontrakan Yang <span>Dekat?</span></h1>
    <p>
      Coba Kontrakan Haji Minan, Harga Terjangkau dan Fasilitas Pasti Mumpuni.
    </p>
    <!-- selanjutnya kita butuh sebuah link yg nnti bentuknya seperti tombol -->
    <!-- ingat jikalau salah satu kata yg diganti warna mka hrus dibungkus dengan tag Span -->
  </main>
</section>
<!-- didalam section kita buat satu elemen yaitu main dimna nnti tersimpan
    semua elemen2 utama dri bagian section ini kenapa buat main karen section nya akan kita bikin
  agar ukurannya satu layar dan punya bckground image sedgkan main itu untuk menyimpan
elemen elemen isinya -->
<!-- Hero Section End -->
<!-- About Section Start-->
<section id="about" class="about">
  <h2><span>Tentang</span> Kontrakan</h2>
  <div class="row">
    <div class="about-img">
      <img src="image/tentang-kami.jpg" alt="Tentang Kami" />
      <!-- membantu membuat konten web lebih dapat diakses bagi 
      pengguna dengan kebutuhan khusus, seperti pengguna 
      yang menggunakan pembaca layar. Ketika gambar tidak dapat 
      dimuat atau diakses, teks alternatif dari atribut alt dapat
      dibacakan oleh pembaca layar untuk memberikan informasi tentang
       konten gambar. -->
    </div>
    <div class="content">
      <h3>Kenapa Memilih Kontrakan Kami?</h3>
      <p>
        Karena Kontrakan Haji Minan Memiliki Beberapa Keunggulan Mulai Dari Harga yang Terjangkau sampai Tempat yang Strategis untuk di Tinggali.
      </p>
      <p>
        Selain itu Kontrakan Haji Minan Terdapat di Beberapa ttitik yang Strategis untuk anda Yang sudah Bekerja dan Tidak ingin Kerepotan dalam Memasukan barang Ataupun mengeluarkan barang.
      </p>
    </div>
  </div>
</section>
<!-- About Section End-->
<!-- Menu Section Start -->
<section id="menu" class="menu">
  <h2><span>Contoh Beberapa</span> Kontrakan Kami</h2>
  <p>
    Selamat datang di website kontrakan kami, silahkan dilihat-lihat kontrakannya
  </p>
  <div class="row">
    <div class="menu-card">
      <img src="image/Menu/Kontrakan1.jpg" alt="Espresso" class="menu-card-img" />
      <h3 class="menu-card-title">Kontrakan 3 Pintu</h3>
      <p class="menu-card-price">IDR 600.000,-</p>
    </div>
    <div class="menu-card">
      <img src="image/Menu/Kontrakan2.jpg" alt="kopihati" class="menu-card-img" />
      <h3 class="menu-card-title">Kontrakan 3 Pintu</h3>
      <p class="menu-card-price">IDR 600.000,-</p>
    </div>
    <div class="menu-card">
      <img src="image/Menu/Kontrakan3.jpg" alt="Kopihitam" class="menu-card-img" />
      <h3 class="menu-card-title">Kontrakan 3 pintu</h3>
      <p class="menu-card-price">IDR 600.000,-</p>
    </div>
  </div>
  <!-- agar tulisan Menu Kami Sama ke tengah seperti
      Tentang Kami Caranya hanya cari about h2 dan about diatas di css nya dikasih
    koma(,) lalu tambahkan .Menu maka akan otomatis ke tengah  -->
</section>
<!-- Menu Section End -->
<!-- Contact Section Start -->
<section id="contact" class="contact">
  <h2><span>Kontak</span> Kami</h2>
  <p>
    Jikalau ada yang ingin diketahui lebih lanjut mengenai bisnis atau
    permasalahan lain bisa hubungi kontak kami
  </p>
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7930.467624102001!2d107.121634!3d-6.363779!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699ba2860013f5%3A0x8af986808c1a38d3!2sKontrakan%20haji%20minan(kebon%20kopi)!5e0!3m2!1sid!2sid!4v1705374928729!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
    <!-- form ini didalamnya saya akan memberikan beberapa elemen seperti nama, email, dan
          nomor hp untuk mendata calon pelanggan -->
    <form action="">
      <div class="input-group">
        <i data-feather="user"></i>
        <input type="text" placeholder="nama" />
      </div>
      <div class="input-group">
        <i data-feather="phone"></i>
        <input type="text" placeholder="no hp" />
      </div>
      <a href="https://wa.me/62895331538636" target="_blank" class="btn"> Wa Admin </a>
    </form>
  </div>
</section>
<!-- Contact Section End -->
<!-- Footer Start -->
<!-- di footer punya elemen html nya sendiri jadi gaperlu make section
    langsung footer -->
<footer>
  <!-- didalam footer ada 3 bagian -->
  <!-- pertama yang link ke social media, kedua link ke section yg sma sprti di navbar, ketiga copyright -->
  <div class="socials">
    <!-- a href ini akan mengarah ke social media kita dan dikasih ikon yaitu i data feather -->
    <a href="#"><i data-feather="instagram"></i></a>
    <a href="#"><i data-feather="twitter"></i></a>
    <a href="#"><i data-feather="facebook"></i></a>
  </div>
  <div class="links">
    <a href="#home">Home</a>
    <a href="#about">Tentang Kontrakan</a>
    <a href="#menu">Kontrakan</a>
    <a href="#contact">Kontak</a>
  </div>
  <div class="credit">
    <p>
    <h2>Created by <a href="">Hoirul Anam</a> . | &copy; 2024.</h2>
    <h2>Email <a href="mailto:anamhoirul437@gmail.com">anamhoirul437@gmail.com</a></h2>
    </p>
  </div>
</footer>
<!-- Footer End -->
</body>

</html>