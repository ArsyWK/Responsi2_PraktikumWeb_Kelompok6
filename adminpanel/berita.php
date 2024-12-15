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
    <title>Berita Page</title>
    <link rel="stylesheet" href="berita.css?v=<?php echo time(); ?>">
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


    <h1>Berita Terbaru</h1>
    <div class="plus"><button type="button" id="toggleFormBtnBerita"><i class='bx bx-plus'></i></button></div>
    <div class="form-containerBerita" id="form-containerBerita" style="display: none;">
  <form id="popup-formBerita">
    <button type="button" id="closeFormBtnBerita">&times;</button>

    <label for="upload-image">Upload Image</label>
    <input type="file" id="upload-image" name="upload-image">

    <label for="judul">Judul</label>
    <input type="text" id="judul" name="judul" placeholder="Masukkan judul" required>

    <label for="nama-tim">Nama Tim</label>
    <input type="text" id="nama-tim" name="nama-tim" placeholder="Masukkan nama tim" required>

    <label for="tanggal-tahun">Tanggal Tahun</label>
    <div class="date-inputs">
      <input type="text" id="tanggal" name="tanggal" maxlength="2" placeholder="DD" required>
      <input type="text" id="bulan" name="bulan" maxlength="2" placeholder="MM" required>
      <input type="text" id="tahun" name="tahun" maxlength="4" placeholder="YYYY" required>
    </div>

    <label for="isi-berita">Isi Berita</label><br>
    <textarea id="isi-berita" name="isi-berita" placeholder="Masukkan isi berita"></textarea>

    <button type="submit" id="submitFormBtn">Submit</button>
  </form>
</div>
<script>
 document.addEventListener('DOMContentLoaded', () => {
    const toggleFormBtnBerita = document.getElementById('toggleFormBtnBerita');
    const formContainerBerita = document.getElementById('form-containerBerita');
    const closeFormBtnBerita = document.getElementById('closeFormBtnBerita');
    const popupFormBerita = document.getElementById('popup-formBerita');

    // Fungsi untuk membuka form
    toggleFormBtnBerita.addEventListener('click', () => {
        formContainerBerita.style.display = 'flex';
    });

    // Fungsi untuk menutup form
    closeFormBtnBerita.addEventListener('click', () => {
        formContainerBerita.style.display = 'none';
    });

    // Menutup form jika pengguna klik di luar form
    document.addEventListener('click', (e) => {
        if (!formContainerBerita.contains(e.target) && !toggleFormBtnBerita.contains(e.target)) {
            formContainerBerita.style.display = 'none';
        }
    });
  });

  </script>
    <!-- Berita Terbaru Section -->
    <?php
    include 'koneksi.php'; // Sambungkan ke database

    $sql_berita = "SELECT id_berita,judul, tim, tanggal, gambar FROM berita ORDER BY tanggal DESC LIMIT 10"; // Batasi jumlah berita
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
      <a href="beritabook.php?id_berita=<?= $item['id_berita']; ?>" class="card-berita-terbaru">
        <div class="card-berita-terbaru">
            <!-- Menampilkan gambar berita -->
            <img src="data:image/jpeg;base64,<?= base64_encode($item['gambar']); ?>" alt="<?= $item['judul']; ?>">
            
            <!-- Menampilkan teks berita -->
            <div class="card-berita-terbaru-text">
                <div class="card-berita-terbaru-title">
                    <p class="judul"><?= $item['judul']; ?></p>
                </div>
                <div class="card-berita-terbaru-desc">
                <p>
                  <span class="tim"><?= $item['tim']; ?></span> | 
                  <span class="tanggal"><?= date('d F Y', strtotime($item['tanggal'])); ?></span>
                </p>
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