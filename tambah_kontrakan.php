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
    <title>Daftar Kontrakan</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<?php

require 'function.php';

$kontrakan = query("SELECT * FROM kontrakan");

if (isset($_POST['save'])) {
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    // tuk upload gambar 
    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $ekstensi)) {
        header("location:index.php");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '.' . $ext;
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/' . $rand . '.' . $ext);
            // mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$nama','$kontak','$alamat','$xx')");
            $insert_data = mysqli_query($koneksi, "INSERT INTO kontrakan (tipe, harga, deskripsi, gambar) VALUES ('$tipe','$harga','$deskripsi', '$xx')");
            if ($insert_data) {
                $got = "kontrakan telah ditambahkan";
                $_SESSION['success_message'] = $got;
                header('Location: tambah_kontrakan.php');
                exit;
            } else {
                echo "<script>alert('kontrakan gagal disimpan!')</script>";
            }
            // header("location:index.php?alert=berhasil");
        } else {
            header("location:index.php?alert=gagak_ukuran");
        }
    }
}

if (isset($_GET['hapus'])) {
    mysqli_query($koneksi, "DELETE FROM kontrakan WHERE no_kontrakan = '$_GET[hapus]'");
    echo "<script>
    alert('Kontrakan berhasil dihapus')
    document.location.href='tambah_kontrakan.php'
    </script>";
}


if (isset($_SESSION['success_message'])) {
    $got = $_SESSION['success_message'];
    unset($_SESSION['success_message']); // hapus pesan dari session
}

$i = 1
?>
<style>
    /* admin.css */

    body {
        font-family: "Arial", sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f2f2f2;
        overflow: hidden;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    .navbar a.active {
        background-color: #4caf50;
        color: white;
    }

    .navbar .icon {
        display: none;
    }

    @media screen and (max-width: 600px) {
        .navbar a:not(:first-child) {
            display: none;
        }

        .navbar a.icon {
            float: right;
            display: block;
        }

        .navbar.responsive a.icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .navbar.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
    }

    h1 {
        color: #333;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4caf50;
        color: white;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .navbar a {
        display: block;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
        background-color: #4caf50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    a:hover {
        background-color: #45a049;
    }

    .button a {
        display: block;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
        background-color: #ff0000;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    /* Add more styles as needed */
</style>


<body>
    <div class="navbar" id="myNavbar">
        <a href="homeadmin.php" class="active">Home</a>
        <a href="tambah_kontrakan.php">Kelola Kontrakan</a>
        <a href="dashboard.php">Konfirmasi Pemesanan</a>
        <a href="dashboard_sudah.php">Riwayat Konfirmasi</a>
        <a href="#" class="icon" onclick="toggleNavbar()">
            &#9776;
        </a>
    </div>
    <!-- Java script navbar -->
    <script>
        function toggleNavbar() {
            var navbar = document.getElementById("myNavbar");
            if (navbar.className === "navbar") {
                navbar.className += " responsive";
            } else {
                navbar.className = "navbar";
            }
        }
    </script>

    <!-- list kontrakan -->
    <div class="list">
        <table border="1px" cellspacing="0">
            <thead>
                <th>No</th>
                <th>No Kontrakan</th>
                <th>tipe</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </thead>
            <tbody class="button">
                <?php foreach ($kontrakan as $value) { ?>
                    <tr>
                        <td align="right"><?= $i++ ?></td>
                        <td><?= $value['no_kontrakan'] ?></td>
                        <td><?= $value['tipe'] ?></td>
                        <td align="right"><?= number_format($value['harga']) ?></td>
                        <td><?= $value['deskripsi'] ?></td>
                        <td><a href="?hapus= <?= $value['no_kontrakan'] ?>">Hapus</a></td>
                    </tr>
                <?php } ?> <h1>Detail Kontrakan</h1>
            </tbody>
        </table>
    </div>

    <!-- Form -->
    <div class="container">
        <div class="form" id="tambah">
            <div class="judul">
                <h1> Tambah Kontrakan </h1>
            </div>
            <div class="isian">
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td colspan="3">
                                <?php if (!empty($error)) { ?>
                                    <p class="alert"><?php echo $error; ?></p>
                                <?php } ?>
                                <?php if (!empty($got)) { ?>
                                    <p class="got"><?php echo $got; ?></p>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tipe</td>
                            <td>:</td>
                            <td><input type="text" name="tipe" required></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><input type="number" name="harga" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td><input type="text" name="deskripsi"></td>
                        </tr>
                        <tr>
                            <td>File</td>
                            <td>:</td>
                            <td><input type="file" name="gambar"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <button type="submit" name="save">Save</button>
                                <button type="reset" name="reset">Reset</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        function konfirmasi() {
            return confirm('Apakah Anda yakin ingin menghapus kontrakan ini?');
        }
    </script>
</body>

</html>