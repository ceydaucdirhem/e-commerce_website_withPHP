<?php
function pdo_connect_mysql() {
    
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'ceyshop';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	
    	exit('veritabanına!');
    }
}


function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="icon" type="imgs/logo2.png" href="/images/favicon.ico">
	</head>
	<body>



    <style>
    
    .mr{

        background-color:#FFCCDC;
        color:white;
          
        }

    </style>
    <marquee direction=right class="mr">Bu Büyük Fırsatı Kaçırmayın !  800 TL ve üzeri alışverişlerde %20 indirim .</marquee>
        <header>
            <div class="content-wrapper">
            <a href="index.php"><img src="imgs/logo2.png"  style="width:150px;height: 100;"></a>
                <nav>
                    <a href="index.php">Anasayfa</a>
                   
                    <a href="index.php?page=products">Charm'lar & Bileklikler</a>
                    
                    <a href="contact.php">İletişim</a>
                    <a href="aboutus_page.html">Hakkımızda</a>
                    
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
                   
                   
                    
                    
						<i class="fas fa-shopping-cart" style="color:pink;" ></i>
                      
                      
					</a>
                </div>

              
            <div class="link-icons">
                <a href="registration.php ">
               
               
                
                
                <i class="fas fa-user" style="color:pink;"></i>
                  
                  
                </a>
            </div>

                
            </div>
        </header>
        <main>



        


EOT;
}



function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year CeyShop</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

?>



