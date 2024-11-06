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

<div class="container py-5">
    <deiv class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <dev class="text-center">
                        <h5>Login Aplikasi</h5>
                    </dev>
                    <form action="config/aksi_login.php" method="POST">
                        <label class="from-label">username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="from-label">password</label>
                        <input type="password" name="password" class="form-control" required>
                        <div class="d-grid mt-2">
                            <button class="btn btn-dark" type="sumbit" name="kirim">MASUK
                            </button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum Punya Akun? <a href="register.php">Daftar</a></p>
                </div>
            </div>
        </div>
    </deiv>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy; UKK PPLG 2024 | Vino Aldiansyah</p>    
</footer>

<footer class="d-flex justify-content-center"></footer>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>