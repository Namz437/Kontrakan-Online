<?php
session_start();

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<?php
include 'function.php';
$querry = "SELECT pemesanan.*, pembayaran.* from pemesanan LEFT JOIN pembayaran ON pemesanan.id_bayar = pembayaran.id_pembayaran";
$result =  mysqli_query($koneksi, $querry);
// $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>

<body>
    <h1 class="animated-heading">Pembayaran</h1>
    <form action="" method="post">
        <table border="1px" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>No Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Pembayaran</th>
                    <th>Konfirmasi_Admin</th>
                    <th>Kontrakan</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($result && $row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['no_tlp']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['metode_bayar']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['no_kontrakan']; ?></td>
                        <td>
                            <?php
                            if ($row['gambar'] != true) { ?>

                                <a href="upload_bukti.php?id=<?= $row['id_pesanan'] ?>">Pembayaran</a>

                            <?php } ?>




                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <br>
        <div class="bwh">
            <a href="notifpesanan.php"> Kembali </a>
        </div>
        <?php
        //         $queryinfopembayaran = "SELECT pembayaran.id_pembayaran from pembayaran ";

        //         $resulinfopembayaran = mysqli_query($koneksi, $queryinfopembayaran);
        //         if(!$resulinfopembayaran){
        //             die("Error in fetching admin information: " . mysqli_error($koneksi));
        //         }
        //         $rowinfopembayaran =mysqli_fetch_assoc($resulinfopembayaran);
        //         $idpembayaran = $rowinfopembayaran['id_pembayaran'];

        //         // Ambil path foto profil dari tabel 'profil'
        // $queryGetgambar = "SELECT gambar FROM pembayaran WHERE id_pembayaran = '$idpembayaran'";
        // $resultGetgambar = mysqli_query($koneksi, $queryGetgambar);

        // // Periksa apakah $rowProfilFoto tidak null sebelum mengakses propertinya
        // if ($rowgambar = mysqli_fetch_assoc($resultGetgambar)) {
        //     $gambar = $rowgambar['gambar'];
        // } else {
        //     // Tangani kasus di mana $rowProfilFoto bernilai null (misalnya, tetapkan nilai default)
        //     $gambar = "path/to/default/photo.jpg";
        // }
        // 
        ?>



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

            .bwh a {
                text-decoration: none;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                background-color: #007BFF;
                color: #fff;
                border-radius: 8px;
            }

            /* Add more styles as needed */
        </style>


</body>


</html>