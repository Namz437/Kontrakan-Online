<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Halaman Admin</title>
    <!-- css nya -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards, slideIn 1s ease-in-out forwards;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 1.2em;
            margin-top: 10px;
        }

        .container a {
            display: inline-block;
            text-align: center;
            padding: 10px;
            margin-top: 10px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            opacity: 0;
            animation: fadeInBtn 1s ease-in-out forwards, slideInBtn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes fadeInBtn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInBtn {
            from {
                transform: translateY(20px);
            }
            to {
                transform: translateY(0);
            }
        }
    </style>
    <!-- css end -->
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Halaman Admin</h1>
        <p>Silakan kelola dan atur kontrakan dengan cermat.</p>
        <a href="dashboard.php">Lanjutkan</a>
        <a href="login.php">Log Out</a>
    </div>

 <!-- java script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Menampilkan elemen dengan animasi setelah halaman dimuat
            document.body.style.opacity = 1;
            document.querySelector(".container a").style.opacity = 1;
        });
    </script>
<!-- script end -->
</body>
</html>
