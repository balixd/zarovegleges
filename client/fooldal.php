<link href="https://fonts.cdnfonts.com/css/horror-type" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/vtks-rafia" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/spiky-016" rel="stylesheet">

<style>
  span.bold {
  font-size: 60px;
  font-weight: 700; 
  color: purple;
  font-family: 'Courier New', Courier, monospaces;
}
h3{
  font-weight: bolder;
  font-family: 'Spiky-016', sans-serif;
  color: purple;
}
body{
  font-family: 'Spiky-016', sans-serif;

  font-size: 15px;


}
.also{
  background-position-y:bottom;
  background-position-x: center;
  background-repeat: no-repeat;
}

@import url('https://fonts.cdnfonts.com/css/horror-type');
@import url('https://fonts.cdnfonts.com/css/vtks-rafia');
@import url('https://fonts.cdnfonts.com/css/spiky-016');



</style>


<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">---</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Bezár <i class="fa fa-remove"></i></button>
  <a href="./index.php?prog=loginout/bejelentkezes.php" class="w3-bar-item w3-button">Bejelentkezés</a>
  <a href="./index.php?prog=loginout/regisztracio.php" class="w3-bar-item w3-button">Regisztráció</a>


</nav>

<!-- Header -->
<header class="" id="myHeader" style="background-color:#270324;" >  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-white"></i> 
  <div class="w3-center" style="background-image: url(header2.png); background-size:100% 100%; background-repeat:no-repeat">
    <div class="w3-padding-32">
            <h1> <span class="bold">B</span><span style="color: darkgray">8</span></h1>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
</div>

<div class="w3-row w3-center" style="background-image: url(ss4.png);" >
<div class="w3-third" >
  <div class="w3-card w3-container"  style="min-height:460px" >
  <h3>Snake</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px">
     <a href="./snake/snake.html"> <img src="feherhatter.png" width="300px" height="300px" ></a>

    </i>

  </div>
</div>

<div class="w3-third"  >
  <div class="w3-card w3-container" style="min-height:460px" >
  <h3>Ping Pong</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px">
  <a href="./ping pong/pingpong.html"> <img src="pingpongos2.png" width="300px" height="300px" alt=""> </a></i>

  </div>
</div>

<div class="w3-third" >
  <div class="w3-card w3-container"S style="min-height:460px">
  <h3>2048</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px">
  <a href="./2048 2.0/2048/index.html"> <img src="2048f.png" width="300px" height="300px" alt=""> </a></i>
  </div>

</div>
<div>
  <img src="lenti3.jpg" alt="" class="also">
</div>
</div>



<script>
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}



</script>

