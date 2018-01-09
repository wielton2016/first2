<?php
//get some content from the database
//I just ordered by time so you can get the latest  items and limit by 10 if they overflow

 $servername = "mysql.cba.pl";
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
             $tab="zapisane";

            // Create connection
             $link = mysqli_connect($servername, $username, $password,$dbname);
             if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
$sql = "SELECT * FROM $tab ORDER BY ID DESC LIMIT 1";

//get them or show an error if something went wrong

$rows = mysqli_query($link,$sql);// or die(mysqli_error());
while($r = mysqli_fetch_assoc($rows)){
$content = $r['ID'];
//echo "<br>";
print_r($content);

}
?>
