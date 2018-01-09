<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Equipment</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
#container1{
   border:2px solid #a94123;
   margin-left:320px;
   margin-top:0px;
   width:240px;
   height:100px;  
}

#container2{
   border:1px solid #cccccc;
    margin-left:330px;
    margin-top:150px;
   width:500px;
   height:100px;   
}
    #botton{
   border:1px solid #cccccc;
    margin-top:150px;
  
}

#block1{
    /* background-color:#cccccc; */
/*     width: 70px;
    height:70px; */
    position:absolute;      
}


#block2{
    /* background-color:#999999; */
/*     width: 70px;
    height:50px;   */
    position:absolute;    
}
    #block3{
    /* background-color:#999999; */
/*     width: 70px;
    height:50px;   */
    position:absolute;    
}
    #block4{
    /* background-color:#999999; */
/*     width: 70px;
    height:50px;   */
    position:absolute;    
}

</style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
$('#block1').draggable({
axis: 'x',
    containment: '#container1',
    drag: function() {
        $('#block2').css('left',$(this).position().left); 
    },
    
    stop: function(){
        $('#block2').css('left',$(this).position().left);  
    }
     
});
});
     $( function() {
$('#block2').draggable({
axis: 'x',
    containment: '#container1',
    drag: function() {
        $('#block1').css('left',$(this).position().left); 
    },
    
    stop: function(){
        $('#block1').css('left',$(this).position().left);  
    }
     
});
});
    
$( function() {
$('#block3').draggable({
axis: 'x',
    containment: '#container1',   
      drag: function() {
        $('#block4').css('left',$(this).position().left); 
    },
    
    stop: function(){
        $('#block4').css('left',$(this).position().left);  
    }
});
});
    $( function() {
$('#block4').draggable({
axis: 'x',
    containment: '#container1',   
      drag: function() {
        $('#block3').css('left',$(this).position().left); 
    },
    
    stop: function(){
        $('#block3').css('left',$(this).position().left);  
    }
});
});

  </script>



</head>
<body bgcolor="#d2d8cf">
<!--   <div id="snaptarget" class="ui-widget-header"  >
<img src="/images/accessories/0_test_left.png"  style='height:185px;position: absolute;' />
</div> -->

<img src="/images/accessories/0_test_left.png"  style='height:185px;position: absolute;  	z-index: 50; margin-top:0px;' />

  <div id="container1">
    
      <img id="block1" src="/images/accessories/0_jbz_tyl.png"  style='height:185px;  	z-index: 51; margin-top:0px;' />
    <img id="block3" src="/images/accessories/0_kosz_bok.png"  style='height:185px;  	z-index: 510; margin-top:0px;' />
</div>
  <?php
  $size = getimagesize("/images/accessories/0_jbz_tyl.png");
  print_r($size);
  ?>
<!--  <div id="snaptarget2" class="ui-widget-header2" >
<img src="/images/accessories/1_test_bottom.png"  style='height:215px; position: absolute;'  />
</div> -->

  <img id="botton" src="/images/accessories/1_test_bottom.png"  style='height:215px; position: absolute;z-index: 0;'  />
<div id="container2">
  
    <img id="block2" src="/images/accessories/0_jbz_bottom.png"  style='height:215px; ' />

    <img id="block4" src="/images/accessories/0_kosz_bottom.png"  style='height:215px;z-index: 600;' />

</div>
  <div id="tt" style="position: absolute;top:700px;">
     </div>
  <?php        
     
  //print_r($width);
  ?>
 
<!--   <div id="container3">
    <div id="block3">
    <img src="/images/accessories/0_kosz_bottom.png"  style='height:185px;' />
    </div> -->
<!-- </div> -->

</body>
  <script>
            var divWidth = document.getElementById("block1").clientWidth; 
 
    var szer=divWidth+330;
    szer=szer.toString();
     document.getElementById("tt").innerHTML=szer.concat("px"); 
    document.getElementById("block3").style.left=szer.concat("px");  
    document.getElementById("block4").style.left=document.getElementById("block3").style.left;
  </script>
</html>