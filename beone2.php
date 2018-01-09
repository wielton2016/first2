<!DOCTYPE html>
<?php

  ?>
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style>
</style>



 </head>

 <body>


   <?php
 
   
   
include('session.php'); //loguje jeśli nie zalogowany
// print_r($user_check);
  //echo "<a class ='two' href='new.php'>New</a>";
//echo "<a class ='but' href='index_me.php'>Show mine</a>";
//  echo "<a class ='but' href='index_me.php'>Approved</a>";
 echo "<a class ='but' href='index.php'>Home</a>";
  echo "<a class ='but' href='formularz.php'>___formul</a>";
 // if($user_check=="g.szkop"){
 //echo "<a class ='but' href='slownik.php'>Slownik</a>";
 // echo "<a class ='but' href='slownik_tlumacz.php'>S_T</a>";
  //echo "<a class ='but' href='scrap.php'>scrap</a>";
 // }
     // echo "<a class ='but' href='index_prod.php'>In production</a>";
//echo "<a class ='two' href='client.php'>Order data</a>";

//  echo "<form id='search_form'><br>Search: <br>"; //wyszukiwanie
//echo "<input type='text'  name='search' id='search' size='100' onkeyup='showResult(this.value)'><br></form>";





        include 'tabela_1.php';
//        echo  "<h1 id='tytu'  class='tytul'><b>Darth</b></h1>"; 
//echo "<div >Recent:</div>";
    //   $col=loadorder_notab($user_check,4);
            $col=loadorder_one($user_check,1);

  $dane1=json_encode($col);
  $tg0=tlumacz_grup();
    $tg=$tg0[0];
    $cena=$tg0[1];
    $cena0=json_encode($cena);
     echo  "<div  id='txtHint2'><b></b></div>"; 
        ?>
</div>



<script>
 function save_order_one(col) {
// document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";    
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
ver=col.getAttribute("ver");
ktory=col.getAttribute("numer");
comm=col.getAttribute("comm");
co1=col1.split("?");
co2=col2.split("?");
//alert(col2);
clientd=col.getAttribute("clientd");
var zamowienie=col.id;



if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

return;
} else { 

if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}
// alert(col2);
col2=col2.replace(/\+/g, '?_?');
 // alert(ktory);
 //ver=ver.toString();
var zlece=document.getElementById(ktory).value;

xmlhttp.open("GET","tab_save_one.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm+"&clientd="+clientd+"&ver="+ver+"&zlece="+zlece,true);
xmlhttp.send();
// if(wyszukiwanie==0){
//   document.getElementById("loadtab").innerHTML = "";
//     document.getElementById("loadmail").innerHTML = "";
// }
}
} 



</script>

 </body>
</html>