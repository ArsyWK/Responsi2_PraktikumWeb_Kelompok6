<?php

include 'koneksi.php'; // Hubungkan ke database

$is_logged_in = isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']; // Periksa status login

session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfir = $_POST['confirm_password'];
    
    // Periksa apakah password dan konfirmasi password cocok
    if ($password !== $konfir) {
        echo "<script>alert('Password dan konfirmasi password tidak cocok!');</script>";
    } else {
        // Ambil ID user yang sedang login
        $id_user = $_SESSION['id_user'];

        // Cek apakah ada foto baru yang diupload
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
            $tmpName = $_FILES['foto']['tmp_name'];
            $imageType = $_FILES['foto']['type'];
            $validImage = ['image/jpg', 'image/jpeg', 'image/png'];

            if (in_array($imageType, $validImage)) {
                // Proses upload foto
                $imageData = addslashes(file_get_contents($tmpName));
                // Update query untuk foto baru
                $query = "UPDATE user SET nama = ?, email = ?, password = ?, foto = ? WHERE id_user = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssssi", $name, $email, password_hash($password, PASSWORD_DEFAULT), $imageData, $id_user);
                $stmt->execute();
                
                if ($stmt->affected_rows > 0) {
                    echo "<script>alert('Data berhasil diupdate!');</script>";
                } else {
                    echo "<script>alert('Gagal mengupdate data!');</script>";
                }
            } else {
                echo "<script>alert('Format gambar tidak valid! Harus jpg, jpeg, atau png.');</script>";
            }
        } else {
            // Jika tidak ada foto baru, update data tanpa mengganti foto
            $query = "UPDATE user SET nama = ?, email = ?, password = ? WHERE id_user = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sssi", $name, $email, password_hash($password, PASSWORD_DEFAULT), $id_user);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Data berhasil diupdate!');</script>";
            } else {
                echo "<script>alert('Gagal mengupdate data!');</script>";
            }
        }
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

  <div class="container">
    <div class="left-section">
        <div class="profile">

        <?php
        if ($is_logged_in) {
          $id_user = $_SESSION['id_user'];
          $query = "SELECT * FROM user WHERE id_user = '$id_user'";
          $read = mysqli_query($conn, $query);
          $data = mysqli_fetch_array($read);
        
          $nama = $data['nama'];
          $email = $data['email'];
          $password = $data['password'];
          $foto = $data['foto'];
        }
        ?>
        
        <!-- Menampilkan foto profil -->
        <?php echo "<img class='profile-img' src='data:image/jpeg;base64,".base64_encode($data['foto'])."' alt='Image' width='100'>"; ?>

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
                <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
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
                <button type="submit" name="submit" class="save-button">Save Profile</button>
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
          <a href="https://www.instagram.com/psg" target="_blank" rel="noopener noreferrer">
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
            <i class='bx bxl-twitter'></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/PSG" target="_blank" rel="noopener noreferrer">
            <i class='bx bxl-youtube'></i>
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@psg" target="_blank" rel="noopener noreferrer">
            <i class='bx bxl-tiktok'></i>
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
