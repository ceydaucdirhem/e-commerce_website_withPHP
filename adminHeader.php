<?php
   // Oturumu başlat ve veritabanı bağlantı dosyasını dahil et
   session_start();
   include_once "./config/dbconnect.php";
?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./assets/images/logo.png" width="80" height="80" alt="CeyShop">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        // Kullanıcı oturumu açıksa
        if(isset($_SESSION['user_id'])){
          ?>
          <!-- Kullanıcı simgesi -->
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <!-- Oturum açma linki veya başka bir içerik -->
            <?php
        } ?>
    </div>  
</nav>
