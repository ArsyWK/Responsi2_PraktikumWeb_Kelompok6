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
    <title>Create Account</title>
    <link rel="stylesheet" href="createacc.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <!-- header -->
    <header class="header">
     <img src="../img/Logo-PSG.png" alt="PSG Logo">
    </header>

    <div class="container">
        
        <div class="form">
            <h2>Join Our Club</h2>
            <form action="createacc.php" method="POST">
            <form action="submit.php" method="POST" class="form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama anda" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password" required>

            <label for="confirm-password">Konfirmasi Password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Masukkan password kembali" required>

            <button type="submit">Sign in</button>
            </form>

        </div>
    </div>
    <?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm-password']);

        // Validasi input tidak kosong
        if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
            echo "<script>alert('Semua field harus diisi!'); window.history.back();</script>";
            exit();
        }

        // Validasi format email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Format email tidak valid!'); window.history.back();</script>";
            exit();
        }

        // Validasi password
        if ($password !== $confirm_password) {
            echo "<script>alert('Password tidak cocok!'); window.history.back();</script>";
            exit();
        }

        // Enkripsi password
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Query menggunakan prepared statement
        $stmt = $conn->prepare("INSERT INTO user (nama, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password_hash);

        if ($stmt->execute()) {
            echo "<script>alert('Registrasi berhasil!'); window.location.href='signin.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal: " . $stmt->error . "'); window.history.back();</script>";
        }

        // Tutup statement
        $stmt->close();
    }
?>

       


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