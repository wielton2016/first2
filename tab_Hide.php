<?php
$q = ($_GET['q']);
$q5 = ($_GET['qu']);
$ifh = ($_GET['ifh']);
$user = ($_GET['user']);//urzytkownik
$zam = ($_GET['zam']);//nr zamównienia
//$comm = ($_GET['comm']);//komentarz
 include 'tabela_1.php';  

$qu=str_replace("?_?","+",$q5);
  //$comm=str_replace("?_?","+",$comm);
  //print_r($ifh);
Hide_order($q,$qu,$zam,$comm,$user,$ifh);
  
//showtable2($q,$qu,$zam,$comm);
//echo '<script>parent.window.location.reload(true);</script>';
?>
