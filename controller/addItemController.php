<?php
    // Veritabanı bağlantı dosyasını dahil et
    include_once "../config/dbconnect.php";
    
    // Eğer 'upload' anahtarı post edildiyse
    if(isset($_POST['upload']))
    {
        // Formdan gelen verileri al
        $ProductName = $_POST['p_name'];
        $desc= $_POST['p_desc'];
        $price = $_POST['p_price'];
        
        // Dosya adını ve geçici dosya yolunu al
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        // Dosyanın nihai konumu
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        // Dosyayı nihai konuma taşı
        move_uploaded_file($temp,$finalImage);

        // Veritabanına ürünü ekle
        $insert = mysqli_query($conn,"INSERT INTO product
         (product_name,product_image,price,product_desc) 
         VALUES ('$ProductName','$image',$price,'$desc')");
 
        if(!$insert)
        {
            // Eğer ekleme başarısız olursa hata göster
            echo mysqli_error($conn);
        }
        else
        {
            // Eğer ekleme başarılı olursa başarılı mesajı göster
            echo "Başarıyla kaydedildi.";
        }
    }
?>
