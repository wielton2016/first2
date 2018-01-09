<?php

$q = ($_GET['q']);
$qu = ($_GET['qu']);
$zam = ($_GET['zam']);//nr zamównienia
$comm = ($_GET['comm']);//komentarz
$comm=str_replace("?_?","+",$comm);
$qu=str_replace("?_?","+",$qu);
	$comm=str_replace("?a?","'",$comm);
 include 'tabela_1.php';  
//print_r($qu);
 //saveorder($q,$qu,$zam);
 $col=loadorder_live($user_check,4,$zam);

showtable_new($q,$qu,$zam,$comm);
  //print_r("$po");
//echo("<meta http-equiv='refresh' content='1'>");

//function showtable($war2,$col2,$zam){
//            $war=explode('?',$war2,-1);
//           $col=explode('?',$col2,-1);
//  // print_r($war);
//        echo "<table class='one' style='width:100%' margin-top: 500px>";
//       echo "<td class='two'>Order No:</td>" ;
//        echo "<td class='one'>". $zam. "</td>"; 
//        
//        for ($i=0;$i<count($war);++$i){
//             echo"<tr>";
//        echo "<td class='two'>" .$war[$i] . "</td>" ;
//        echo "<td class='one'>". $col[$i] . "</td>"; 
//         echo"</tr>";
//        }
//echo "</table><br>"; //?????????????????????????????????
//}



?>