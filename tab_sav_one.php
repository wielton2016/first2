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
$ver = ($_GET['ver']);
$zlece = ($_GET['zlece']);
//$user = ($_GET['user']);//urzytkownik
$zam = ($_GET['zam']);//nr zamównienia
$comm = ($_GET['comm']);//komentarz
//$odczyt = ($_GET['odczyt']);//komentarz
//print_r("toolbox Daken 1000 (k031033)");
 include 'tabela_1.php';  

$qu=str_replace("?_?","+",$q5);
  $comm=str_replace("?_?","+",$comm);
    //$odczyt=str_replace("?p?","+",$odczyt);
 // print_r("toolbox Daken 1000 (k031033)");
 
 saveorder_one($q,$qu,$zam,$comm,$ver,$zlece);
  
//showtable2($q,$qu,$zam,$comm);
//echo '<script>parent.window.location.reload(true);</script>';
function saveorder_one($q,$qu,$zam,$comm,$ver,$zlece){
          
            $servername = "mysql.cba.pl";
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
            $zapisz="zapisane";
            $tab="TABLE2";

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
        
	$zlecenia=loadorder0();//tabelka zapisanych zleceń
	$wersja=1; // iloć zapisanych wersji
	foreach($zlecenia as $r){//dla każdego zlecenia
		if($r[0]==$zam){		//jesi nr zlecenia już istnieje
			$wersja=$wersja+1; //liczy istniejące wersje i dodaje jeden
		}
	//print_r($r[0]);
	}
	 //$odczyt=explode('?p?',$odczyt);
	//print_r($odczyt[0]);
	 // print_r($zlece) ;
	  $wersja_cur=$wersja-1;//aktualna wersja
	  $qu=$zlece.$qu;
           $sql = "UPDATE zapisane SET `wybrane opcje`='".$qu."' WHERE `Order No` LIKE '".$zam."' AND `wersja` LIKE $wersja_cur";
  //print_r($sql) ;         
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error:Not saved, mayby order exists, or other problem ";
 }
 }
        
    

?>
</body>
</html>
