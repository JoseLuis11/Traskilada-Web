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

label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid teal;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-teal w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><img src="../assets/img/logo.png" style="width:70%" onclick="onClick(this)" alt="S H O R T + C U T"></h3>
  </div>
  <div class="w3-bar-block">
    <a href="../index/index2.views.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Cerrar sesión</a>
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
  <div class="w3-container" id="showcase">
    <h1 class="w3-jumbo"><b>S H O R T + C U T</b></h1>
    <h1 class="w3-xxxlarge w3-text-teal"><b><?php echo $_GET["name"]?></b></h1>
  </div>

  <!-- Login owner -->
  <div class="w3-container" id="login">
    <h1 class="w3-xxlarge w3-text-teal"><b>Fecha y hora.</b></h1>
    <form action="" target="_self">
      <div class="w3-section">
          <form action="/action_page.php">
            <label>Fecha y hora: </label>
            <input type="datetime-local" name="datetime">
          </form>
      </div>
    </form>
  </div>

  <!-- Choose employee -->
  <div class="w3-container" id="login">
    <h1 class="w3-xxlarge w3-text-teal"><b>Barbero/Estilista.</b></h1>
    <form action="../user_views/main.php" target="_self">

      <div class="w3-section">
          <form action="/action_page.php">
            <label>
            <input type="radio" name="Juan"/>
            <img src="../assets/img/users-11.svg" style="width:20%">
            </label>
            <label>
            <input type="radio" name="Juan"/>
            <img src="../assets/img/users-12.svg" style="width:20%">
            </label>
            <label>
            <input type="radio" name="Juan"/>
            <img src="../assets/img/users-13.svg" style="width:20%">
            </label>
            <label>
            <input type="radio" name="Juan"/>
            <img src="../assets/img/users-14.svg" style="width:20%">
            </label>
          </form>
      </div>
    </form>
  </div>

  <div class="w3-container">
      <hr>
      <h1 class="w3-xxlarge w3-text-teal" id="services"><b>Servicio.</b></h1>
      <p>Elige los servicios que desees.</p>
      <div class="w3-container">
          <input id="corte" class="w3-check" type="checkbox" checked="checked">
            <label>Corte</label>
          <br>
          <input id="tinte" class="w3-check" type="checkbox">
          <label>Tinte</label>
          <br>
          <input id="manicure" class="w3-check" type="checkbox" disabled>
        <label>Manicure</label>
        <br><br>
      </div> 
  </div>
  <div class= "w3-container">
    <form action="../user_views/app_confirmed.php">
      <button type="submit" class="w3-button w3-block w3-padding-large w3-teal w3-margin-bottom">Agendar</button>  
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
