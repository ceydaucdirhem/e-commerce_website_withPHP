<div id="ordersBtn" >
  <h2>Sipariş Detayı</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>I.d</th>
        <th>Müşteri</th>
        <th>İletişim</th>
        <th>Sipariş Tarihi</th>
        <th>Ödeme Yöntemi</th>
        <th>Sipariş Durumu</th>
        <th>Ödeme Durumu</th>
       
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from orders";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["order_id"]?></td>
          <td><?=$row["delivered_to"]?></td>
          <td><?=$row["phone_no"]?></td>
          <td><?=$row["order_date"]?></td>
          <td><?=$row["pay_method"]?></td>
           <?php 
                if($row["order_status"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?=$row['order_id']?>')">Beklemede </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['order_id']?>')">Teslim edildi</button></td>
        
            <?php
            }
                if($row["pay_status"]==0){
            ?>
                <td><button class="btn btn-danger"  onclick="ChangePay('<?=$row['order_id']?>')">Ödenmemiş</button></td>
            <?php
                        
            }else if($row["pay_status"]==1){
            ?>
                <td><button class="btn btn-success" onclick="ChangePay('<?=$row['order_id']?>')">Ödenmiş </button></td>
            <?php
                }
            ?>
    
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
