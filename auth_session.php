<?php
    // Oturumu başlat
    session_start();
    // Kullanıcı adı oturum değişkeni mevcut değilse
    if(!isset($_SESSION["username"])) {
        // Kullanıcıyı giriş sayfasına yönlendir
        header("Location: login.php");
        // Betiği sonlandır
        exit();
    }
?>
