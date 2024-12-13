<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Page</title>
    <link rel="stylesheet" href="berita.css?v=<?php echo time(); ?>">
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

    <h1>Berita Terbaru</h1>
    <!-- Berita Terbaru Section -->
    <?php
    include 'koneksi.php'; // Sambungkan ke database

    $sql_berita = "SELECT judul, tim, tanggal, gambar FROM berita ORDER BY tanggal DESC LIMIT 10"; // Batasi jumlah berita
    $result_berita = $conn->query($sql_berita);

    $berita = [];
    if ($result_berita->num_rows > 0) {
        while ($row = $result_berita->fetch_assoc()) {
            $berita[] = $row;
        }
    }
    ?>

    
<section class="berita-terbaru-container">
    <?php foreach ($berita as $item): ?>
        <div class="card-berita-terbaru">
            <!-- Menampilkan gambar berita -->
            <img src="data:image/jpeg;base64,<?= base64_encode($item['gambar']); ?>" alt="<?= $item['judul']; ?>">
            
            <!-- Menampilkan teks berita -->
            <div class="card-berita-terbaru-text">
                <div class="card-berita-terbaru-title">
                    <p><?= $item['judul']; ?></p>
                </div>
                <div class="card-berita-terbaru-desc">
                    <p><?= $item['tim']; ?> | <span><?= date('d F Y', strtotime($item['tanggal'])); ?></span></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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
      <img src="img/Logo-PSG.png" alt="PSG Logo">
    </div>
  </footer>
  </body>
</html>
