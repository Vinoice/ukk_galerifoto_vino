<?php 

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

// Query untuk mengambil data user berdasarkan username dan password
$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    
    $_SESSION['username'] = $data['username'];
    $_SESSION['userid'] = $data['userid'];
    $_SESSION['status'] = 'login';
    
    // Cek apakah user adalah admin atau pengguna biasa
    if ($data['role'] == 'admin') {
        echo "<script>
        alert('Login Berhasil sebagai Admin');
        location.href='../admin/index.php';
        </script>";
    } else {
        echo "<script>
        alert('Login Berhasil sebagai User');
        location.href='../user/index.php';
        </script>";
    }
} else {
    echo "<script>
    alert('Username atau password salah');
    location.href='../login.php';
    </script>";
}

?>
