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
$qd = ($_GET['qd']);
 include 'tabela_1.php';  
  del_wier($qd);
 // echo "<script>document.getElementById('loadtab').innerHTML ='';</script>"; //reload page
//  echo "<div id='section'>";
//// loadorder();
// echo"</div>";
//print_r($qd);
// saveorder($q,$qu,$zam);
//showtable($q,$qu,$zam);
//
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
