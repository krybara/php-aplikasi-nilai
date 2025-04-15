<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Nilai RGI by Kry</title>
    <link rel="shortcut icon" href="img/RGI.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href=".">
   <img src="img/images.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
    <strong>&nbsp;&nbsp; Aplikasi Nilai RGI</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?em=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?em=profil">Profil</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="?em=jurusan">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?em=siswa">Santri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?em=matadiklat">Mata Diklat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?em=guru">Guru</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <div class="container-fluid mt-2 mb-4">
<?php
$module = (isset($_GET['em'])) ? $_GET['em'] : "home";
switch ($module) {
    case 'home': default:
        include "home.php";
        break;

    case 'profil':
        include "profil.php";
        break;

    case 'jurusan': 
        include "jurusan/index.php";
        break;

    case 'siswa': 
        include "siswa/index.php";
        break;

    case 'matadiklat': 
        include "matadiklat/index.php";
        break;

    case 'guru': 
        include "guru/index.php";
        break;

   
}
?>
    </div>

    <div class="fixed-bottom" data-bs-theme="dark">
        <div class="card">
            <div class="card-body">
                <div class="float-end text-right">
                    <b>Aplikasi Nilai</b> 0.0.2 by <a href="#" target="blank" rel="noopener noreferrer">Syukri</a>
                </div>
                &copy; 2025-<?= date('Y') ?> <b><a href="https://rumahgemilang.com" target="blank" rel="noopener noreferrer" title="Rumah Gemilang Indonesia">TKJ32</a></b>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>