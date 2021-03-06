<!DOCTYPE html>
<html>
<title>SHORT+CUT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../assets/css/index2.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="icon" href="../assets/img/favicon.ico">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-teal w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Cerrar</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><img src="../assets/img/logo.png" style="width:70%" onclick="onClick(this)" alt="S H O R T + C U T"></h3>
  </div>
  <div class="w3-bar-block">
    <a href="../index/index2.views.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="../index/index2.views.php#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contacto</a>
    <a href="../login/login.views.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inicia sesión</a>
    
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-teal w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-teal w3-margin-right" onclick="w3_open()">☰</a>
  <span>S H O R T + C U T</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

<!-- Header -->
<div class="w3-container" style="margin-top:20px" id="showcase">
  <h1 class="w3-jumbo"><b>S H O R T + C U T</b></h1>
</div>
<div class="w3-container" style="margin-top:20px">
  <h1 class="w3-xxlarge w3-text-teal"><b>¡Registro completado! :)</b></h1>
</div>



<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
