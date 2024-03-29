<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <!-- Başlık etiketleri -->
  <head>
    <!-- Viewport ayarı -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<body >
    <!-- PHP kodu ve diğer dosyalar -->
    <?php
        include "./adminHeader.php";
        include "./sidebar.php";
        include_once "./config/dbconnect.php";
    ?>

    <div id="main-content" class="container allContent-section py-4">
        <!-- İçerik -->
        <div class="row">
            <!-- Kullanıcılar -->
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tüm Kullanıcılar</h4>
                    <!-- PHP ile kullanıcı sayısını hesapla -->
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from customers where isAdmin=0";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
         
            <!-- Ürünler -->
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tüm Ürünler</h4>
                    <!-- PHP ile ürün sayısını hesapla -->
                    <h5 style="color:white;">
                    <?php
                       $sql="SELECT * from product";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            
            <!-- Siparişler -->
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tüm Siparişler</h4>
                    <!-- PHP ile sipariş sayısını hesapla -->
                    <h5 style="color:white;">
                    <?php
                       $sql="SELECT * from orders";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
    </div>
       
    <!-- Başarı veya başarısızlık mesajları için PHP kodu -->
    <?php
        if (isset($_GET['variation']) && $_GET['variation'] == "success") {
            echo '<script> alert("Variation Successfully Added")</script>';
        } else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
            echo '<script> alert("Adding Unsuccess")</script>';
        }
    ?>

    <!-- JavaScript dosyaları -->
    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>  
