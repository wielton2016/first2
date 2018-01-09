<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<?php

$przet_it = ($_GET['q']);
$IT = ($_GET['qu']);

  //print_r($IT);
$IT=str_replace("?_?","+",$IT);
$przet_it=str_replace("?_?","+",$przet_it);

      $IT=str_replace("?a?","&#039;",$IT);

   $przet_it=str_replace("?a?","&#039;",$przet_it);

 //include 'tabela_1.php';
//print_r($przet_it);
 save_tlumaczenie_IT($IT,$przet_it);
 //saveorder($q,$qu,$zam,$comm,$user);
 // print_r($eng);
//showtable2($q,$qu,$zam,$comm);
//echo '<script>parent.window.location.reload(true);</script>';

function save_tlumaczenie_IT($eng,$PL){

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
  $sql_1="SELECT * FROM tlumacz WHERE `COL 1` LIKE '" . $eng . "' ";
  //print_r(htmlspecialchars($sql_1));
            $sql = "INSERT INTO tlumacz (`COL 1`,`IT`)
	VALUES ('" . $eng . "','".$PL."')";

  $result = mysqli_query($link, $sql_1);
  if (mysqli_num_rows($result) == 0) {

    if (mysqli_query($link, $sql)) {

       // echo "New record created successfully";
    } else {
        echo "Error 1711:Not saved, mayby order exists, or other problem ";
    }

}else{
$sql_u="UPDATE `tlumacz` SET `IT`='".$PL."' WHERE `COL 1` LIKE '" . $eng . "' ";
//print_r($sql_u);
if (mysqli_query($link, $sql_u)) {

    //echo "New record created successfully";
} else {
    echo "Error 1712:Not saved, mayby order exists, or other problem ";
}
}



}

?>
</body>
</html>
