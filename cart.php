<?php

// Ürün eklenmişse ve miktarı geçerli bir sayı ise
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
   
    // Ürün ID'sini ve miktarı al
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
 
    // Ürünü veritabanından al
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
   
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Ürün varsa ve miktar pozitif ise
    if ($product && $quantity > 0) {
        
        // Sepet varsa ve dizi ise
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            // Ürün sepette varsa
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                
                // Ürünün miktarını artır
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
               
                // Yeni ürünü sepete ekle
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            
            // Yeni sepet oluştur
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    
    // Sepete yönlendir
    header('location: index.php?page=cart');
    // Betiği sonlandır
    exit;
}

// Ürün kaldırılmışsa ve geçerli bir sayı ise
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    
    // Ürünü sepetten kaldır
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Sepet güncelleme isteği varsa ve sepet varsa
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
   
    // POST isteğindeki her bir elemanı kontrol et
    foreach ($_POST as $k => $v) {
        // Anahtar, 'quantity-' ile başlıyorsa ve değer sayısal ise
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            // ID'yi al
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            
            // ID sayısal ise ve sepet içinde varsa ve miktar pozitif ise
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                
                // Ürün miktarını güncelle
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    
    // Sepete yönlendir
    header('location: index.php?page=cart');
    // Betiği sonlandır
    exit;
}

// Ödeme yapma isteği varsa ve sepet doluysa
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Ödeme sayfasına yönlendir
    header('Location: index.php?page=placeorder');
    // Betiği sonlandır
    exit;
}

// Sepetteki ürünleri ve toplam tutarı hesapla
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;

if ($products_in_cart) {
    // SQL sorgusu için '?' işaretlerini oluştur
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    // Ürünleri veritabanından al
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    
    $stmt->execute(array_keys($products_in_cart));
   
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Sepetteki her bir ürün için toplam tutarı hesapla
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
?>

<?=template_header('Cart')?>

<div class="cart content-wrapper">
    <h1>Sepetim</h1>
    <form action="index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Ürün</td>
                    <td>Fiyat</td>
                    <td>Adet</td>
                    <td>Toplam</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Sepetinizde hiçbir ürün yok.</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="imgs/<?=$product['img']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove">Kaldır</a>
                    </td>
                    <td class="price">&#8378;<?=$product['price']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Adet" required>
                    </td>
                    <td class="price">&#8378;<?=$product['price'] * $products_in_cart[$product['id']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Toplam</span>
            <span class="price">&#8378;<?=$subtotal?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Güncelle" name="update">
            <input type="submit" value="Ödemeye git" name="placeorder">
        </div>
    </form>
</div>

