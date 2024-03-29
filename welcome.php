<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Holgeldiniz !</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylee.css" />

</head>
<body>
    <div class="form">
    <div class="center">

<a href="index.php"><img src="imgs/welcome.gif" alt="" style="width:350px"></a>
</div>
        <!-- Merhaba, kullanıcı adınız burada görüntülenecek -->
        <p>Merhaba, <?php echo $_SESSION['username']; ?>!</p>
        <p>Seni gördüğümüz için mutluyuz!</p>
        <p class="ghostt">---------------------------------------------</p>
        <p><i class="fa fa-sign-out" style="font-size:14px;color:black"></i> <a href="logout.php">Çıkış yap</a></p>
        <p><i class="fa fa-home" style="font-size:14px;color:black"></i> <a href="index.php">Anasayfaya git</a></p>
    </div>
</body>
</html>