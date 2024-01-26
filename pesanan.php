<?php
session_start();

if (empty($_SESSION['login'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Kontrakan Online</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #43ff3daf;
      text-align: center;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
      background-color: #66666636;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #007BFF;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .available-kosan {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .kosan-card {
      width: 200px;
      margin: 10px;
      padding: 10px;
      background-color: #A2FF86;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    /* Tombol Kembali pada pesanan */
    .bwh a {
      text-decoration: none;
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      background-color: #007BFF;
      color: #fff;
      border-radius: 8px;
    }
  </style>
</head>

<?php

require 'function.php';

$kontrakan = query("SELECT * FROM kontrakan");

$pesanan = query("SELECT * FROM pemesanan");

$pembayaran = query("SELECT * FROM pembayaran");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pesan'])) {
  $nama = $_POST['name'];
  $no_tlp = $_POST['phone'];
  $gender = $_POST['gender'];
  $gambar = $_POST['gambar'];
  $pay = $_POST['pay'];
  $kontrakan_pesan = $_POST['kontrakan'];

  $insert_data = mysqli_query($koneksi, "INSERT INTO pemesanan (nama, no_tlp, jk, id_bayar, no_kontrakan) VALUES ('$nama', '$no_tlp', '$gender', '$pay', '$kontrakan_pesan') ");

  if ($insert_data) {
    echo "<script>alert('Pesanan berhasil disimpan!');</script>";
    echo "<script>document.location.href= 'pesanan.php'</script>";
  }
}

?>

<body>

  <form action="" method="post" enctype="multipart/form-data">
    <h2>Pemesanan Kontrakan Online</h2>

    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" required>

    <label for="phone">Nomor Telepon:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="gender">Jenis Kelamin:</label>
    <select id="gender" name="gender" required>
      <option value="male">Laki-laki</option>
      <option value="female">Perempuan</option>
    </select>

    <label for="pay">Jenis Pembayaran</label>
    <select id="pay" name="pay" required>
      <?php foreach ($pembayaran as $metode) { ?>
        <option value="<?= $metode['id_pembayaran'] ?>"><?= $metode['metode_bayar'] ?></option>
      <?php } ?>
    </select>

    <label for="kontrakan">Pilih Kontrakan</label>
    <select id="kontrakan" name="kontrakan" required>
      <?php foreach ($kontrakan as $kamar) { ?>
        <option value="<?= $kamar['no_kontrakan'] ?>"> Kontrakan <?= $kamar['tipe'] ?></option>
      <?php } ?>
    </select>

    <button type="submit" name="pesan">Pesan Sekarang</button>
    <h2> Kontrakan Yang Tersedia </h2>

    <div class="available-kosan">
      <h2></h2>

      <?php foreach ($kontrakan as $kamar) { ?>

        <div class="kosan-card">
          <img src="<?= 'gambar/' . $kamar['gambar'] ?>" alt="Kontrakan 1">
          <input type="hidden" name="kamar" value="<?= $kamar['no_kontrakan'] ?>">
          <p>Kontrakan <?= $kamar['tipe'] ?></p>
          <!-- <form action="admin.php" method="post" enctype="multipart/form-data"> -->
          <!-- <button type="submit" name="pesan">Pesan Sekarang</button> -->
        </div>

      <?php } ?>

      <!-- Tambahkan lebih banyak kosan sesuai kebutuhan -->
    </div>
  </form>
  <br>
  <div class="bwh">
    <a href="homepage.php"> Kembali </a>
  </div>
  <script>
    function selectKosan(kosanName) {
      // Implementasikan logika pemilihan kosan
      alert('Anda telah memilih kontrakan: ' + kosanName);
    }
  </script>

</body>

</html>