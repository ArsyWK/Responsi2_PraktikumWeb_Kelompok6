<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Pemain</title>
    <link rel="stylesheet" href="adminprestasi.css?v=<?php echo time(); ?>">
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

    <label for="judul">Judul Pertandingan</label>
    <input type="text" id="judul" name="judul" placeholder="Masukkan judul pertandingan" required>

    <label for="nama-tim">Nilai Pertandingan</label>
    <input type="text" id="nama-tim" name="nama-tim" placeholder="Masukkan nilai pertandingan tim" required>

    <button type="submit" id="submitFormBtn">Submit</button>
  </form>
</div>
<script>
 document.addEventListener('DOMContentLoaded', () => {
    const toggleFormBtn = document.getElementById('toggleFormBtn');
    const formContainer = document.getElementById('form-container');
    const closeFormBtn = document.getElementById('closeFormBtn');

    // Fungsi untuk membuka form
    toggleFormBtn.addEventListener('click', () => {
        formContainer.style.display = (formContainer.style.display === 'none' || formContainer.style.display === '') 
            ? 'flex' 
            : 'none';
    });

    // Fungsi untuk menutup form
    closeFormBtn.addEventListener('click', () => {
        formContainer.style.display = 'none';
    });

    // Menutup form jika pengguna klik di luar form
    document.addEventListener('click', (e) => {
        if (
            formContainer.style.display === 'flex' && 
            !formContainer.contains(e.target) && 
            !toggleFormBtn.contains(e.target)
        ) {
            formContainer.style.display = 'none';
        }
    });
});


  </script>

    <div class="score-table">
        <div class="score-box">
            <p class="score">60</p>
            <p class="label">Tournament Perancis</p>
        </div>
        <div class="score-box">
            <p class="score">60</p>
            <p class="label">GBK</p>
        </div>
        <div class="score-box">
            <p class="score">60</p>
            <p class="label">INFORMATICS ARMY</p>
        </div>
        <div class="score-box">
            <p class="score">80</p>
            <p class="label">PORSOED</p>
        </div>
    </div>   

    <div class="picture">
        <img class="psg-icon" src="../img/image 20.png" alt="Psg Logo">
    </div>
    
    <div class="table-container">
    <table border="1"cellspacing="0">
      <thead>
        <tr>
          <th>Tournament Perancis</th>
          <th>8-0</th>
          <th>8-0</th>
          <th>8-0</th>
          <th>8-0</th>
          <th>8-0</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>GBK</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
        </tr>
        <tr>
          <td>INFORMATICS ARMY</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
        </tr>
        <tr>
          <td>PORSOED</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
          <td>8-0</td>
        </tr>
      </tbody>
    </table>
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
      <img src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>
  </footer>


</body>
</html>