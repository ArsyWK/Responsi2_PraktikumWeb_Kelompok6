<?php
ini_set('session.gc_maxlifetime', 3600); // 1 jam
session_set_cookie_params(3600);
session_start();
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: signin.php');
    exit;
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('host', 'username', 'password', 'database');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $q1 = $_POST['question1'];
    $q2 = $_POST['question2'];
    $q3 = $_POST['question3'];
    $q4 = $_POST['question4'];
    $q5 = $_POST['question5'];

    $sql = "INSERT INTO feedback (question1, question2, question3, question4, question5)
            VALUES ('$q1', '$q2', '$q3', '$q4', '$q5')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback berhasil dikirim!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="feedback.css?v=<?php echo time(); ?>">
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



    <div class="content">
        <div class="question-list">
            <p>Question 1<span></span></p>
            <p>Question 2<span></span></p>
            <p>Question 3<span></span></p>
            <p>Question 4<span><h1></h1></span></p>
            <p>Question 5<span></span></p>
        </div>
        <div class="question">

        
                <h1 class="congrats-title">Terima kasih! Anda telah menjawab semua pertanyaan</h1>

            <h1 class="q-2">Apakah anda merasa mudah untuk menavigasi seluruh bagian website ini?</h1>
            <h1 class="q-5">Sejauh mana Anda merasa website ini menarik secara visual dan interaktif></h1>
            <h1 class="q-3">Seberepa puas Anda dengan tampilan visual dan desain website?</h1>
            <h1 class="q-4">Apakah informasi yang disajikan sudah lengkap dan relevan?</h1>
            <h1 class="q-1">Seberapa mudah Anda menemukan informasi yang Anda cari di website ini?</h1>
            <div class="survey-buttons">
                <button onclick="nextQuestion()">Tidak sesuai</button><br>
                <button onclick="nextQuestion()">Kurang sesuai</button><br>
                <button onclick="nextQuestion()">Sesuai</button><br>
                <button onclick="nextQuestion()">Sangat sesuai</button><br>
            </div>
        </div>
    </div>

<script>
   let currentQuestion = 0;

   function nextQuestion() {
    if (currentQuestion < 7) {
        currentQuestion++;  
    }

    if (currentQuestion === 2) {
        document.querySelector('.q-2').style.display = 'block';
        document.querySelector('.q-1').style.display = 'none';
    } else if (currentQuestion === 3) {
        document.querySelector('.q-3').style.display = 'block';
        document.querySelector('.q-2').style.display = 'none';
    } else if (currentQuestion === 4) {
        document.querySelector('.q-4').style.display = 'block';
        document.querySelector('.q-3').style.display = 'none';
    } else if (currentQuestion === 5) {
        document.querySelector('.q-1').style.display = 'block';
        document.querySelector('.q-4').style.display = 'none';
    } else if (currentQuestion === 6) {
        document.querySelector('.congrats-title').style.display = 'block';
        document.querySelector('.q-5').style.display = 'none';
    }
}
</script>
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