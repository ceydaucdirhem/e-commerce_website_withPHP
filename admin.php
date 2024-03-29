<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Karakter kodlama -->
	<meta charset="UTF-8">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Cihaz uyumluluğu -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- IE uyumluluğu -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSS dosyası -->
	<link rel="stylesheet" href="adminlogin.css">
	<title>Admin Giriş</title>
</head>

<body>
	<!-- Form -->
	<form action="validate.php" method="post">
		<!-- Giriş kutusu -->
		<div class="login-box">
			<!-- Logo -->
			<a href="index.php"><img src="imgs/logo2.png" alt="" style="width:250px"></a>
			<!-- Başlık -->
			<h1>Admin Giriş</h1>

			<!-- Kullanıcı adı alanı -->
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Kullanıcı Adı"
						name="username" value="">
			</div>

			<!-- Şifre alanı -->
			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Şifre"
						name="password" value="">
			</div>

			<!-- Giriş yap butonu -->
			<input class="button" type="submit"
					name="login" value="Giriş Yap">
		</div>
	</form>
</body>

</html>
