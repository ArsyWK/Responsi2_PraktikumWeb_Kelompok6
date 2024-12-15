<?php
include 'koneksi.php'; // File koneksi database

// Query untuk mengambil data dari tabel prestasi
$sql = "SELECT nama, skor FROM prestasi";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Pemain</title>
    <link rel="stylesheet" href="prestasi.css?v=<?php echo time();?>">
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
                  <li><a href="adminFirstTeam.php">Pemain</a></li>
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

        <li><a href="adminFirstTeam.php">Pemain</a></li>
        <li><a href="../view/klub.php">Klub</a></li>
        <li><a href="berita.php">Berita</a></li>
      </ul>
      <?php
      session_start();
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
      <a href="index.php"><img class="logo-img" src="../img/Logo-PSG.png" alt="PSG Logo"></a>
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
            <a href="jadwalHasilLalu.php">Jadwal Hasil</a>
       </div>
       <div class="player">
            <a href="firstTeam.php">Player</a>
       </div>
    </div>

    <div class="Pemain">
        <div>
            <a href="firstTeam.php"><h1>Tim Pertama</h1></a>
        </div>
        <div>
            <a href="pemainWanita.php"><h1>Tim Wanita</h1></a>
        </div>
    </div>

    <div class="plus"><button type="button" id="toggleFormBtn"><i class='bx bx-plus'></i></button></div>
 
    
 <div class="form-container" id="form-container" style="display: none;">
<form id="popup-form">
 <button type="button" id="closeFormBtn">&times;</button>

 <label for="judul">Judul Pertandingan</label>
 <input type="text" id="judul" name="judul" placeholder="Masukkan judul pertandingan" required>

 <label for="nama-tim">Nilai Pertandingan</label>
 <input type="text" id="nama-tim" name="nama-tim" placeholder="Masukkan nilai pertandingan tim" required>

 <button type="submit" id="submitFormBtn">Submit</button>
</form>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
 const toggleFormBtn = document.getElementById('toggleFormBtn');
 const formContainer = document.getElementById('form-container');
 const closeFormBtn = document.getElementById('closeFormBtn');

 // Fungsi untuk membuka form
 toggleFormBtn.addEventListener('click', () => {
     formContainer.style.display = (formContainer.style.display === 'none' || formContainer.style.display === '') 
         ? 'flex' 
         : 'none';
 });

 // Fungsi untuk menutup form
 closeFormBtn.addEventListener('click', () => {
     formContainer.style.display = 'none';
 });

 // Menutup form jika pengguna klik di luar form
 document.addEventListener('click', (e) => {
     if (
         formContainer.style.display === 'flex' && 
         !formContainer.contains(e.target) && 
         !toggleFormBtn.contains(e.target)
     ) {
         formContainer.style.display = 'none';
     }
 });
});


</script>

    <div class="score-table">
        <?php
        // Periksa apakah query mengembalikan data
        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
        <div class="score-box">
            <p class="score"><?= htmlspecialchars($row['skor']); ?></p>
            <p class="label"><?= htmlspecialchars($row['nama']); ?></p>
        </div>
        <?php
            endwhile;
        else:
        ?>
        <p>Tidak ada data skor tersedia.</p>
        <?php
        endif;
        $conn->close();
        ?>
    </div>

    <div class="picture">
        <img class="psg-icon" src="../img/image 20.png" alt="Psg Logo">
    </div>
    
    <div class="table-container">
    <table border="1"cellspacing="0">
      <thead>
        <tr>
          <th>Tournament Perancis</th>
          <th>8-6</th>
          <th>4-3</th>
          <th>2-6</th>
          <th>2-0</th>
          <th>1-3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Champions Trophy</td>
          <td>2-3</td>
          <td>3-1</td>
          <td>2-0</td>
          <td>1-0</td>
          <td>1-4</td>
        </tr>
        <tr>
          <td>Uefa Champions League</td>
          <td>3-0</td>
          <td>0-1</td>
          <td>4-2</td>
          <td>0-2</td>
          <td>4-1</td>
        </tr>
        <tr>
          <td>Liga 1</td>
          <td>3-2</td>
          <td>2-3</td>
          <td>1-0</td>
          <td>2-3</td>
          <td>1-2</td>
        </tr>
      </tbody>
    </table>
  </div>


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