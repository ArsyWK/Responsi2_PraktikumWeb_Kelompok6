<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css?v=<?php echo time();?>">
    <title>Profile</title>
</head>
<body>

<header class="header">
  <div class="logo">
      <img class="logo-img" src="img/Logo-PSG.png" alt="PSG Logo">
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

<div class="container">
    <div class="img-profile">
        <img src="img/usericon.png" alt="">
    </div>
    
    <div class="profile-container">
        <div class="setting-profile">
            <label for="name">
                Name
            </label><br>
            <input type="text" name="name" id="name"><br>
            <label for="password">
                Password
            </label><br>
            <input type="password" name="password" id="password"><br>
            
            <div class="button-container">
                <button>Save</button>
                <button>Logout</button>
            </div>
        </div>
    </div>
</div>
</div>

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
      <img src="img/image 9.png" alt="PSG Logo">
    </div>
  </footer>

</body>
</html>