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
//$comm = ($_GET['comm']);//komentarz
 include 'tabela_1.php';  

$qu=str_replace("?_?","+",$q5);
  //$comm=str_replace("?_?","+",$comm);
 // print_r($q);
 approve_order($q,$qu,$zam,$comm,$user);
  
//showtable2($q,$qu,$zam,$comm);
//echo '<script>parent.window.location.reload(true);</script>';
?>
</body>
</html>
