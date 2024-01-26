<?php
session_start();

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<?php
include 'function.php';
$querry = "SELECT * FROM pemesanan";
$result =  mysqli_query($koneksi, $querry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="animated-heading">Notifikasi Konfirmasi</h1>
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
                        <td><?php echo $row['id_bayar']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['no_kontrakan']; ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>            
        <!-- Style css -->
        <style>
            body {
                font-family: "Arial", sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }

            .animated-heading {
                color: #333;
                text-align: center;
                opacity: 0;
                animation: fadeIn 1s ease-in-out forwards;
            }

            a {
                text-align: center;
                padding: 10px;
                margin-top: 20px;
                background-color: #007BFF;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }

            .kembali a {
                text-align: center;
                padding: 10px;
                margin-top: 20px;
                background-color: #007BFF;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
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
        </style>
    </form>
    <br>
    <a href="pembayaran.php">Cek Pembayaran</a>
            <div class="kembali">
                <br>
                    <br>
            <a href="homepage.php">Kembali</a>
            </div>
</body>


</html>