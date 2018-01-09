<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php
$q = ($_GET['q']);
$qu = ($_GET['qu']);

 include 'tabela_1.php';  

     //tabla($q,$qu);
     // print_r($qu);
         tablanotab_new($q,$qu);  // spelniaj¹ce warunki konfiguracje produktów
         //print_r($qu);
 /// echo"<h1 id='q' class='ukryte'>".$qu."</h1>";
   //echo"<h1 id='q' >".$q."</h1>";
   //global $wier, $tytuly;
//  print_r($q);
if (isset($wier)){
//print_r($q);
 //glwar_new($wier,$tytuly,$q,$qu);   // wywietla menu do wybierania opcji
 if(count($wier)==1){
       // vertablaopcje_new($q,$qu);}else{
         // tabla($q,$qu);  
 }
  // print_r($qu);
}else{echo "no options avalible, please reload page to search again";};


?>

</body>
</html>
