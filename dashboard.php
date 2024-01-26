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
    <title>Admin Kontrakan</title>

</head>

<?php

require 'function.php';

$pesanan = query("SELECT pemesanan.*, pembayaran.*, kontrakan.*
                FROM pemesanan LEFT JOIN pembayaran ON pemesanan.id_bayar = pembayaran.id_pembayaran
                LEFT JOIN kontrakan ON pemesanan.no_kontrakan = kontrakan.no_kontrakan
                WHERE pemesanan.status = 'belum'");

if (isset($_GET['terima'])) {

    mysqli_query($koneksi, "UPDATE pemesanan SET status = 'sudah' WHERE id_pesanan ='$_GET[terima]'");
    echo "<script>
    alert('Pesanan telah diterima')
    document.location.href = 'dashboard.php'
    </script>";
}

if (isset($_GET['tolak'])) {

    mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pesanan ='$_GET[tolak]'");
    echo "<script>
    alert('Pesanan telah ditolak')
    document.location.href = 'dashboard.php'
    </script>";
}

$i = 1

?>

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
    <!-- javascript end -->

    <h1> Admin Konrifmasi </h1>

    <table border="1px" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Jenis Kelamin</th>
            <th>Pembayaran</th>
            <th>No. Kontrakan</th>
            <th>Action</th>
        </thead>
        <tbody class="button">
            <?php foreach ($pesanan as $value) { ?>
                <tr>
                    <td align="right"><?= $i++ ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['no_tlp'] ?></td>
                    <td><?= $value['jk'] ?></td>
                    <td><?= $value['metode_bayar'] ?></td>
                    <td align="right"><?= $value['no_kontrakan'] ?></td>
                    <td align="center">
                        <div class="terima">
                            <a href="?terima= <?= $value['id_pesanan'] ?>">Terima</a>
                        </div>
                        <a href="?tolak= <?= $value['id_pesanan'] ?>" onclick="return konfirmasi(); ">Tolak</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <style>
        /* style css */

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

        .button .terima a {
            display: block;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            background-color: #4caf;
            color: white;
            text-decoration: none;
            border-radius: 5px;
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
</body>

</html>