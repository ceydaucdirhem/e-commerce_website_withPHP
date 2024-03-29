<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imagezoom.css">
    <script src="imagezoom.js"></script>
   
</head>
<body>
    
</body>
</html>
<?php
// id parametresinin URL'de belirtildiğinden emin olmak için kontrol ettim
if (isset($_GET['id'])) {
    // Deyimi hazırla ve çalıştır, SQL enjeksiyonunu önler
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Ürünü veritabanından getirin ve sonucu bir Dizi olarak döndürün
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
   // Ürünün var olup olmadığını kontrol edin (dizi boş değil)
    if (!$product) {
        // Ürünün kimliği mevcut değilse (dizi boşsa) görüntülenecek basit hata
        exit('Ürün bulunamadı!');
    }
} else {
   // Kimlik belirtilmemişse görüntülenecek basit hata
    exit('Ürün bulunamadı!');
}
?>
<?=template_header('Aksesuarlar')?>



<div class="product content-wrapper">
    
<div class="gallery">
      <a href="imgs/<?=$product['img']?>" class="zoom">
        <img src="imgs/<?=$product['img']?>" alt="<?=$product['name']?>">
      </a>
     
      <!-- Diğer resimler için aynı şekilde devam edebilirsiniz -->
    </div>
    <div>
        <h1 class="name"><?=$product['name']?></h1>
        <div class="description" style="color:#c6c6c6;">
            <?=$product['desc']?>
        </div>
        
        <span class="price">
            <?=$product['price']?> &#8378;
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp"><?=$product['rrp']?>&#8378;</span>
            <?php endif; ?>
        </span>
       
        <form action="index.php?page=cart" method="post">
        <div class="quantity" style="color:black;">
           <p>Adet</p>
        </div>
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Adet" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Sepete ekle">
        </form>
        
    </div>

 
</div>




