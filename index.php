<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PSG - Dream Bigger</title>
  <link rel="stylesheet" href="styless.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="logo">
      <img class="logo-img" src="img/Logo-PSG.png" alt="PSG Logo">
    </div>
    <nav class="nav-menu">
      <ul>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Pemain</a></li>
        <li><a href="#">Klub</a></li>
        <li><a href="#">Berita</a></li>
      </ul>
      <i class='bx bxs-user-circle'></i>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <video width="100%" height="100%"  src="video/hero(1).mp4" autoplay loop muted></video>
      <h1>Paris Saint Germain</h1>
      <p>Dream Bigger</p>
    </div>
  </section>

  <!-- Berita Terbaru Section -->
  <?php
  include 'koneksi.php'; // File koneksi ke database Anda

  $sql = "SELECT judul, tim, tanggal, isi, gambar FROM berita ORDER BY tanggal DESC LIMIT 10";
  $result = $conn->query($sql);
  $berita = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $berita[] = $row;
    }
  }
  ?>

  <section class="berita">
    <div class="berita-header">
        <h2>Berita Terbaru</h2>
        <div class="btn-carousel">
            <button class="btn-kiri"> < </button>
            <button class="btn-kanan"> > </button>
        </div>
    </div>
    <div class="berita-container">

    <?php foreach ($berita as $item): ?>
      <div class="card-berita">
        <img src="data:image/jpeg;base64,<?= base64_encode($item['gambar']); ?>" alt="<?= $item['judul']; ?>">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p><?= $item['judul']; ?></p>
            </div>
            <div class="card-berita-desc">
                <p><?= $item['tim']; ?> | <span><?= date('d F Y', strtotime($item['tanggal'])); ?></span></p>
            </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </section>

  <!-- MVP Section -->
  <section class="mvp-section">
  <div class="container-mvp">
    <!-- Bagian gambar pemain -->
    <div class="mvp-person">
      <img src="img/pemain.png" alt="Pemain MVP">
    </div>
    
    <!-- Bagian teks MVP -->
    <div class="mvp-text">
      <h1 class="title">MVP</h1>
      <h2 class="player-name">Osas Zimbabwe</h2>
      
      <!-- Statistik -->
      <div class="mvp-stats">
        <div class="stat-item">
          <h3>Gol</h3>
          <p>20</p>
          <h3>Pertandingan</h3>
          <p>50</p>
        </div>
        <div class="stat-item">
          <h3>Assist</h3>
          <p>10</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Gallery Section -->
  <?php
  include 'koneksi.php'; // File koneksi ke database Anda

  $sql = "SELECT judul, foto FROM galeri ORDER BY id_galeri DESC";
  $result = $conn->query($sql);
  $galeri = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $galeri[] = $row;
    }
  }
  ?>

<section class="gallery">
  <h2 class="gallery-title">Gallery</h2>
  <div class="gallery-container">
    <?php foreach ($galeri as $item): ?>
      <div class="card-galery">
        <img src="data:image/jpeg;base64,<?= base64_encode($item['foto']); ?>" alt="<?= $item['judul']; ?>">
        <p><?= $item['judul']; ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>


  <section class="highlights">
    <h2 class="highlights-title">Highlights</h2>
    <div class="highlights-container">
        <div class="card-highlights">
            <img src="img/psg4.jpg" alt="highlights 1">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="img/psg2.jpg" alt="highlights 2">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="img/psg3.jpg" alt="highlights 3">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="img/psg4.jpg" alt="highlights 4">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="img/psg5.jpg" alt="highlights 5">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="img/psg6.jpg" alt="highlights 6">
            <p>Klub PSG Menang</p> 
        </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-content">
      <div>
        <h3>Paris Saint Germain</h3>
        <ul>
          <li><a href="#">Tim Pertama</a></li>
          <li><a href="#">Tim Wanita</a></li>
          <li><a href="#">Tentang Klub</a></li>
        </ul>
      </div>
      <div>
        <h3>Servis</h3>
        <ul>
          <li><a href="#">Akun</a></li>
          <li><a href="#">Tiket</a></li>
          <li><a href="#">Market</a></li>
        </ul>
      </div>
      <div>
        <h3>Tentang Kami</h3>
      </div>
    </div>
    <div class="footer-logo">
      <img src="img/image 9.png" alt="PSG Logo">
    </div>
  </footer>
</body>
</html>
