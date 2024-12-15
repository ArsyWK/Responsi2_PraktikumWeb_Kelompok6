<?php
ini_set('session.gc_maxlifetime', 3600); // 1 jam
session_set_cookie_params(3600);
session_start();
include 'koneksi.php'; // Hubungkan ke database

// Ambil data pemain berdasarkan posisi Attacker
$query = "SELECT * FROM pemain WHERE posisi = 'Attacker'";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisrt Team</title>
    <link rel="stylesheet" href="teams.css?v=<?php echo time();?>">
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
            <a href="#">Player</a>
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

    <?php
include 'koneksi.php'; // Hubungkan ke database

$positions = ['Attacker', 'Defender', 'Midfielder', 'Goalkeeper'];

foreach ($positions as $position) {
    echo "<h2 class='position'>$position</h2>";
    $query = "SELECT * FROM pemain WHERE posisi = '$position'";
    $result = mysqli_query($conn, $query);

    echo "<div class='player-container'>";
    while ($row = mysqli_fetch_assoc($result)) {
        // Konversi foto dari BLOB ke base64
        $foto = base64_encode($row['foto']);

        echo "
            <div class='card-container'>
                <a href='biopemain.php?id_pemain={$row['id_pemain']}' class='card-link'> <!-- Tambahkan link -->
                    <div class='card'>
                        <div class='image-container'>
                            <img src='data:image/png;base64,{$foto}' alt='Player Image' class='player-image'>
                            <div class='player-name-overlay'>
                                <h2>{$row['posisi']}</h2>
                                <p>{$row['nama']}</p>
                            </div>
                            <div class='stats-container'>
                                <div class='stats-1'>";

        // Cek jika posisi adalah Goalkeeper
        if ($row['posisi'] == 'Goalkeeper') {
            echo "
                                    <div class='clean-sheet'>
                                        <h3>Clean Sheet</h3>
                                        <p>{$row['clean']}</p>
                                    </div>
                                    <div class='saves'>
                                        <h3>Saves</h3>
                                        <p>{$row['saves']}</p>
                                    </div>";
        } else { // Untuk posisi selain Goalkeeper
            echo "
                                    <div class='play'>
                                        <h3>Permainan</h3>
                                        <p>{$row['permainan']}</p>
                                    </div>
                                    <div class='goal'>
                                        <h3>Gol</h3>
                                        <p>{$row['gol']}</p>
                                    </div>";
        }

        echo "              </div>
                                <div class='stats-2'>";
        if ($row['posisi'] == 'Goalkeeper') {
            echo "
                                    <h3>Permainan</h3>
                                    <p>{$row['permainan']}</p>";
        } else {
            echo "
                                    <h3>Assist</h3>
                                    <p>{$row['assist']}</p>";
        }
        echo "              </div>
                            </div>
                        </div>
                    </div>
                </a> <!-- Link berakhir -->
            </div>";
    }
    echo "</div>";
}
mysqli_close($conn);
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