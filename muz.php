                                      <!DOCTYPE html>
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style>
     </style>
 </head>
 <body>
<?php
$files = glob("muz/*.mp3");

$random = $files[array_rand($files)];
//print_r($random);
echo "<h1 id='tytul'>".$random."</h1>";
$files1=join("",$files);
$dane1=str_replace("muz/","<br>",$files1);
echo "<h2 id='tytul2'>'".$dane1."'</h2>";
 echo "<br>";
   $lista=json_encode($files);
?>
<audio controls autoplay id="lista">
 <?php
  echo "<source src='".$random."' type='audio/mpeg'>"
  ?>
Your browser does not support the audio element.
</audio>

   <script>
   var lista0 = <?php echo json_encode($lista); ?>;
      var lista=JSON.parse(lista0);
   
var vid = document.getElementById("lista");
vid.addEventListener('ended', function(e) {
var song1=Math.floor(Math.random() * lista.length);
var song=lista[song1];
                    vid.setAttribute ("src",song);
        document.getElementById("tytul").innerHTML=song ;
        //alert(lista);
        var lista01=lista.join("");
        var lista0=lista01.split("muz/");
        //alert(lista);
        list7=lista0.join("<br>");
        document.getElementById("tytul2").innerHTML=list7;
       
      lista.splice(song1,1);                          
     //alert(lista);              
    })
    
    
</script> 

 </body>
</html>