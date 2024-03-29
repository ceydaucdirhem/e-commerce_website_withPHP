<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="footer.css">
</head>
<body>

<?php
// Her sayfada gösterilecek ürün miktarı
$num_products_on_each_page = 4;
// Geçerli sayfa - URL'de index.php?page=products&p=1, index.php?page=products&p=2, vb... şeklinde görünecektir.
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Eklenme tarihine göre sıralanmış ürünleri seçin
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
// bindValue, SQL deyiminde LIMIT cümlesi için kullanmamız gereken bir tamsayı kullanmamıza izin verecektir
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Veritabanından ürünleri getirin ve sonucu bir Dizi olarak döndürün
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>
<?=template_header('Charmlar&Bileklikler')?>
<img src="imgs/cbanner.png" alt="" style="width:1499px">
<div class="products content-wrapper">

    
    <h1>Charmlar&Bileklikler</h1>
  
    <p><?=$total_products?> Ürün</p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
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
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page-1?>">Geri</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page+1?>">İleri</a>
        <?php endif; ?>
    </div>
</div>


<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Keşfet</h4>
  	 			<ul>
  	 				<li><a href="index.php">Anasayfa</a></li>
  	 				<li><a href="aboutus_page.php">Hakkımızda</a></li>
  	 				<li><a href="contact.php">İletişim</a></li>
           
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

	
</body>
</html>




  