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
     <img src="img/Logo-PSG.png" alt="PSG Logo">
    </header>

    <?php
    // Hubungkan ke database
    include 'koneksi.php';
    session_start(); // Mulai sesi

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query untuk mendapatkan data pengguna berdasarkan email
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                // Simpan data pengguna ke sesi
                $_SESSION['password'] = $user['password'];
                $_SESSION['email'] = $user['email'];

                // Arahkan ke halaman index.php
                header('Location: index.php');
                exit();
            } else {
                echo "<script>alert('Password salah!'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Email tidak ditemukan!'); window.history.back();</script>";
        }
    }
    ?>

    <div class="container">
        <div class="image-profile">
            <img src="img/Component 1.png" alt="">
        </div>
        <div class="form">
            <h2>Sign In</h2>
            <form action="signin.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <input type="password" name="password" placeholder="Password" required>
                <br>
                <button type="submit">Masuk</button>
                <p>Don't have an account? <a href="createacc.php">Create Your Account</a></p>
            </form>
        </div>
    </div>

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
