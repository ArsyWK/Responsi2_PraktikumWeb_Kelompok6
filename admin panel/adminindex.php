<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PSG - Dream Bigger</title>
  <link rel="stylesheet" href="adminindex.css?v=<?php echo time(); ?>">
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
                  <li><a href="prestasi.php">Prestasi</a></li>
                  <li><a href="firstTeam.php">Tim Pertama</a></li>
                  <li><a href="pemainWanita.php">Tim Wanita</a></li>
                </ul>
            </div>
          <div>
            <div class="dropdown-header">Tentang Klub</div>
            <ul>
              <li><a href="#">Sejarah</a></li>
              <li><a href="#">Berita</a></li>
            </ul>
          </div>
    </div>
</li>

        <li><a href="firstTeam.php">Pemain</a></li>
        <li><a href="klub.php">Klub</a></li>
        <li><a href="berita.php">Berita</a></li>
      </ul>
      <a href="SettingAccount.php"><i id="user" class='bx bxs-user-circle'></i></a>
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
  <section class="berita" id="berita">
    <div class="berita-header">
        <div class="line"><a href="#berita"><h2>Berita Terbaru</h2></a></div>
        <div class="plus"><button type="button" id="toggleFormBtn"><i class='bx bx-plus'></i></button></div>
      </div>

      <div class="form-container" id="form-container" style="display: none;">
  <form id="popup-form">
    <button type="button" id="closeFormBtn">&times;</button>

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
</div>


    <script>
     document.addEventListener('DOMContentLoaded', () => {
    const toggleFormBtn = document.getElementById('toggleFormBtn');
    const formContainer = document.getElementById('form-container');
    const closeFormBtn = document.getElementById('closeFormBtn');
    const popupForm = document.getElementById('popup-form');

    // Fungsi untuk membuka form
    toggleFormBtn.addEventListener('click', () => {
        formContainer.style.display = 'flex';
    });

    // Fungsi untuk menutup form
    closeFormBtn.addEventListener('click', () => {
        formContainer.style.display = 'none';
    });

    // Menutup form jika pengguna klik di luar form
    document.addEventListener('click', (e) => {
        if (!formContainer.contains(e.target) && !toggleFormBtn.contains(e.target)) {
            formContainer.style.display = 'none';
        }
    });

    // Menangani pengiriman form
    popupForm.addEventListener('submit', (e) => {
        e.preventDefault(); // Mencegah reload halaman

        // Reset form dan tutup popup
        popupForm.reset();
        formContainer.style.display = 'none';
    });
});
    </script>
  </div>
    <div class="berita-container" id="berita-container">

      <div class="card-berita">
        <img src="../img/psg1.jpg" alt="Berita 1">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
                <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg2.jpg" alt="Berita 2">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg3.jpg" alt="Berita 3">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg4.jpg" alt="Berita 4">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg5.jpg" alt="Berita 5">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg6.jpg" alt="Berita 6">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg7.jpg" alt="Berita 7">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg8.jpg" alt="Berita 8">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg9.jpg" alt="Berita 9">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

      <div class="card-berita">
        <img src="../img/psg10.jpg" alt="Berita 10">
        <div class="card-berita-text">
            <div class="card-berita-title">
                <p>Kemenangan pada awal tahun</p>
            </div>
            <div class="card-berita-desc">
            <p>Tim Pertama | <span>1 Januari 2025</span></p>
            </div>
        </div>
      </div>

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
  <section class="gallery">
    <div class="container-gallery">
    <h2 class="gallery-title">Gallery</h2>
    <div class="plus"><button type="button" id="toggleFormBtnGallery"><i class='bx bx-plus'></i></button></div>
    </div>
    
    <div class="form-containerGallery" id="form-containerGallery" style="display: none;">
  <form id="popup-formGallery">
    <button type="button" id="closeFormBtnGallery">&times;</button>

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
    const toggleFormBtnGallery = document.getElementById('toggleFormBtnGallery');
    const formContainerGallery = document.getElementById('form-containerGallery');
    const closeFormBtnGallery = document.getElementById('closeFormBtnGallery');
    const popupFormGallery = document.getElementById('popup-formGallery');

    // Fungsi untuk membuka form
    toggleFormBtnGallery.addEventListener('click', () => {
        formContainerGallery.style.display = 'flex';
    });

    // Fungsi untuk menutup form
    closeFormBtnGallery.addEventListener('click', () => {
        formContainerGallery.style.display = 'none';
    });

    // Menutup form jika pengguna klik di luar form
    document.addEventListener('click', (e) => {
        if (!formContainerGallery.contains(e.target) && !toggleFormBtnGallery.contains(e.target)) {
            formContainerGallery.style.display = 'none';
        }
    });
  });

  </script>

    <div class="gallery-container">
        <div class="card-galery">
            <img src="../img/psg4.jpg" alt="galery 1">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-galery">
            <img src="../img/psg5.jpg" alt="galery 2">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-galery">
            <img src="../img/psg3.jpg" alt="galery 3">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-galery">
            <img src="../img/psg4.jpg" alt="galery 4">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-galery">
            <img src="../img/psg5.jpg" alt="galery 5">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-galery">
            <img src="../img/psg6.jpg" alt="galery 6">
            <p>Klub PSG Menang</p> 
        </div>
    </div>
  </section>

  <section class="highlights">
    <div class="container-highlights">
    <h2 class="highlights-title">Highlights</h2>
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



    <div class="highlights-container">
        <div class="card-highlights">
            <img src="../img/psg4.jpg" alt="highlights 1">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="../img/psg2.jpg" alt="highlights 2">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="../img/psg3.jpg" alt="highlights 3">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="../img/psg4.jpg" alt="highlights 4">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="../img/psg5.jpg" alt="highlights 5">
            <p>Klub PSG Menang</p> 
        </div>
        <div class="card-highlights">
            <img src="../img/psg6.jpg" alt="highlights 6">
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
