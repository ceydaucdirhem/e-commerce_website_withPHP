<?php
    // Ana bilgisayar adınızı, veritabanı kullanıcı adınızı, şifrenizi ve veritabanı adınızı girin.
    // Eğer localhost üzerinde veritabanı şifresi belirlemediyseniz boş olarak ayarlayın.
    $con = mysqli_connect("localhost","root","","ceyshop");
    // Bağlantıyı kontrol et
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>