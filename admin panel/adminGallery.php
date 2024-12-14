<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Pemain</title>
    <link rel="stylesheet" href="adminGallery.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
      <!-- Header Section -->
  <header class="header">
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
    <div class="logo">
      <img class="logo-img" src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>

    <div class="container">
       <div class="artikel">
            <a href="#">Artikel</a>
       </div>
       <div class="prestasi">
            <a href="#">Prestasi</a>
       </div>
       <div class="galeri">
            <a href="#">Galeri</a>
       </div>
       <div class="jadwal">
            <a href="#">Jadwal Hasil</a>
       </div>
       <div class="player">
            <a href="#">Player</a>
       </div>
    </div>
        
    <div class="plus"><button type="button" id="toggleFormBtnHighlight"><i class='bx bx-plus'></i></button></div>
    </div>
    
    <div class="form-containerHighlight" id="form-containerHighlight" style="display: none;">
  <form id="popup-formHighlight">
    <button type="button" id="closeFormBtnHighlight">&times;</button>

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

    <button type="submit" id="submitFormBtn">Submit</button>
  </form>
</div>
<script>
 document.addEventListener('DOMContentLoaded', () => {
    const toggleFormBtnHighlight = document.getElementById('toggleFormBtnHighlight');
    const formContainerHighlight = document.getElementById('form-containerHighlight');
    const closeFormBtnHighlight = document.getElementById('closeFormBtnHighlight');
    const popupFormHighlight = document.getElementById('popup-formHighlight');

    // Fungsi untuk membuka form
    toggleFormBtnHighlight.addEventListener('click', () => {
        formContainerHighlight.style.display = 'flex';
    });

    // Fungsi untuk menutup form
    closeFormBtnHighlight.addEventListener('click', () => {
        formContainerHighlight.style.display = 'none';
    });

    // Menutup form jika pengguna klik di luar form
    document.addEventListener('click', (e) => {
        if (!formContainerHighlight.contains(e.target) && !toggleFormBtnHighlight.contains(e.target)) {
            formContainerHighlight.style.display = 'none';
        }
    });
  });

  </script>

  <!-- Galeri Pemain Section -->
  <section class="galeri-pemain">
    <div class="galeri-pemain-container">

      <div class="card-galeri-pemain">
        <img src="../img/psg1.jpg" alt="Galeri Pemain 1">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Kylian Mbappe</p>
            </div>
            <div class="card-galeri-pemain-desc">
                <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg2.jpg" alt="Galeri Pemain 2">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Neymar Jr</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg3.jpg" alt="Galeri Pemain 3">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Mauro Icardi</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Penyerang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg4.jpg" alt="Galeri Pemain 4">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Angel Di Maria</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Gelandang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg5.jpg" alt="Galeri Pemain 5">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Leandro Paredes</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Gelandang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg6.jpg" alt="Galeri Pemain 6">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Marquinhos</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Bek | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg7.jpg" alt="Galeri Pemain 7">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Presnel Kimpembe</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Bek | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg8.jpg" alt="Galeri Pemain 8">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Keylor Navas</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Kiper | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg9.jpg" alt="Galeri Pemain 9">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Sergio Rico</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Kiper | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>

      <div class="card-galeri-pemain">
        <img src="../img/psg10.jpg" alt="Galeri Pemain 10">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Ander Herrera</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Gelandang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-galeri-pemain">
        <img src="../img/psg10.jpg" alt="Galeri Pemain 10">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Ander Herrera</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Gelandang | <span>Paris Saint-Germain</span></p>
            </div>
        </div>
      </div>
      <div class="card-galeri-pemain">
        <img src="../img/psg10.jpg" alt="Galeri Pemain 10">
        <div class="card-galeri-pemain-text">
            <div class="card-galeri-pemain-title">
                <p>Ander Herrera</p>
            </div>
            <div class="card-galeri-pemain-desc">
            <p>Gelandang | <span>Paris Saint-Germain</span></p>
            </div>
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
