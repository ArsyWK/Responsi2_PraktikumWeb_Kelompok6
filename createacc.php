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
     <img src="img/Logo-PSG.png" alt="PSG Logo">
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
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);

        // Validasi password
        if ($password !== $confirm_password) {
            echo "<script>alert('Password tidak cocok!'); window.history.back();</script>";
            exit();
        }

        // Enkripsi password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk insert data
        $sql = "INSERT INTO user (nama, email, password) VALUES ('$name', '$email', '$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registrasi berhasil!'); window.location.href='signin.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal: " . mysqli_error($conn) . "'); window.history.back();</script>";
        }

        // Tutup koneksi
        mysqli_close($conn);
    }
    ?>


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
      </div>
    </div>
    <div class="footer-logo">
      <img src="img/Logo-PSG.png" alt="PSG Logo">
    </div>
  </footer>
</body>
</html>