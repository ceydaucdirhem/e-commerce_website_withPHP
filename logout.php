<?php
    // Bu dosya oturumu sonlandırır
    session_start();
    // Oturumu sonlandır
    if(session_destroy()) {
        // Anasayfaya yönlendirme
        header("Location: login.php");
    }
?>
