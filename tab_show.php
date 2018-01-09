<!DOCTYPE html>
<html>
<head>
<style>
/* table.one{
          // border-spacing: 0.5rem;
          // margin:0 0 0 500px;
         // font-size: 10px;
        }
        table.two{
           border-spacing: 0.5rem;
             background: hsl(170, 70%, 50%);
        }
        td.one {
            padding: 0.3rem;
            background: hsl(0, 0%, 92.9%);
            colory tła drugiej kolumny
          }*/
</style>
</head>

<body>

<?php
$q = ($_GET['q']);
$qu = ($_GET['qu']);
$zam = ($_GET['zam']);//nr zamównienia
$comm = ($_GET['comm']);//komentarz
$comm=str_replace("?_?","+",$comm);
$qu=str_replace("?_?","+",$qu);


 include 'tabela_1.php';  
//print_r($clientd);
 //saveorder($q,$qu,$zam);
 //$user_check="";

showtable2($q,$qu,$zam,$comm);

//$user_check="";

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

</body>
</html>
