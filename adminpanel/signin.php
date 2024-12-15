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
    <title>Signin</title>
    <link rel="stylesheet" href="signin.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <!-- header -->
    <header class="header">
     <img src="../img/Logo-PSG.png" alt="PSG Logo">
    </header>

<?php
// Mulai sesi jika belum aktif
if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}

// Hubungkan ke database
include 'koneksi.php';

// Periksa apakah form telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $stmt = $conn->prepare("SELECT id_user, nama, email, password, foto FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika pengguna ditemukan
    if ($result->num_rows === 1) {
      $user = $result->fetch_assoc();
      if (password_verify($password, $user['password'])) {
          // Cek apakah pengguna adalah admin
          if ($admin['role'] === 'admin') {
              $_SESSION['email'] = $user['email'];
              $_SESSION['nama'] = $user['nama'];
              $_SESSION['foto'] = $user['foto'];
              $_SESSION['id_admin'] = $user['id_admin'];
              $_SESSION['role'] = $user['role']; // Tambahkan role ke sesi
              $_SESSION['is_logged_in'] = true;
  
              header("Location: index.php");
              exit();
          } else {
              echo "<script>alert('Akses ditolak! Anda bukan admin.'); window.history.back();</script>";
              exit();
          }
      } else {
          echo "<script>alert('Password salah!'); window.history.back();</script>";
          exit();
      }
  } else {
      echo "<script>alert('Email tidak ditemukan!'); window.history.back();</script>";
      exit();
  }
}
?>


    <div class="container">
        <div class="image-profile">
            <img src="../img/Component 1.png" alt="">
        </div>
        <div class="form">
            <h2>Sign In Admin PSG</h2>
            <form action="signin.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <input type="password" name="password" placeholder="Password" required>
                <br>
                <button type="submit">Masuk</button>
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