<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php

$q = ($_GET['q']);
$q5 = ($_GET['qu']);
$user = ($_GET['user']);//urzytkownik
$zam = ($_GET['zam']);//nr zamównienia
$comm = ($_GET['comm']);//komentarz
//$odczyt = ($_GET['odczyt']);//komentarz
//print_r("toolbox Daken 1000 (k031033)");
 include 'tabela_1.php';  

$qu=str_replace("?_?","+",$q5);
  $comm=str_replace("?_?","+",$comm);
  
         $qu=str_replace("?a?","&#039;",$qu);
  
   $comm=str_replace("?a?","&#039;",$comm);
    //$odczyt=str_replace("?p?","+",$odczyt);
  //print_r("toolbox Daken 1000 (k031033)");
   //print_r($qu);
  
 saveorder($q,$qu,$zam,$comm,$user);
  
//showtable2($q,$qu,$zam,$comm);
//echo '<script>parent.window.location.reload(true);</script>';
?>
</body>
</html>
