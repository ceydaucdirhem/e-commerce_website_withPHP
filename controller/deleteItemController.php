<?php

    // Veritabanı bağlantı dosyasını dahil et
    include_once "../config/dbconnect.php";
    
    // Silinecek ürünün id'sini post edilen veriden al
    $p_id=$_POST['record'];
    
    // Ürünü silme sorgusunu hazırla
    $query="DELETE FROM product where product_id='$p_id'";

    // Sorguyu çalıştır
    $data=mysqli_query($conn,$query);

    // Eğer işlem başarılıysa
    if($data){
        echo"Ürün silindi.";
    }
    // Aksi takdirde
    else{
        echo"Silinemedi.";
    }
    
?> 
