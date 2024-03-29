<?php
session_start();
// Fonksiyonları dahil edildi ve PDO MySQL kullanarak veritabanına bağlanıldı
include 'functions.php';
$pdo = pdo_connect_mysql();

// Sayfa varsayılan olarak home (home.php) olarak ayarlanmıştır, bu nedenle ziyaretçi ziyaret ettiğinde gördüğü sayfa bu olacaktır.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// İstenen sayfayı dahil edildi ve gösterildi
include $page . '.php';
?>