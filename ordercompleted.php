<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="ordercompleted.css">
  </head>
  <body>
    <div class="container">
        <img src="imgs/verify.png" alt="" style="padding:55px">
      <h1>Siparişiniz başarılı bir şekilde kaydedilmiştir.</h1>
      
     
      
      <p>Sipariş detaylarınız e-mail adresinize gönderilmiştir.</p>
      <strong>Bizi Tercih Ettiğiniz İçin Teşekkür Ederiz..</strong>
    <form action="index.php" method="POST">
    
      <div class="options">
      
  
   
    </form>
    <a href="index.php"><button type="button"  style="background-color:black;color:smoke;width:410px;height:25px;border:none;color:#ffff">Anasayfaya Git</button></a>
    <style>


    </style>
  </body>
</html>
<?php
// POST isteği kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST ile gönderilen parola değişkenine atanır
    $password = $_POST["password"];
    // Yapılacak işlemler buraya eklenir
}
?>
