<?php
session_start();

// Menghapus semua data session
session_unset();

// Menghancurkan session
session_destroy();

// Redirect ke halaman index setelah log out
echo "<script>alert('Anda telah log out!!!');</script>";
echo "<script>location='index.php';</script>";
exit();
?>
