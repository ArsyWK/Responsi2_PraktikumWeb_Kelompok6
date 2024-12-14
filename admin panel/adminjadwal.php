<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Hasil Pemain</title>
    <link rel="stylesheet" href="adminjadwal.css??v=<?php echo time(); ?>">
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

    <div class="Jadwal">
        <div>
            <a href="#"><h1>Pertandingan Lalu</h1></a>
        </div>
        <div>
            <a href="#"><h1>Pertandingan Mendatang</h1></a>
        </div>
    </div>

    <div class="plus">
        <button type="button" id="toggleFormBtn">
            <i class='bx bx-plus'></i>
        </button>
    </div>
    

    <div class="form-container" id="form-container">
           <button type="button" id="closeFormBtn">&times;</button>
        <form id="team-form">
            <div class="team-row">
            <div class="form-group">
                <label for="team-name-1">Nama Tim</label>
                <input type="text" id="team-name-1" name="team-name-1" placeholder="Nama Tim">
            </div>
            <div class="form-group">
                <label for="team-logo-1">Upload Logo</label>
                <input type="file" id="team-logo-1" name="team-logo-1">
            </div>
            <div class="form-group">
                <label for="team-score-1">Skor</label>
                <input type="text" id="team-score-1" name="team-score-1" placeholder="Skor">
            </div>
            </div>

            <div class="team-row">
            <div class="form-group">
                <label for="team-name-2">Nama Tim</label>
                <input type="text" id="team-name-2" name="team-name-2" placeholder="Nama Tim">
            </div>
            <div class="form-group">
                <label for="team-logo-2">Upload Logo</label>
                <input type="file" id="team-logo-2" name="team-logo-2">
            </div>
            <div class="form-group">
                <label for="team-score-2">Skor</label>
                <input type="text" id="team-score-2" name="team-score-2" placeholder="Skor">
            </div>
            </div>

            <div class="date-row">
            <label for="tanggal">Tanggal Tahun</label>
            <div class="date-inputs">
                <input type="text" id="tanggal" name="tanggal" maxlength="2" placeholder="DD">
                <input type="text" id="bulan" name="bulan" maxlength="2" placeholder="MM">
                <input type="text" id="tahun" name="tahun" maxlength="4" placeholder="YYYY">
            </div>
            </div>

            <button type="submit" id="submit-button">Submit</button>
        </form>
    </div>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    const toggleFormBtn = document.getElementById('toggleFormBtn');
    const formContainer = document.getElementById('form-container');
    const closeFormBtn = document.getElementById('closeFormBtn');

    // Fungsi untuk membuka form
    toggleFormBtn.addEventListener('click', () => {
        formContainer.style.display = 'block';
    });

    // Fungsi untuk menutup form
    closeFormBtn.addEventListener('click', () => {
        formContainer.style.display = 'none';
    });

    // Menutup form jika pengguna klik di luar form
    document.addEventListener('click', (e) => {
        if (
            formContainer.style.display === 'block' &&
            !formContainer.contains(e.target) &&
            !toggleFormBtn.contains(e.target)
        ) {
            formContainer.style.display = 'none';
        }
    });
});

</script>

    <div class="periode-container">
    <h2 class="periode">2023/2024</h2>
    </div>

    <div class="jadwal-container">
        <div class="league">
            <h3>Informatics Army Week 2</h3>
        </div>
        <div class="match-item">
            <div class="match-team">
                <h2>Paris Saint Germain</h2>
            </div>
            <img class="psg-logo" src="../img/Logo-PSG.png" alt="Psg Logo">
            <div class="score-container">
                <p>1</p>
                <p>0</p>
            </div>
            <img class="team-logo" src="../img/manchestercity.png" alt="Manchester City Logo">
            <div class="match-team">
                <h2>Manchester City</h2>
            </div>
            
        </div>
    </div>
    <div class="jadwal-container">
        <div class="league">
            <h3>Tournament Perancis Week 2</h3>
        </div>
        <div class="match-item">
            <div class="match-team">
                <h2>Paris Saint Germain</h2>
            </div>
            <img class="psg-logo" src="../img/Logo-PSG.png" alt="Psg Logo">
            <div class="score-container">
                <p>2</p>
                <p>0</p>
            </div>
            <img class="team-logo" src="../img/chelsea.png" alt="chelsea Logo">
            <div class="match-team">
                <h2>Chelsea</h2>
            </div>
            
        </div>
    </div>
    <div class="jadwal-container">
        <div class="league">
            <h3>PORSOED Week 1</h3>
        </div>
        <div class="match-item">
            <div class="match-team">
                <h2>Paris Saint Germain</h2>
            </div>
            <img class="psg-logo" src="../img/Logo-PSG.png" alt="Psg Logo">
            <div class="score-container">
                <p>1</p>
                <p>0</p>
            </div>
            <img class="team-logo" src="../img/arsenal.png" alt="arsenal Logo">
            <div class="match-team">
                <h2>Arsenal</h2>
            </div>
            
        </div>
    </div>
    <div class="jadwal-container">
        <div class="league">
            <h3>GBK Week 2</h3>
        </div>
        <div class="match-item">
            <div class="match-team">
                <h2>Borussia Dortmund</h2>
            </div>
            <img class="team-logo" src="../img/bvb.png" alt="bvb Logo">
            <div class="score-container">
                <p>4</p>
                <p>0</p>
            </div>
            <img class="psg-logo" src="../img/Logo-PSG.png" alt="Psg Logo">
            <div class="match-team">
                <h2>Paris Saint Germain</h2>
            </div>
        </div>
            
        </div>
    </>


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
      <img src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>
  </footer>

</body>
</html>