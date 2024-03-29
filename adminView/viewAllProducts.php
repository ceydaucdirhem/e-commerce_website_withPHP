

<div>
    <h2>Ürünler</h2>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">I.d</th>
                <th class="text-center">Ürün Resmi</th>
                <th class="text-center">Ürün Adı</th>
                <th class="text-center">Ürün Açıklama</th>
                <th class="text-center">Birim Fiyatı</th>
                <th class="text-center" colspan="2">Hareket</th>
            </tr>
        </thead>
        <?php
        include_once "../config/dbconnect.php";
        $sql="SELECT * from product WHERE product.product_id";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
          while ($row=$result-> fetch_assoc()) {
      ?>
      <tr>
        <td><?=$count?></td>
        <td><img height='95px' src='<?=$row["product_image"]?>'></td>
        <td><?=$row["product_name"]?></td>
        <td><?=$row["product_desc"]?></td>      
       
        <td><?=$row["price"]?></td>     
        <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['product_id']?>')">Düzenle</button></td>
        <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Sil</button></td>
        </tr>
        <?php
              $count=$count+1;
            }
          }
        ?>
    
    </table>

    


</div>
