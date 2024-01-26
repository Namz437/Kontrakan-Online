<?php
include 'function.php';
$querry = "SELECT pemesanan.*, pembayaran.* from pemesanan LEFT JOIN pembayaran ON pemesanan.id_bayar = pembayaran.id_pembayaran";
$result =  mysqli_query($koneksi, $querry);
$row = mysqli_fetch_assoc($result);
?>

<?php
if (isset($_FILES['gambar'])) {
    $gambar = $_FILES['gambar'];

    $namaFile = $gambar['name'];
    $ukuranFile = $gambar['size'];
    $error = $gambar['error'];
    $tmpName = $gambar['tmp_name'];

    if ($error === 0) {
        $folderTujuan = 'upload/';

        $namaFileBaru = uniqid() . '_' . $namaFile;

        $pathFile = $folderTujuan . $namaFileBaru;

        move_uploaded_file($tmpName, $pathFile);

        echo "Gambar berhasil diupload.";
    } else {
        echo "Error saat upload gambar.";
    }
}

$id = $_GET['id'];
// Upload

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $status = $row['status'];
    if ($status === 'sudah') {


        // Query menyimpan data peminjaman
        $Query_upload = "UPDATE `pemesanan` SET `gambar` = '$pathFile' WHERE `pemesanan`.`id_pesanan` = $id;";

        $result_upload = mysqli_query($koneksi, $Query_upload);

        if ($result_upload) {
            echo "<script>
            alert('Pengajuan berhasil');
            window.location.href = 'pembayaran.php';
        </script>";
        } else {
            echo "Gagal upload bukti.";
        }
    } else {
        echo "Maaf, kendaraan ini sedang tidak tersedia untuk dipinjam.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <!-- css -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        
        .bwh {
            margin-top: 20px;
            text-align: center;
        }

        .bwh a {
            text-decoration: none;
            color: #2196F3;
        }

        .bwh a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <div>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="gambar" id="gambar">
            <button type="submit">Upload</button>
        </form>
    </div>
    <div class="bwh">
        <a href="pembayaran.php"> Kembali </a>
    </div>
</body>

</html>