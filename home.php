<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="slideshow.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
// İlk sorgu: En son eklenen 4 ürün alınır
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>




<?=template_header('Anasayfa')?>
<style>

</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="imgs/banner2.png" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="imgs/banner1.png" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="imgs/cc.png" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<img src="imgs/banner_w.png" alt="" style="width:95%">
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>
<div class="recentlyadded content-wrapper">

    <h2>Favori Ürünler</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            
            <span class="price">
            <?=$product['price']?>&#8378;
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp"><?=$product['rrp']?>&#8378;</span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>




   <img src="imgs/banner4.webp" alt="ceyshop">


   <div class="recentlyadded content-wrapper">

<h2>Çok Satanlar</h2>
<div class="products">
    <?php foreach ($recently_added_products as $product): ?>
    <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
        <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
        <span class="name"><?=$product['name']?></span>
        
        <span class="price">
        <?=$product['price']?>&#8378;
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp"><?=$product['rrp']?>&#8378;</span>
            <?php endif; ?>
        </span>
    </a>
    <?php endforeach; ?>
</div>
</div>

<script>
    // Slick slider ayarları
    $('.products').slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>


</div>


<img src="imgs/imgbanner.png" alt="" style="width:1400px">

                  
</div>

<div>

  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Keşfet</h4>
  	 			<ul>
  	 				<li><a href="#">Anasayfa</a></li>
  	 				<li><a href="aboutus_page.html">Hakkımızda</a></li>
  	 				<li><a href="contact.php">İletişim</a></li>
             
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Hesabım</h4>
  	 			<ul>
  	 				<li><a href="registration.php">Üye Ol</a></li>
  	 				<li><a href="login.php">Giriş Yap</a></li>
            <li><a href="admin.php">Admin Girişi</a></li>
  	 			
  	 				
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


