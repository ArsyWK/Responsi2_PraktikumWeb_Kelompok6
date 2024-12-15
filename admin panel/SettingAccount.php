<?php
ini_set('session.gc_maxlifetime', 3600); // 1 jam
session_set_cookie_params(3600);
session_start();

include 'koneksi.php';

if (!isset($_SESSION['id_user'])) {
    header("Location: signin.php"); // Redirect jika sesi tidak ada
    exit();
}

// Ambil data dari sesi
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$id_user = $_SESSION['id_user'];
$foto = $_SESSION['foto'] ?? '../img/usericon.png';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Setting</title>
    <link rel="stylesheet" href="SettingAcc.css?v=<?php echo time();?>">
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


  <!-- Profile Section -->
  <div class="profile">
    <!-- Tampilkan Foto Profil -->
    <?php
            // if ($is_logged_in) {
              $id_user = $_SESSION['id_user'];
              $query = "SELECT * FROM user WHERE role = 'admin'";
              $read = mysqli_query($conn, $query);
              $data = mysqli_fetch_array($read);
            
              $nama = $data['nama'];
              $email = $data['email'];
              $password = $data['password'];
              $foto = $data['foto'];
            // }
            ?>
   <td><img src=></td>";

<?php echo "<img class='profile-img' src='data:image/jpeg;base64,".base64_encode($data['foto'])."' alt='Image' width='100'>"; ?>
  </div>
  <div class="profile-name"><?php echo htmlspecialchars($nama); ?></div>
  <div class="profile-email"><?php echo htmlspecialchars($email); ?></div>
  <div class="profile-button">
    <a href="AccountEdit.php"><button class="edit-button">Edit Profile</button></a>
    <a href="signout.php"><button class="edit-button">Sign out</button></a>
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