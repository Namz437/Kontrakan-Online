<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Keamanan Akun</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f2f2f2;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
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
  </style>
</head>
<body>

  <form action="#" method="post" enctype="multipart/form-data">
    <h2>Registrasi Akun</h2>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]+" title="Hanya huruf dan angka diperbolehkan">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
           title="Minimal 8 karakter, setidaknya satu huruf besar, satu huruf kecil, dan satu angka">

    <!-- Tambahkan lebih banyak elemen formulir sesuai kebutuhan -->

    <button type="submit">Daftar</button>
  </form>

  <form action="#" method="post" enctype="multipart/form-data">
    <h2>Masuk</h2>

    <label for="login-username">Username:</label>
    <input type="text" id="login-username" name="login-username" required>

    <label for="login-password">Password:</label>
    <input type="password" id="login-password" name="login-password" required>

    <!-- Tambahkan lebih banyak elemen formulir sesuai kebutuhan -->

    <button type="submit">Masuk</button>
  </form>

</body>
</html>
