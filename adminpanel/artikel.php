<?php
ini_set('session.gc_maxlifetime', 3600); // 1 jam
session_set_cookie_params(3600);
session_start();
include 'koneksi.php'; // Koneksi database

// Query untuk mengambil data
$query = "SELECT * FROM berita WHERE tim = 'Tim Pertama'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="artikel.css?v=<?php echo time(); ?>">
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

    <div class="logo">
      <img class="logo-img" src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>

    <div class="container">
       <div class="artikel">
            <a href="artikel.php">Artikel</a>
       </div>
       <div class="prestasi">
            <a href="prestasipemain.php">Prestasi</a>
       </div>
       <div class="galeri">
            <a href="pemainGaleri.php">Galeri</a>
       </div>
       <div class="jadwal">
            <a href="jadwalhasilLalu.php">Jadwal Hasil</a>
       </div>
       <div class="player">
            <a href="firstTeam.php">Player</a>
       </div>
    </div>
        
  <!-- Galeri Pemain Section -->
  <section class="artikel-content">
    <div class="artikel-container">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card-artikel">
            <a href="beritaBook.php?id_berita=<?= $row['id_berita']; ?>" style="text-decoration: none; color: inherit;">
                <!-- Gambar Artikel -->
                <img src="data:image/jpeg;base64,<?= base64_encode($row['gambar']); ?>" alt="Gambar Artikel">
                <div class="card-artikel-text">
                    <!-- Judul Artikel -->
                    <div class="card-artikel-title">
                        <p><?= htmlspecialchars($row['judul']); ?></p>
                    </div>
                    <!-- Deskripsi Artikel -->
                    <div class="card-artikel-desc">
                        <p><?= htmlspecialchars($row['tim']); ?> <span>| <?= htmlspecialchars($row['tanggal']); ?></span></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
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