<?php
    // Veritabanı bağlantı dosyasını dahil et
    include_once "../config/dbconnect.php";

    // Post verisinden sipariş ID'sini al
    $order_id=$_POST['record'];
    
    // Siparişin mevcut ödeme durumunu almak için sorgu hazırla ve çalıştır
    $sql = "SELECT pay_status from orders where order_id='$order_id'"; 
    $result=$conn-> query($sql);
    $row=$result-> fetch_assoc();
    
    // Ödeme durumunu tersine çevir
    if($row["pay_status"]==0){
         $update = mysqli_query($conn,"UPDATE orders SET pay_status=1 where order_id='$order_id'");
    }
    else if($row["pay_status"]==1){
         $update = mysqli_query($conn,"UPDATE orders SET pay_status=0 where order_id='$order_id'");
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
