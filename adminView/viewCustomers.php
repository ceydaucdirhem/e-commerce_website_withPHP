<div >
  <h2>Tüm Müşteriler</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">I.d</th>
        <th class="text-center">Kullanıcı adı </th>
        <th class="text-center">E-mail</th>
        <th class="text-center">Telefon Numarası</th>
        <th class="text-center">Kullanıcı Adresi</th>
        <th class="text-center">Katılma Tarihi</th>
       
      </tr>
    </thead>
    <?php
include_once "../config/dbconnect.php";
$sql = "SELECT * FROM customers WHERE isAdmin=0";
$result = $conn->query($sql);
$count = 0; // Sayacı sıfırla

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $count = $count + 1; // Her bir satır için sayacı artır
        ?>
        <tr>
            <td><?= $count ?></td>
            <td><?= $row["first_name"] ?> <?= $row["last_name"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["contact_no"] ?></td>
            <td><?= $row["user_address"] ?></td>
            <td><?= $row["registered_at"] ?></td>
         
        </tr>
        <?php

          $count=$count+1;
    }   
}
?>

   

  </table>