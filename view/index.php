<?php
ini_set('session.gc_maxlifetime', 3600); // 1 jam
session_set_cookie_params(3600);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PSG - Dream Bigger</title>
  <link rel="stylesheet" href="styless.css?v=<?php echo time(); ?>">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="logo">
      <img class="logo-img" src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>

    <nav class="nav-menu">
    <ul>
      <li>
        <a href="#" id="menu-toggle">Menu</a>
          <div class="dropdown" id="menu-dropdown">
            <div>
              <div class="dropdown-header">
                Pemain
              </div>
                <ul>
                  <li><a href="firstTeam.php">Pemain</a></li>
                  <li><a href="pemainGaleri.php">Galeri</a></li>
                  <li><a href="artikel.php">Artikel</a></li>
                  <li><a href="prestasipemain.php">Prestasi</a></li>
                  <li><a href="firstTeam.php">Tim Pertama</a></li>
                  <li><a href="pemainWanita.php">Tim Wanita</a></li>
                </ul>
            </div>
          <div>
            <div class="dropdown-header">Tentang Klub</div>
            <ul>
              <li><a href="klub.php">Sejarah</a></li>
              <li><a href="berita.php">Berita</a></li>
            </ul>
          </div>
    </div>
</li>

        <li><a href="firstTeam.php">Pemain</a></li>
        <li><a href="klub.php">Klub</a></li>
        <li><a href="berita.php">Berita</a></li>
      </ul>
      <?php
      $is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']; // Periksa status login
      ?>
      <a href="<?php echo $is_logged_in ? 'SettingAccount.php' : 'signin.php'; ?>">
      <i id="user" class='bx bxs-user-circle'></i>
      </a>
    </nav>
  </header>


  <script>
    document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.getElementById('menu-toggle');
  const menuDropdown = document.getElementById('menu-dropdown');

  // Fungsi untuk menampilkan/menyembunyikan dropdown
  menuToggle.addEventListener('click', (e) => {
    e.preventDefault();
    menuDropdown.classList.toggle('show'); // Tambahkan/lepaskan kelas "show"
  });

  // Menutup dropdown jika klik di luar elemen
  document.addEventListener('click', (e) => {
    if (!menuToggle.contains(e.target) && !menuDropdown.contains(e.target)) {
      menuDropdown.classList.remove('show');
    }
  });
});
  </script>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <video width="100%" height="100%"  src="../video/hero(1).mp4" autoplay loop muted></video>
      <h1>Paris Saint Germain</h1>
      <p>Dream Bigger</p>
    </div>
  </section>

  <!-- Berita Terbaru Section -->
  <section class="berita">
  <?php
  include 'koneksi.php'; // File koneksi ke database Anda

  $sql = "SELECT id_berita, judul, tim, tanggal, isi, gambar FROM berita ORDER BY tanggal DESC LIMIT 10";
  $result = $conn->query($sql);
  $berita = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $berita[] = $row;
    }
  }
  ?>

    <div class="berita-header">
        <h2>Berita Terbaru</h2>
        <!-- <div class="btn-carousel">
            <button class="btn-kiri"> < </button>
            <button class="btn-kanan"> > </button>
        </div> -->
    </div>
    <div class="berita-container">
    <?php foreach ($berita as $item): ?>
        <a href="beritabook.php?id_berita=<?= $item['id_berita']; ?>" class="card-link">
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
        </a>
    <?php endforeach; ?>
</div>

  </section>
  

<script>
  // const btnKiri = document.querySelector('.btn-kiri');
  //   const btnKanan = document.querySelector('.btn-kanan');
    const beritaContainer = document.querySelector('.berita-container');

    btnKiri.addEventListener('click', () => {
        beritaContainer.scrollBy({ left: -200, behavior: 'smooth' });
    });

    btnKanan.addEventListener('click', () => {
        beritaContainer.scrollBy({ left: 200, behavior: 'smooth' });
    });
</script>



  <!-- MVP Section -->
  <section class="mvp-section">
  <div class="container-mvp">
    <!-- Bagian gambar pemain -->
    <div class="mvp-person">
      <img src="../img/pemain.png" alt="Pemain MVP">
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

<!--Highlights Section-->
<?php
  include 'koneksi.php'; // File koneksi ke database

  $sql = "SELECT id_highlights,judul, url FROM highlights ORDER BY id_highlights ASC";
  $result = $conn->query($sql);
  
  $highlights = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $highlights[] = $row;
    }
  }
  ?>
<section class="highlights">
    <h2 class="highlights-title">Highlights</h2>
    <div class="highlights-container">
        <?php foreach ($highlights as $item): ?>
            <div class="card-highlights">
                <?= $item['url']; ?>
                <p><?= $item['judul']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>



  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-content">
      <div>
        <h3>Paris Saint Germain</h3>
        <ul>
          <li><a href="firstTeam.php">Tim Pertama</a></li>
          <li><a href="pemainWanita.php">Tim Wanita</a></li>
          <li><a href="klub.php">Tentang Klub</a></li>
        </ul>
      </div>
      <div>
        <h3>Servis</h3>
        <ul>
          <li><a href="SettingAccount.php">Akun</a></li>
          <li><a href="feedback.php">Berikan Feedback</a></li>
        </ul>
      </div>
      <div>
      <h3>Tentang Kami</h3>
      <ul>
        <li>
          <a href="https://www.instagram.com/psg?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer">
            <i class='bx bxl-instagram-alt'></i>
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/PSG" target="_blank" rel="noopener noreferrer">
            <i class='bx bxl-facebook-circle'></i>
          </a>
        </li>
        <li>
          <a href="https://x.com/PSG_English" target="_blank" rel="noopener noreferrer">
            <i class='bx bxl-twitter' ></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/PSG" target="_blank" rel="noopener noreferrer">
            <i class='bx bxl-youtube' ></i>
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@psg" target="_blank" rel="noopener noreferrer">
          <i class='bx bxl-tiktok' ></i>
          </a>
        </li>
      </ul>
      </div>
    </div>
    <div class="footer-logo">
      <img src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>
  </footer>
</body>
</html>
