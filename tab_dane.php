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
$comm = ($_GET['comm']);//komentarz
 include 'tabela_1.php';  

$qu=str_replace("?_?","+",$q5);
  $comm=str_replace("?_?","+",$comm);
 // print_r($user);
 saveorder2($q,$qu,$zam,$comm,$user);
  
//showtable2($q,$qu,$zam,$comm);
echo '<script>parent.window.location.reload(true);</script>';
?>
<script>
  
function saveorder2($q,$qu,$zam,$comm,$user){
          
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
	//print_r($user);
            $sql = "INSERT INTO zapisane (`Order No`, `wersja`,`nazwy opcji`, `wybrane opcje`,`comment`, `uwagi`, `user`, `approved_by`) 
	VALUES ('".$zam."',$wersja, '".$q."', '".$qu."','".$comm."', '".date("j-m-Y, G:i")."', '".$user."', '".$user."')";
 // print_r($sql) ;         
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error:Not saved, mayby order exists, or other problem ";
}
        
    
}
</script>
</body>
</html>
