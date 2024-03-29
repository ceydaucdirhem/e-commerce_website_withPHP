<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Üye Ol</title>
    <link rel="stylesheet" href="stylee.css"/>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value.trim();
            var email = document.getElementById("email").value.trim();
            var password = document.getElementById("password").value.trim();

            // Kullanıcı adı kontrolü: en az 3 karakter olmalı
            if (username.length < 3) {
                alert("Kullanıcı adı en az 3 karakter olmalıdır.");
                return false;
            }

            // E-posta kontrolü: geçerli bir e-posta adresi olmalı
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Geçerli bir e-posta adresi giriniz.");
                return false;
            }

            // Şifre kontrolü: en az 6 karakter olmalı
            if (password.length < 6) {
                alert("Şifre en az 6 karakter olmalıdır.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
<?php
    require('db.php');
    // Form gönderildiğinde, değerleri veritabanına ekleyin.
    if (isset($_REQUEST['username'])) {
        // ters eğik çizgileri kaldırır
        $username = stripslashes($_REQUEST['username']);
        //bir dizedeki özel karakterleri kaçar
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>

                
                 
                  <h3>Üyeliğiniz başarıyla gerçekleşti.</h3><br/>
                  <p class='link'>Hesabın var mı? <a href='login.php'>Giriş Yap</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Gerekli alanlar eksik.</h3><br/>
                  <p class='link'>hesabın yok mu? <a href='registration.php'>Kayıt ol.</a> again.</p>
                  </div>";
        }
    } else {
        
?>
     <form class="form" action="" method="post" onsubmit="return validateForm()">

        <div class="center">
            <a href="index.php"><img src="imgs/logo2.png" alt="" style="width:250px"></a>
        </div>
            
        <h1 class="login-title">Üye Ol</h1>
        <input type="text" class="login-input" id="username" name="username" placeholder="Kullanıcı Adı" required />
        <input type="email" class="login-input" id="email" name="email" placeholder="E-Posta adresi" required>
        <input type="password" class="login-input" id="password" name="password" placeholder="Şifre" required>
        <input type="submit" name="submit" value="Kayıt Ol" class="login-button">
        <p class="link">Hesabın var mı? <a href="login.php"> Giriş Yap</a></p>
    </form>

     

    

<?php
    }
?>



</body>
</html>