<?php
    // Veritabanı bağlantı dosyasını dahil et
    include_once "../config/dbconnect.php";
   
    // Post verisinden sipariş ID'sini al
    $order_id=$_POST['record'];
    
    // Siparişin mevcut durumunu almak için sorgu hazırla ve çalıştır
    $sql = "SELECT order_status from orders where order_id='$order_id'"; 
    $result=$conn-> query($sql);
    $row=$result-> fetch_assoc();
    
    // Siparişin durumunu tersine çevir
    if($row["order_status"]==0){
         $update = mysqli_query($conn,"UPDATE orders SET order_status=1 where order_id='$order_id'");
    }
    else if($row["order_status"]==1){
         $update = mysqli_query($conn,"UPDATE orders SET order_status=0 where order_id='$order_id'");
    }
    
    // Eğer güncelleme başarılıysa
    // if($update){
    //     echo"success";
    // }
    // Aksi takdirde
    // else{
    //     echo"error";
    // }
    
?>  
