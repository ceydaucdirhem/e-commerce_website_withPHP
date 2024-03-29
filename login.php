<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="stylee.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // Form gönderildiğinde, kullanıcı oturumunu kontrol eder ve oluşturur.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // ters eğik çizgileri kaldırır
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Kullanıcının veritabanında var olup olmadığını kontrol eder
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
       $result = mysqli_query($con, $query) or die(mysqli_error($con));

        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Kullanıcı hoşgeldiniz  sayfasına yönlendirme
            header("Location: welcome.php");
        } else {
            echo "<div class='form'>
                  <h3>Geçersiz kullanıcı adı veya şifre.</h3><br/>
                  <p class='link'>Giriş yapmak için tekrar <a href='login.php'>tıklayın .</a> </p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        
    <div class="center">

            <a href="index.php"><img src="imgs/logo2.png" alt="" style="width:250px"></a>
</div>
        <h1 class="login-title">Giriş Yap</h1>
        <input type="text" class="login-input" name="username" placeholder="Kullanıcı Adı" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Şifre"/>
        <input type="submit" value="Giriş Yap" name="submit" class="login-button"/>
        <p class="link">Hesabın yok mu?  <a href="registration.php">Kayıt Ol</a></p>
  </form>
<?php
    }
?>
</body>
</html>