<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #64ff6c;
      margin: 0;
      padding: 0;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .menu-card {
      perspective: 1000px;
      width: 200px;
      height: 300px;
      margin: 10px;
      cursor: pointer;
    }

    .menu-card-inner {
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      transition: transform 0.5s;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .menu-card:hover .menu-card-inner {
      transform: rotateY(180deg);
    }

    .menu-card-face {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      border-radius: 8px;
    }

    .menu-card-front {
      background-color: #9ade7b;
    }

    .menu-card-back {
      background-color: #9ade7b;
      color: #000;
      transform: rotateY(180deg);
    }

    .menu-card-img {
      width: 100%;
      max-height: 150px;
      object-fit: cover;
      border-radius: 8px 8px 0 0;
    }

    .menu-card-title {
      margin: 10px 0;
      font-size: 1.2em;
    }

    .menu-card-price {
      font-size: 1.1em;
      font-weight: bold;
    }

    .kontrakan {
      text-align: center;
    }

    .klik a {
      text-align: center;
      padding: 10px;
      margin-top: 20px;
      background-color: #ff0000;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-left: 17cm;
    }
  </style>

</head>

<body>

  <!-- Awal kontrakan 3 pintu -->
  <h2 class="kontrakan">Kontrakan Bertipe 3 Pintu</h2>
  <div class="row">
    <!-- Kontrakan Large -->
    <div class="menu-card">
      <div class="menu-card-inner">
        <div class="menu-card-face menu-card-front">
          <img src="image/Menu/Kontrakan4.jpg" alt="Kontrakan Large" class="menu-card-img">
          <h3 class="menu-card-title">Kontrakan 3 Pintu</h3>
          <p class="menu-card-price">IDR 600.000,-</p>
        </div>
        <div class="menu-card-face menu-card-back">
          <p class="menu-card-price">Kontrakan 3 ruangan yang nyaman untuk di tempati, dengan harga yang terjangkau.</p>
          <!-- Additional back content if needed -->
        </div>
      </div>
    </div>
    <!-- Pembatas -->
    <!-- Kontrakan Large -->
    <div class="menu-card">
      <div class="menu-card-inner">
        <div class="menu-card-face menu-card-front">
          <img src="image/Menu/Kontrakan5.jpg" alt="Kontrakan Large" class="menu-card-img">
          <h3 class="menu-card-title">Kontrakan 3 Pintu</h3>
          <p class="menu-card-price">IDR 600.000,-</p>
        </div>
        <div class="menu-card-face menu-card-back">
          <p class="menu-card-price">Kontrakan 3 ruangan yang nyaman untuk di tempati, dengan harga yang terjangkau.</p>
          <!-- Additional back content if needed -->
        </div>
      </div>
    </div>

    <!-- Pembatas -->
    <!-- Kontrakan Large -->
    <div class="menu-card">
      <div class="menu-card-inner">
        <div class="menu-card-face menu-card-front">
          <img src="image/Menu/Kontrakan6.jpg" alt="Kontrakan Large" class="menu-card-img">
          <h3 class="menu-card-title">Kontrakan 3 Pintu</h3>
          <p class="menu-card-price">IDR 600.000,-</p>
        </div>
        <div class="menu-card-face menu-card-back">
          <p class="menu-card-price">Kontrakan 3 ruangan yang nyaman untuk di tempati, dengan harga yang terjangkau.</p>
          <!-- Additional back content if needed -->
        </div>
      </div>
    </div>
  </div>

  <!-- Awal Kontrakan 4 Pintu -->
  <h2 class="kontrakan">Kontrakan bertipe 4 Pintu</h2>
  <div class="row">
    <!-- Kontrakan Large -->
    <div class="menu-card">
      <div class="menu-card-inner">
        <div class="menu-card-face menu-card-front">
          <img src="image/Menu/Kontrakan7.jpg" alt="Kontrakan Large" class="menu-card-img">
          <h3 class="menu-card-title">Kontrakan 4 Pintu</h3>
          <p class="menu-card-price">IDR 700.000,-</p>
        </div>
        <div class="menu-card-face menu-card-back">
          <p class="menu-card-price">Kontrakan 4 ruangan yang nyaman untuk di tempati, dengan harga yang terjangkau.</p>
          <!-- Additional back content if needed -->
        </div>
      </div>
    </div>
    <!-- Pembatas -->
    <!-- Kontrakan Large -->
    <div class="menu-card">
      <div class="menu-card-inner">
        <div class="menu-card-face menu-card-front">
          <img src="image/Menu/Kontrakan8.jpg" alt="Kontrakan Large" class="menu-card-img">
          <h3 class="menu-card-title">Kontrakan 4 Pintu</h3>
          <p class="menu-card-price">IDR 700.000,-</p>
        </div>
        <div class="menu-card-face menu-card-back">
          <p class="menu-card-price">Kontrakan 4 ruangan yang nyaman untuk di tempati, dengan harga yang terjangkau.</p>
          <!-- Additional back content if needed -->
        </div>
      </div>
    </div>

    <!-- Pembatas -->
    <!-- Kontrakan Large -->
    <div class="menu-card">
      <div class="menu-card-inner">
        <div class="menu-card-face menu-card-front">
          <img src="image/Menu/Kontrakan1.jpg" alt="Kontrakan Large" class="menu-card-img">
          <h3 class="menu-card-title">Kontrakan 4 Pintu</h3>
          <p class="menu-card-price">IDR 700.000,-</p>
        </div>
        <div class="menu-card-face menu-card-back">
          <p class="menu-card-price">Kontrakan 4 ruangan yang nyaman untuk di tempati, dengan harga yang terjangkau.</p>
          <!-- Additional back content if needed -->
        </div>
      </div>
    </div>
  </div>

  <br>
  <div class="klik">
    <a href="homepage.php"> Back </a>
  </div>

</body>

</html>