<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisrt Team</title>
    <link rel="stylesheet" href="adminFirstTeam.css?v=<?php echo time();?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Header Section -->
  <header class="header">
      <nav class="nav-menu">
          <ul>
              <li><a href="#">Menu</a></li>
              <li><a href="#">Pemain</a></li>
              <li><a href="#">Klub</a></li>
              <li><a href="#">Berita</a></li>
            </ul>
            <i class='bx bxs-user-circle'></i>
        </nav>
    </header>
    <div class="logo">
      <img class="logo-img" src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>

    <div class="container">
       <div class="artikel">
            <a href="#">Artikel</a>
       </div>
       <div class="prestasi">
            <a href="#">Prestasi</a>
       </div>
       <div class="galeri">
            <a href="#">Galeri</a>
       </div>
       <div class="jadwal">
            <a href="#">Jadwal Hasil</a>
       </div>
       <div class="player">
            <a href="#">Player</a>
       </div>
    </div>

    <div class="Pemain">
        <div>
            <h1>Tim Pertama</h1>
        </div>
        <div>
            <h1>Tim Wanita</h1>
        </div>
    </div>

    <div class="plus"><button type="button" id="toggleFormBtn"><i class='bx bx-plus'></i></button></div>
    <div class="form-container" id="form-container" style="display: none;">
  <form id="popup-form">
    <button type="button" id="closeFormBtn">&times;</button>

    <label for="nama-orang">Nama Orang</label>
    <input type="text" id="nama-orang" name="nama-orang" placeholder="Masukkan nama orang" required>

    <label for="nama-role">Nama Role</label>
    <input type="text" id="nama-role" name="nama-role" placeholder="Masukkan nama role" required>

    <label for="asal">Asal</label>
    <input type="text" id="asal" name="asal" placeholder="Masukkan asal" required>

    <label for="permainan">Permainan, Goal, Assist</label>
    <div class="small-inputs">
      <input type="text" id="permainan" name="permainan" placeholder="Permainan" required>
      <input type="text" id="goal" name="goal" placeholder="Goal" required>
      <input type="text" id="assist" name="assist" placeholder="Assist" required>
    </div>

    <label for="tanggal-lahir">Tanggal Lahir</label>
    <div class="date-inputs">
      <input type="text" id="tanggal" name="tanggal" maxlength="2" placeholder="DD" required>
      <input type="text" id="bulan" name="bulan" maxlength="2" placeholder="MM" required>
      <input type="text" id="tahun" name="tahun" maxlength="4" placeholder="YYYY" required>
    </div>

    <label for="tinggi-berat">Tinggi Badan / Berat Badan</label>
    <div class="small-inputs">
      <input type="text" id="tinggi-badan" name="tinggi-badan" placeholder="Tinggi (cm)" required>
      <input type="text" id="berat-badan" name="berat-badan" placeholder="Berat (kg)" required>
    </div>

    <button type="submit" id="submitFormBtn">Submit</button>
  </form>
</div>
    <script>
     document.addEventListener('DOMContentLoaded', () => {
    const toggleFormBtn = document.getElementById('toggleFormBtn');
    const formContainer = document.getElementById('form-container');
    const closeFormBtn = document.getElementById('closeFormBtn');
    const popupForm = document.getElementById('popup-form');

    // Fungsi untuk membuka form
    toggleFormBtn.addEventListener('click', () => {
        formContainer.style.display = 'flex';
    });

    // Fungsi untuk menutup form
    closeFormBtn.addEventListener('click', () => {
        formContainer.style.display = 'none';
    });

    // Menutup form jika pengguna klik di luar form
    document.addEventListener('click', (e) => {
        if (!formContainer.contains(e.target) && !toggleFormBtn.contains(e.target)) {
            formContainer.style.display = 'none';
        }
    });
     });
</script>

    <h2 class="position">Attacker</h2>

    <div class="player-container">

    <div class="card-container">
        <div class="card">
            <div class="image-container">
                <img src="../img/pemain.png" alt="Player Image" class="player-image">
                <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>
        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

    
        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>
    </div>


   
    <h2 class="position">Defender</h2>

    <div class="player-container">  
    <div class="card-container">
        <div class="card">
            <div class="image-container">
                <img src="../img/pemain.png" alt="Player Image" class="player-image">
                <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>
        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image-container">
                    <img src="../img/pemain.png" alt="Player Image" class="player-image">
                    <div class="player-name-overlay">
                    <h2>Gelandang</h2>
                    <p>Jonna P. Diddy</p>
                    </div>
                <div class="stats-container">
                    <div class="stats-1">
                        <div class="play">
                            <h3>Permainan</h3>
                            <p>30</p>
                        </div>
                        <div class="goal">
                            <h3>Gol</h3>
                            <p>5</p>
                        </div>
                    </div>
                    <div class="stats-2">
                        <h3>Assist</h3>
                        <p>2</p>
                    </div>
                </div>
                </div>
            </div>   
        </div>
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
