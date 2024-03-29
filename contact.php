
<?php
// Veritabanı bağlantısı
require('db.php');

// Form gönderildiğinde işlem yapılacak
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $need = $_POST['need'];
    $message = $_POST['message'];

    // Form verilerini veritabanına ekle
    $query = "INSERT INTO contact (name, surname, email, need, message) VALUES ('$name', '$surname', '$email', '$need', '$message')";
    $result = mysqli_query($con, $query);

    // Ekleme başarılıysa
    if ($result) {
        echo "<div style='text-align: center;padding:40px;background-color:lightgreen'>İletişim bilgileriniz başarıyla gönderildi!</div>";
    } else {
        echo "<div style='text-align: center;padding:40px;background-color:yellow'>bir hata oluştu.</div>";
    }
    
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

        <link href='custom.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="contact.csss">
        <link rel="stylesheet" href="footer.css">
</head>
<body>

<form id="contact-form" method="post" action="contact.php" role="form">

<div class="messages"></div>


<div class="container" style="padding:60px">
           

            <img src="imgs/contacttbanner.png" alt="iletisim" style="width:100%">
               
        

    <div class="row">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_name">Ad *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="lütfen adınızı girin *" required="required" data-error="isim zorunlu.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_lastname">Soyad *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="lütfen soyadınızı girin. *" required="required" data-error="soyad zorunlu.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_email">E-mail *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="lütfen e-mailinizi girin. *" required="required" data-error="Geçerli e-posta gereklidir.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_need">Lütfen ihtiyacınızı belirtin *</label>
                <select id="form_need" name="need" class="form-control" required="required" data-error="Lütfen ihtiyacınızı belirtin.">
                    <option value=""></option>
                    <option value="şikayet">Şikayet</option>
                    <option value="müşteri hizmetleri">Müşteri hizmetleri</option>
                    
                    <option value="diğer">Diğer</option>
                </select>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Mesaj *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Benim için bir mesaj *" rows="4" required="required" data-error="lütfen mesajınızı girin.." style="resize:none;height:250px"></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" class="btn btn-info btn-send" value="Gönder">
        </div>
    </div>
    
</div>

</form>


<div>

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Keşfet</h4>
  	 			<ul>
  	 				<li><a href="index.php">Anasayfa</a></li>
  	 				<li><a href="aboutus_page.html">Hakkımızda</a></li>
  	 				<li><a href="#">İletişim</a></li>
            
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Hesabım</h4>
  	 			<ul>
  	 				<li><a href="registration.php">Üye Ol</a></li>
  	 				<li><a href="login.php">Giriş Yap</a></li>
            <li><a href="#">Admin Girişi</a></li>
  	 			
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Charmlar & Bileklikler</h4>
  	 			<ul>
                   <li><a href="index.php?page=products">Charmlar</a></li>
  	 				<li><a href="index.php?page=products">Bileklikler</a></li>
  	 			
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Bizden Haberdar Olun</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 			
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
     
   
  </footer>


 
  </div>

    
</body>
</html>