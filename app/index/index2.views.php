<?php
  include("../includes/logout.php");
?>
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
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="../login/login.views.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inicia sesión</a>
    <a href="../register_owner/register_owner2.views.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Crear cuenta</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contacto</a>
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

  <!-- About -->
  <div class="w3-container" id="about">
    <h1 class="w3-xxlarge w3-text-teal"><b>Nuestra idea.</b></h1>
    <p>SHORT+CUT es un sistema que permite la promoción y agilidad en la administración interna de una barbería y/o estética. Su principal función es mejorar las forma en que los clientes agendan una cita. <br><BR>El sistema le permite al usuario tener una interacción más cercana con la barbería y/o estética de su preferencia, accediendo a la información profesional de cada empleado.</p>
  </div>

  <!-- The Team -->
  <div class="w3-container" id="about">
    <h1 class="w3-xxlarge w3-text-teal"><b>Nosotros.</b></h1>
  </div>
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/mariana.jpg" alt="Mariana" style="width:100%">
        <div class="w3-container">
          <h3>Mariana Cázares</h3>
          <p class="w3-opacity">Desarrollador web</p>
          <p>Ingeniería de software, 4to semestre.</p>
        </div>
      </div>
    </div>

    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/jose.jpg" alt="Jose" style="width:100%">
        <div class="w3-container">
          <h3>José Luis Castro</h3>
          <p class="w3-opacity">Desarrollador back-end</p>
          <p>Ingeniería de software, 4to semestre.</p>
        </div>
      </div>
    </div>

    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/felipe.jpg" alt="Felipe" style="width:100%">
        <div class="w3-container">
          <h3>Felipe Ortega</h3>
          <p class="w3-opacity">Desarrollador web</p>
          <p>Ingeniería de software, 4to semestre.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- The Team part 2-->
  <div class="w3-row-padding w3-grayscale">

    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/emiliano.jpg" alt="Emiliano" style="width:100%">
        <div class="w3-container">
          <h3>Emiliano Rodríguez</h3>
          <p class="w3-opacity">Desarrollador de Android</p>
          <p>Ingeniería de software, 4to semestre.</p>
        </div>
      </div>
    </div>

    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../assets/img/isabel.jpg" alt="Isabel" style="width:100%">
        <div class="w3-container">
          <h3>Isabel Zavala</h3>
          <p class="w3-opacity">Desarrollador de Android</p>
          <p>Ingeniería de software, 4to semestre.</p>
        </div>
      </div>
    </div>

  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact">
    <h1 class="w3-xxlarge w3-text-teal"><b>Contacto.</b></h1>
    <p>Envíanos tus comentarios y sugerencias. </p>
    <form action="mailto:mariana.cazares@cetys.edu.mx" target="_self">
      <div class="w3-section">
        <label>Nombre</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Correo electrónico</label>
        <input class="w3-input w3-border" type="email" name="Email" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-teal w3-margin-bottom">Enviar mensaje</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

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
