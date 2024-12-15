<?php
// Memulai sesi dengan durasi 1 jam
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();

// Koneksi ke database
include 'koneksi.php'; 

// Ambil data dari sesi
$id_user = $_SESSION['id_user'] ?? null;
$nama = $_SESSION['nama'] ?? '';
$email = $_SESSION['email'] ?? '';
$foto = $_SESSION['foto'] ?? '../img/usericon.png';

// Pastikan pengguna login
if (!$id_user) {
    header("Location: signin.php");
    exit();
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari formulir
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $nama = trim($_POST['nama']);
    $confirm_password = $_POST['confirm_password'];
    $uploaded_file = $_FILES['foto'];

    // Validasi input
    if ($password !== $confirm_password) {
        echo "Password tidak cocok!";
        exit();
    }

    // Proses unggah gambar
    $foto = null; // Inisialisasi variabel $foto
if ($uploaded_file['size'] > 0) {
    $target_dir = "../img/"; // Direktori tempat file akan disimpan
    $file_name = time() . "_" . basename($uploaded_file['name']); // Nama file unik
    $target_file = $target_dir . $file_name; // Path lengkap file

    // Proses unggah file
    if (move_uploaded_file($uploaded_file['tmp_name'], $target_file)) {
        $foto = $target_file; // Perbarui variabel $foto dengan path file yang diunggah
    } else {
        echo "Gagal mengunggah gambar!";
        exit();
    }
}


    // Hash password jika diisi
    $hashed_password = !empty($password) ? password_hash($password, PASSWORD_DEFAULT) : null;
    

    // Update database
    try {
        $query = "UPDATE user SET nama = ?, email = ?";
        $params = [$nama, $email];

        if ($hashed_password) {
            $query .= ", password = ?";
            $params[] = $hashed_password;
        }
        
        if ($foto) {
            $query .= ", foto = ?";
            $params[] = $foto;
        }

        $query .= " WHERE id_user = ?";
        $params[] = $id_user;

        $stmt = $conn->prepare($query);
        $stmt->execute($params);

        // Perbarui sesi
        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        if ($foto) {
            $_SESSION['foto'] = $foto;
        }

        echo "Profil berhasil diperbarui!";
        header("Location: SettingAccount.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Account</title>
    <link rel="stylesheet" href="AccEdit.css?v=<?php echo time(); ?>">
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
    <!-- Container Section -->
    <div class="container">
        <div class="left-section">
            <div class="profile">
                <!-- Menampilkan foto profil -->
                <img class="profile-img" src="<?php echo htmlspecialchars($foto); ?>" alt="Profile Image">
            </div>
            <form method="POST" action="SettingAccount.php" enctype="multipart/form-data">
            <div class="upload-section">
                <label>Upload Image</label><br>
                <input type="file" name="foto" accept="image/*"><br>
                <small>Max 800k</small>
                <br>
                <button>Upload</button>
            </div>
        </div>

        <div class="right-section">
            <!-- Form Update User -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password (opsional)">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Password</label>
                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Masukkan password kembali">
                </div>
                <div class="actions">
                    <a href="settingAccount.php" class="back-button">&#8592; Back</a>
                    <button type="submit" class="save-button">Save Profile</button>
                </div>
            </form>
        </div>
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
</body>
</html>