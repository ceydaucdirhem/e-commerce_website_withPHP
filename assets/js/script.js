
function openNav() {
  // Yan taraftaki menünün genişliğini ayarla
  document.getElementById("mySidebar").style.width = "250px";
  // Ana içeriğin sol kenar boşluğunu ayarla
  document.getElementById("main").style.marginLeft = "250px";  
  // Ana içeriğin sol kenar boşluğunu ayarla (alternatif olarak, belki bir yan menüye sahip bir site için)
  document.getElementById("main-content").style.marginLeft = "250px";
  // Ana içeriği gizle (isteğe bağlı, bir yan menüye sahip bir site için)
  document.getElementById("main").style.display="none";
}


function closeNav() {
  // Yan taraftaki menünün genişliğini sıfırla
  document.getElementById("mySidebar").style.width = "0";
  // Ana içeriğin sol kenar boşluğunu sıfırla
  document.getElementById("main").style.marginLeft= "0";  
  // Ana içeriği tekrar görünür yap
  document.getElementById("main").style.display="block";  
}
