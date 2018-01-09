<?php
$cena = ($_GET['cena']);
$zamowienie = ($_GET['zamowienie']);
$versja = ($_GET['versja']);


$cena=str_replace("?_?","+",$cena);

	$cena=str_replace("?a?","'",$cena);
// print_r($real5);
save_konfigurator($cena,$zamowienie,$versja);

function save_konfigurator($cena,$zamowienie,$versja){
          
            $servername = "mysql.cba.pl";
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
            $zapisz="zapisane";
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
		
        
	//$zlecenia=loadorder0();//tabelka zapisanych zleceń
//	$wersja=1; // iloć zapisanych wersji
// 	foreach($zlecenia as $r){//dla każdego zlecenia
// 		if($r[0]==$zam){		//jesi nr zlecenia już istnieje
// 			$wersja=$wersja+1; //liczy istniejące wersje i dodaje jeden
// 		}
// 	//print_r($r[0]);
// 	}
	 //$odczyt=explode('?p?',$odczyt);
	//print_r($odczyt[0]);
 // $sql2="SELECT `PRICE` FROM zapisane WHERE `Order No` LIKE '".$zamowienie."' AND `wersja` LIKE '".$versja."'";
  
  // $app="SELECT `approved_by` FROM zapisane WHERE `Order No` LIKE '".$zam."' AND `wersja` LIKE $wersja_pop";// WHERE `COL 5` LIKE '1'";
 //           $sql1 = "INSERT INTO konfig ( `siodlo`, `index`,`konfigurator`) 
//	VALUES ('".$real5."','".$index."', '".$konf."')";
      
      
       $sql = "UPDATE zapisane
            SET `PRICE`='".$cena."'
            WHERE `Order No`='".$zamowienie."' AND `wersja`='".$versja."'";
 

 //$result = mysqli_query($link,$sql2);
 //print_r(mysqli_num_rows($result));
 //if(mysqli_num_rows($result) > 0)
//{

  if (mysqli_query($link, $sql)) {
   echo "<span id='wiadomosc' style=' left:50px; bottom:10px;'>Price updated successfully</span>";
} else {
    echo "<span id='wiadomosc' style='left:50px; bottom:10px;'>Error: Not updated</span>";
}
 



//if (mysqli_query($link, $sql)) {
 //   echo "New record created successfully";
//} else {
//    echo "Error:Not saved, mayby order exists, or other problem ";
//}
        
    
}

?>