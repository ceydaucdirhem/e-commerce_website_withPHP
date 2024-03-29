<?php
    // Veritabanı bağlantı dosyasını dahil et
    include_once "../config/dbconnect.php";
    
    // Eğer 'upload' anahtarı post edildiyse
    if(isset($_POST['upload']))
    {
        // Formdan gelen verileri al
        $product = $_POST['product'];
        $size= $_POST['size'];
        $qty = $_POST['qty'];

        // Ürün varyasyonlarını veritabanına ekle
        $insert = mysqli_query($conn,"INSERT INTO product_size_variation
         (product_id,size_id,quantity_in_stock) VALUES ('$product','$size','$qty')");
 
        if(!$insert)
        {
            // Ekleme sırasında hata oluşursa hatayı göster ve yönlendir
            echo mysqli_error($conn);
            header("Location: ../dashboard.php?variation=error");
        }
        else
        {
            // Ekleme başarılıysa başarılı mesajı göster ve yönlendir
            echo "Records added successfully.";
            header("Location: ../dashboard.php?variation=success");
        }
    }
?>
