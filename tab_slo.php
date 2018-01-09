<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php
$eng = ($_GET['eng']);
$PL = ($_GET['q']);
$cena = ($_GET['qu']);

$eng=str_replace("?_?","+",$eng);
$PL=str_replace("?_?","+",$PL);

      $eng=str_replace("?a?","&#039;",$eng);
  
   $PL=str_replace("?a?","&#039;",$PL);
   
 //include 'tabela_1.php';  
//print_r($PL);
 save_tlumaczenie($eng,$PL,$cena);
 //saveorder($q,$qu,$zam,$comm,$user);
 // print_r($eng);
//showtable2($q,$qu,$zam,$comm);
//echo '<script>parent.window.location.reload(true);</script>';

function save_tlumaczenie($eng,$PL,$cena){
          
           // $servername = "mysql.cba.pl";
           // $username = "ir";
            //$password = "wielton";
            //$dbname = "wielon_c0_pl";
            include("config_0.php");
            $zapisz="tlumacz";
            //$tab="TABLE2";
           
            // Create connection
             $link = mysqli_connect($servername, $username, $password,$dbname);
             if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }  
            $db_selected=mysqli_select_db($link,$dbname);
            if (!$db_selected) {
                die ('Nie mo�na ustawi� databasy : ' . mysql_error());
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
            $sql = "INSERT INTO tlumacz (`COL 1`, `COL 2`,`COL 3`) 
	VALUES ('".$eng."','".$PL."', '".$cena."')";
  //print_r($sql);   

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error:Not saved, mayby order exists, or other problem ";
}
        
    
}

?>
</body>
</html>
