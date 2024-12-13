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
        document.querySelector('.congrats-title').style.display = 'block';
        document.querySelector('.q-5').style.display = 'none';
    }
}
</script>
</html>