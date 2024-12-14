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
              <li><a href="#">Menu</a></li>
              <li><a href="#">Pemain</a></li>
              <li><a href="#">Klub</a></li>
              <li><a href="#">Berita</a></li>
            </ul>
            <i class='bx bxs-user-circle'></i>
        </nav>
    </header>


    <div class="content">
        <div class="question-list">
            <p class="q-1">Question 1<span></span></p>
            <p class="q-2">Question 2<span></span></p>
            <p class="q-3">Question 3<span></span></p>
            <p class="q-4">Question 4<span><h1></h1></span></p>
            <p class="q-5">Question 5<span></span></p>
        </div>
        <div class="question">

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
                <div class="popup" id="popup">
                        <img src="../img/tick1.png">
                        <h2>Terima Kasih!</h2>
                        <p>Feedback anda telah kami terima</p>
                        <button type="button" onclick="closePopup()"> OK </button>
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
      </div>
    </div>
    <div class="footer-logo">
      <img src="../img/Logo-PSG.png" alt="PSG Logo">
    </div>
  </footer>
</body>

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
        document.getElementById('popup').classList.add('open-popup');
        document.querySelector('.q-5').style.display = 'none';
        // openPopup();
                }
            }

            function closePopup() {
    document.getElementById('popup').classList.remove("open-popup");
}

</script>
</html>