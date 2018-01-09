<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php

$real5 = ($_GET['real5']);
$index = ($_GET['inde']);
$konf = ($_GET['konf']);
// print_r($real5);
save_konfigurator($real5,$index,$konf);

function save_konfigurator($real5,$index,$konf){
          
            $servername = "mysql.cba.pl";
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
            $zapisz="konfig";
            //$tab="TABLE2";
           
            // Create connection
             $link = mysqli_connect($servername, $username, $password,$dbname);
             if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }  
            $db_selected=mysqli_select_db($link,$dbname);
            if (!$db_selected) {
                die ('Nie mo?na ustawi? databasy : ' . mysql_error());
            }
            
                	if (!$link->set_charset("utf8")) {
			printf("Error loading character set utf8: %s\n", $link->error);
		} else {
			//printf("Current character set: %s\n", $link->character_set_name());
		}
		
        
	//$zlecenia=loadorder0();//tabelka zapisanych zleceñ
//	$wersja=1; // iloæ zapisanych wersji
// 	foreach($zlecenia as $r){//dla ka¿dego zlecenia
// 		if($r[0]==$zam){		//jesi nr zlecenia ju¿ istnieje
// 			$wersja=$wersja+1; //liczy istniej¹ce wersje i dodaje jeden
// 		}
// 	//print_r($r[0]);
// 	}
	 //$odczyt=explode('?p?',$odczyt);
	//print_r($odczyt[0]);
  $sql2="SELECT `konfigurator` FROM konfig WHERE `siodlo` LIKE '".$real5."' AND `index` LIKE '".$index."'";
  
  // $app="SELECT `approved_by` FROM zapisane WHERE `Order No` LIKE '".$zam."' AND `wersja` LIKE $wersja_pop";// WHERE `COL 5` LIKE '1'";
            $sql1 = "INSERT INTO konfig ( `siodlo`, `index`,`konfigurator`) 
	VALUES ('".$real5."','".$index."', '".$konf."')";
      
      
       $sql = "UPDATE konfig
            SET `konfigurator`='".$konf."'
            WHERE `siodlo`='".$real5."' AND `index`='".$index."'";
 

 $result = mysqli_query($link,$sql2);
 //print_r(mysqli_num_rows($result));
 if(mysqli_num_rows($result) > 0)
{

  if (mysqli_query($link, $sql)) {
   echo "<a id='wiadomosc' style=' left:50px; bottom:10px;'>New configurator updated successfully</a>";
} else {
    echo "<a id='wiadomosc' style='left:50px; bottom:10px;'>Error: Not updated</a>";
}
 
} else{
  if (mysqli_query($link, $sql1)) {
   echo "<a id='wiadomosc' style=' left:50px; bottom:10px;'>New configurator saved successfully</a>";
} else {
    echo "<a id='wiadomosc' style=' left:50px; bottom:10px;'>Error: Not saved</a>";
}  
}


//if (mysqli_query($link, $sql)) {
 //   echo "New record created successfully";
//} else {
//    echo "Error:Not saved, mayby order exists, or other problem ";
//}
        
    
}


?>
</body>
</html>
