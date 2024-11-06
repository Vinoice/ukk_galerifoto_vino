<?php
session_start();
include '../config/koneksi.php';

if ($_SESSION['status'] != 'login') {
    echo "<script>
    alert('Anda belum login!'); 
    location.href='../index.php';
    </script>";
    exit();
}

if (isset($_POST['komentarid'])) {
    $komentarid = $_POST['komentarid'];
    
    // Delete the comment without checking for ownership
    $deleteComment = mysqli_query($koneksi, "DELETE FROM komentarfoto WHERE komentarid='$komentarid'");
    
    if ($deleteComment) {
        // Success message
        echo "<script>
        alert('Komentar berhasil dihapus.');
        location.href='../admin/home.php'; // Redirect back to the appropriate page
        </script>";
    } else {
        // Error handling
        echo "<script>
        alert('Gagal menghapus komentar. Silakan coba lagi.');
        location.href='../admin/home.php'; // Redirect back to the appropriate page
        </script>";
    }
} else {
    // Redirect if no comment ID was provided
    echo "<script>
    alert('Tidak ada komentar yang dipilih untuk dihapus.');
    location.href='../admin/home.php'; // Redirect back to the appropriate page
    </script>";
}
?>
