<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Page</title>
    <link rel="stylesheet" href="adminberita.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
       <!-- Header Section -->
  <header class="header">
  <div class="logo">
      <a href="index.php"><img class="logo-img" src="../img/Logo-PSG.png" alt="PSG Logo"></a>
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
    <div class="tagline">
    <h1>Berita Terbaru</h1>
    <div class="plus"><button type="button" id="toggleFormBtnBerita"><i class='bx bx-plus'></i></button></div>
</div>
    
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
    <section class="berita-terbaru-container">

      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-berita-terbaru">
        <img src="../img/psg1.jpg" alt="Berita Terbaru 1">
        <div class="card-berita-terbaru-text">
            <div class="card-berita-terbaru-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-berita-terbaru-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
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
