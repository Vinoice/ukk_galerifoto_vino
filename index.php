<?php
session_start();
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Galeri Foto</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/style.css" class="rel">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">
        </div>
        <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
        <a href="login.php" class="btn btn-outline-primary m-1">Masuk</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5 text-center">
    <h1>Welcome To Galery Foto</h1>
    <a href="home.php" class="btn btn-dark mt-3">Mulai Ujicoba</a>
  </div>

  <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK PPLG 2024 | Vino Aldiansyah</p>
  </footer>

  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
