<?php

// Veritabanı sunucusu, veritabanı adı, kullanıcı adı ve parola değişkenlerini tanımla
$servername = "localhost";
$dbname = "ceyshop";
$username = "root";
$password = "";

try {
    // PDO bağlantısı oluştur
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    
    // Hata ayıklama modunu etkinleştir
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Bağlantı hatası durumunda hatayı ekrana yazdır
    echo "Bağlantı kurulamadı: " . $e->getMessage();
    // Betiği sonlandır
    exit;
}

?>
