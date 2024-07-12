<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="assets/css/stylee.css">
</head>
<body>
<div class="navbar">
  <div class="navbar-icon">
    <i class="fa-solid fa-circle-user fa-2x1"></i>
  </div>
  <div class="navbar-page">
    <ul type="none">
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Portofolio</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="navbar-sosmed">
    <ul type="none">
      <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
      <li><i class="fa-brands fa-instagram fa-lg"></i></li>
      <li><i class="fa-brands fa-facebook fa-lg"></i></li>
      <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
    </ul>
  </div>
</div>
    <div class="banner">
        <span class="name">
            M Miftahul Huda
        </span><br>
        <span class="description">
            Mahasiswa lulusan Teknik Informatika jurusan Teknik Informatika angkatan 2022
        </span>
    </div>
    <?= $this->renderSection('content') ?>
</body>
</html>
