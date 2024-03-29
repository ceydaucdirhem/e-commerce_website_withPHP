

function showProductItems(){  
    // Tüm ürünleri göstermek için AJAX isteği gönderilir
    $.ajax({
        url:"./adminView/viewAllProducts.php",
        method:"post",
        data:{record:1},
        success:function(data){
            // Gelen veri, '.allContent-section' sınıfına sahip HTML öğesine eklenir
            $('.allContent-section').html(data);
        }
    });
}





function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCustomers(){
    // Müşterileri göstermek için AJAX isteği gönderilir
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            // Gelen veri, '.allContent-section' sınıfına sahip HTML öğesine eklenir
            $('.allContent-section').html(data);
        }
    });
}


function ChangeOrderStatus(id){
    // Belirtilen siparişin durumunu güncellemek için AJAX isteği gönderilir
    $.ajax({
       url:"./controller/updateOrderStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
          // Başarılı bir şekilde sipariş durumu güncellendiğinde kullanıcıya bir bildirim gösterilir
           alert('Sipariş durumu güncellendi');
           // Form sıfırlanır
           $('form').trigger('reset');
           // Siparişleri gösteren fonksiyon çağrılır
           showOrders();
       }
   });
}

function ChangePay(id){
    // Belirtilen siparişin ödeme durumunu güncellemek için AJAX isteği gönderilir
    $.ajax({
       url:"./controller/updatePayStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           // Başarılı bir şekilde ödeme durumu güncellendiğinde kullanıcıya bir bildirim gösterilir
           alert('Ödeme durumu güncellendi');
           // Form sıfırlanır
           $('form').trigger('reset');
           // Siparişleri gösteren fonksiyon çağrılır
           showOrders();
       }
   });
}



function addItems(){
    // Formdaki girişleri al
    var p_name=$('#p_name').val();
    var p_desc=$('#p_desc').val();
    var p_price=$('#p_price').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    // Dosya seçimini al
    var file=$('#file')[0].files[0];

    // FormData oluştur ve form verilerini ekle
    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('file', file);
    fd.append('upload', upload);
    
    // AJAX isteği gönder
    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            // Ürün başarıyla eklendiğinde kullanıcıya bildirim göster
            alert('Product Added successfully.');
            // Formu sıfırla
            $('form').trigger('reset');
            // Tüm ürünleri gösteren fonksiyonu çağır
            showProductItems();
        }
    });
}

function itemEditForm(id){
    // Belirtilen ürünün düzenleme formunu getirmek için AJAX isteği gönderilir
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            // Gelen veri, '.allContent-section' sınıfına sahip HTML öğesine eklenir
            $('.allContent-section').html(data);
        }
    });
}



function updateItems(){
    // Formdan gelen verileri al
    var product_id = $('#product_id').val();
    var p_name = $('#p_name').val();
    var p_desc = $('#p_desc').val();
    var p_price = $('#p_price').val();
    var existingImage = $('#existingImage').val();
    // Yeni resim dosyasını al
    var newImage = $('#newImage')[0].files[0];
    
    // FormData oluştur ve form verilerini ekle
    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_name', p_name);
    fd.append('p_desc', p_desc);
    fd.append('p_price', p_price);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    // AJAX isteği gönder
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        // Ürün başarıyla güncellendiğinde kullanıcıya bildirim göster
        alert('Ürün Başarıyla güncellendi.');
        // Formu sıfırla
        $('form').trigger('reset');
        // Tüm ürünleri gösteren fonksiyonu çağır
        showProductItems();
      }
    });
}


function itemDelete(id){
    // Belirtilen ürünü silmek için AJAX isteği gönderilir
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            // Ürün başarıyla silindiğinde kullanıcıya bildirim gösterilir
            alert('Ürün silindi.');
            // Form sıfırlanır
            $('form').trigger('reset');
            // Tüm ürünleri gösteren fonksiyon çağrılır
            showProductItems();
        }
    });
}




























