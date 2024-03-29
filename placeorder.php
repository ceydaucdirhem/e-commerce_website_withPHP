<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="placeorder.css">
</head>
<body>

<?=template_header('Ödeme Bilgileri')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

<div class="container">
  <div class="title" >
      <h2>Ödeme Bilgileri</h2>
  </div>
  <div class="d-flex">
  <form id="myForm" action="" method="post">
    <label>
      <span class="fname">İsim <span class="required">*</span></span>
      <input type="text" id="fname" name="fname" placeholder="Adınız" required>
    </label>
    <label>
      <span class="lname">Soyisim <span class="required">*</span></span>
      <input type="text" id="lname" name="lname" placeholder="Soyadınız" required>
    </label>

    <label>
      <span>İl <span class="required"> *</span></span>
      <select id="il" name="selection" required>
        <option value="select">İl Seçiniz</option>
        <option value="İST">İstanbul</option>
      </select>
    </label>

    <label> 
      <span>İlçe <span class="required">*</span></span>
      <select id="ilce" name="selection" required>
        <option value="select">İlçe Seçiniz</option>
        <option value="ATA">Ataşehir</option>
        <option value="kad">Kadıköy</option>
        <option value="um">Ümraniye</option>
        <option value="bos">Bostancı</option>
        <option value="cng">Çengelköy</option>
        <option value="bes">Beşiktaş</option>
      </select>
    </label>
    <label>
      <span>Adres <span class="required">*</span></span>
      <input type="text" id="houseadd" name="houseadd" placeholder="Mahalle, sokak, cadde ve diğer bilgileri giriniz" required>
    </label>

    <label>
      <span>Telefon <span class="flag-icon flag-icon-tr"></span> <span class="required">*</span></span>
      <input type="tel" id="city" name="city" placeholder="+90" required>
    </label>
    <label>
      <span>E-Mail Adres <span class="required" >*</span></span>
      <input type="email" id="email" name="city" required> 
    </label>

    <button type="button" onclick="validateForm()" >Sipariş Tamamla</button>
    
</form>

  <div class="Yorder">
    <table>
      <tr>
        <td>Kargo Seçenekleri</td>
      </tr>
    </table><br>
    
    <div>
      <input type="radio" name="dbtt" value="cdd"  checked> Sürat Kargo
    </div>

    <div>
      <input type="radio" name="dbt" value="cd" > MNG Kargo
    </div>
    
    <div>
      <input type="radio" name="dbt" value="cd" > Aras Kargo
    </div>

    <br>
    <table>
      <tr>
        <td>Ödeme Yöntemleri</td>
      </tr>
    </table><br>
    <div>
      <input type="radio" name="dbt" value="dbt" checked> Doğrudan Banka Transferi <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
    </div>
    <p>
      Ödemenizi doğrudan banka hesabımıza yapın. Lütfen ödeme referansı olarak Sipariş Kimliğinizi kullanın. Para hesabımıza geçene kadar siparişiniz gönderilmeyecektir.
    </p>
    <div>
      <input type="radio" name="dbt" value="cd" > Kapıda Ödeme Nakit
    </div>
    <div>
      <input type="radio" name="dbt" value="cd"> Kapıda Ödeme Kredi Kartı
    </div>
    
  
  </div><!-- Yorder -->
</div>

<script>
    function validateForm() {
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var il = document.getElementById("il").value;
        var ilce = document.getElementById("ilce").value;
        var houseadd = document.getElementById("houseadd").value;
        var city = document.getElementById("city").value;
        var email = document.getElementById("email").value;

        if (fname == "" || lname == "" || il == "select" || ilce == "select" || houseadd == "" || city == "" || email == "") {
            alert("Lütfen tüm zorunlu alanları doldurun.");
            return false;
        }
        // Eğer tüm alanlar doluysa formu gönder
        document.getElementById("myForm").submit();

        window.location.href = "ordercompleted.php"; // Bu satırda formun gönderilmesi sonrası işlem gerçekleştiğinden dolayı bu kodun çalışması gerekmeyebilir.
    }
</script>


</div>

  
</body>
</html>


 




