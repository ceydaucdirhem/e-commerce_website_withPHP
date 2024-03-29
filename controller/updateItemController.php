<?php
    // Veritabanı bağlantı dosyasını dahil et
    include_once "../config/dbconnect.php";

    // Formdan gelen verileri al
    $product_id=$_POST['product_id'];
    $p_name= $_POST['p_name'];
    $p_desc= $_POST['p_desc'];
    $p_price= $_POST['p_price'];
   

    // Yeni bir resim dosyası seçildiyse
    if (isset($_FILES['newImage'])) {
        $location = "./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');
        $image = rand(1000, 1000000) . "." . $ext;
        $final_image = $location . $image;
        // Dosya uzantısı geçerliyse, dosyayı taşı
        if (in_array($ext, $valid_extensions)) {
            $path = $location . $image; // burası değiştirildi
            move_uploaded_file($tmp, $dir . $image);
        }
    }else{
        // Yeni bir resim dosyası seçilmediyse, mevcut resmi kullan
        $final_image=$_POST['existingImage'];
    }
    
    // Ürünü güncelle
    $updateItem = mysqli_query($conn,"UPDATE product SET 
        product_name='$p_name', 
        product_desc='$p_desc', 
        price=$p_price,
        
        product_image='$final_image' 
        WHERE product_id=$product_id");

    // Eğer güncelleme başarılıysa
    if($updateItem)
    {
        echo "true";
    }
    // Aksi takdirde
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>  
