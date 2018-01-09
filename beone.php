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
    echo "<a class ='but' href='beone2.php'>___________one2</a>";
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
        ?>
</div>

<script>
  
</script>

 </body>
</html>