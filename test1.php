<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  <script src="scripts/physicsjs/physicsjs-VER.min.js"></script>
  </head>
  <body>
  <div id="container">
<canvas id="myCanvas" width="500" height="500"></canvas>
  
</div>
    <?php
    print_r($_SERVER['REMOTE_ADDR']);
    ?>
<script>
var mainCanvas = document.querySelector("#myCanvas");
var mainContext = mainCanvas.getContext("2d");
 
var canvasWidth = mainCanvas.width;
var canvasHeight = mainCanvas.height;
var angle = 0;
 var requestAnimationFrame = window.requestAnimationFrame || 
                            window.mozRequestAnimationFrame || 
                            window.webkitRequestAnimationFrame || 
                            window.msRequestAnimationFrame;
                            
                               // color in the background
  mainContext.fillStyle = "#EEEEEE";
    mainContext.fillRect(0, 0, canvasWidth, canvasHeight);
drawCircle();



function drawCircle() {
   // mainContext.clearRect(0, 0, canvasWidth, canvasHeight);
         
 
  
     
    // draw the circle
    mainContext.beginPath();
     
   var radius = 5 + 15 * Math.abs(Math.cos(angle));
    mainContext.arc(Math.random() * 500, Math.random() * 500, radius, 0, Math.PI * 2, false);
    mainContext.closePath();
     
    // color in the circle
    var col1= Math.floor(Math.random()*255);
    var col2= Math.floor(Math.random()*255);
    var col3= Math.floor(Math.random()*255);
    //alert(col1);
    mainContext.fillStyle = "rgba("+ col1 +", "+ col2 +", "+ col3 +", 0.1)";
    mainContext.fill();
    
    angle += Math.PI / 64/5;
   // requestAnimationFrame();
    window.setTimeout(drawCircle, 1000 / 1000);
}

</script> 


  </body>
</html>
