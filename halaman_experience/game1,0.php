<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project Kalkulator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="/my_porto/FavIcon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/my_porto/FavIcon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/my_porto/FavIcon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

  <style>
    /* Global Layout Styles */
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: white;
      background-color: #212529;
    }

    main {
      flex: 1; /* Biar isi halaman ngisi ruang kosong */
    }

    .navbar {
      font-weight: 600;
    }

    h2 {
      text-align: center;
      margin-top: 2rem;
      color: white;
    }

    html {
      scroll-behavior: smooth;
    }

    #contact a {
      color: white;
      text-decoration: none;
    }

    #contact img {
      width: 30px;
      margin-right: 15px;
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black text-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/my_porto/index1,3.php"><em>MyPorto</em></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="/my_porto/index1,3.php/#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/my_porto/index1,3.php/#about">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Others</a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white" href="/my_porto/index1,3.php/#experience">My Experience</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="#contact">Contact</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  <!-- MAIN CONTENT -->
  <h2 data-aos="zoom-in">Game 2D</h2>
   <main>
    <div class="container-fluid mt-4">
    <div class="container d-flex flex-wrap gap-4">
        <div class="col-lg-3 col-12 p-3 border border-light rounded-4 text-center" data-aos="fade-right">
          <h2>Documentation</h2><br>
          <img class="mb-4" style="width: 18rem; border-radius: 8px;" src="/my_porto/assets/game1.png" alt="">
        </div>
      <div class="col-lg-8 col-12 p-3 border border-light rounded-4" data-aos="fade-left">
        <h2>Project Background</h2><br>
        <p>Proyek pembuatan game 2D ini dibuat sebagai bagian dari tugas sekolah untuk mengasah kemampuan dalam pemrograman dan desain game. Dalam tugas ini, kami diberi kesempatan untuk menerapkan berbagai konsep yang telah dipelajari, seperti logika pemrograman dan pembuatan antarmuka pengguna, dalam sebuah proyek yang praktis dan menarik.</p>
        <p>Game 2D dipilih karena kesederhanaannya yang memungkinkan kami untuk fokus pada aspek teknis dan kreatif tanpa terlalu banyak kesulitan. Selain itu, pembuatan game ini memberikan pengalaman berharga dalam bekerja dengan tim dan menyelesaikan proyek dalam waktu yang terbatas.</p>
      </div>
   </main>

    <!-- CONTACT SECTION -->
    <section id="contact" class="container-fluid py-4">
      <div class="container col-4" data-aos="fade-up">
        <h2 class="text-center mt-5">My Contact</h2><br>
        <ul style="list-style: none; padding-left: 0;">
          <li><img src="/my_porto/assets/wa.png"><a href="https://wa.me/6283126236867" target="_blank">Whatsapp</a></li><br>
          <li><img src="/my_porto/assets/ig.png"><a href="https://www.instagram.com/_fhndwii" target="_blank">Instagram</a></li><br>
          <li><img src="/my_porto/assets/gmail.png"><a href="mailto:farhanmoch285@gmail.com" target="_blank">Gmail</a></li><br>
        </ul>
      </div>
    </section>

  <!-- FOOTER -->
  <footer class="bg-white text-black text-center py-4">
    <div class="container">
      <p class="mb-0">© 2025 Hann. All rights reserved.</p>
    </div>
  </footer>

  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ 
      duration: 1500,
      once: true 
    });
  </script>
</body>
</html> 