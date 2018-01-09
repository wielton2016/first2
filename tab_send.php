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
  <a href="pdfcreator.php">PDF</a> 
<?php
  
$q = ($_GET['q']);
$qu = ($_GET['qu']);
$zam = ($_GET['zam']);//nr zamównienia
$ad = ($_GET['ad']);//nr zamównienia
//print_r($zam);
$qu=str_replace("?_?","+",$qu);
 include 'tabela_1.php';  
  wyslijmail($q,$qu,$zam,$ad);
  
 function wyslijmail($war2,$col2,$subject,$to){
       $war=explode('?',$war2,-1);
           $col=explode('?',$col2,-1);
 $tg=tlumacz_grup();
//         print_r($to);
//$to = "wielton2016@gmail.com";
//$subject = $zam;
   //////////////////////////////////////

   
$message = '
<html>
<head>
<title>test</title>
</head>
<body>';
$message .= '<p></p>
<table class='."one".'>
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td bgcolor=#e8f8f0 width=30%>Order No</td>
<td bgcolor=#f0f0ef width=70%>'.$subject.'</td>
</tr>';
for ($n=0;$n<count($war);$n++){
$message .= '
<tr>
<td bgcolor=#e8f8f0 width=30%>'.$war[$n].'</td>
<td bgcolor=#f0f0ef width=70%>'.$col[$n].'</td>
</tr>';
}
$message .= '</table><br>';


$message .= '<p></p>
<table class='."one".'>
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td bgcolor=#e8f8f0 width=30%>Order No</td>
<td bgcolor=#f0f0ef width=70%>'.$subject.'</td>
</tr>';
for ($n=0;$n<count($war);$n++){
$message .= '
<tr>
<td bgcolor=#e8f8f0 width=30%>'.tlumacz3($war[$n],$tg).'</td>
<td bgcolor=#f0f0ef width=70%>'.tlumacz3($col[$n],$tg).'</td>
</tr>';
}
$message .= '</table>';


$message .='</body>
</html>';



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <IRorders@wielton.com.pl>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

//////////////////////////////////////
}



?>
</body>
</html>
