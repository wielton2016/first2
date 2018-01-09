<?php

$odczyt = ($_GET['odczyt']);
$odczyt_naglowka = ($_GET['odczyt_naglowka']);
  $odczyt=str_replace("?_?","+",$odczyt);
    //$odczyt=str_replace("?min?","-",$odczyt);
 include 'tabela_1.php';


$odczyt = explode("?l?", $odczyt);
$odczyt_naglowka = explode("?l?", $odczyt_naglowka);
// print_r($odczyt);
 save_nowe_nadwozie($odczyt_naglowka, $odczyt);

 function save_nowe_nadwozie($odczyt_naglowka, $odczyt)
{
     include("config_0.php");
     $link = linkSQL();
     $zapisz = "nadwozie";
   
    if (!$link -> set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $link -> error);
         } else {
        // printf("Current character set: %s\n", $link->character_set_name());
    } 
    
    
    $sql1 = "SELECT * FROM " . $zapisz . " WHERE ";
     for ($y = 0; $y < 7; $y++) {
        $sql1 .= "`" . $odczyt_naglowka[$y] . "` LIKE '" . $odczyt[$y] . "'";
         if ($y != 6) {
            $sql1 .= " AND ";
             } 
        
        } 
       
    $result = mysqli_query($link, $sql1);
     if (mysqli_num_rows($result) == 0) {
        print_r("brak takiej konfiguracji w sql");
        $sql_ins="INSERT INTO ". $zapisz ." (";
        for ($yi = 0; $yi < count($odczyt_naglowka); $yi++) {
        
          $sql_ins.="`".$odczyt_naglowka[$yi] . "`";
          if ($yi != count($odczyt_naglowka)-1) {
            $sql_ins .= ",";
             }else{
             $sql_ins .= ")";
             } 
        }
        $sql_ins .= " VALUES (";
        for ($yv = 0; $yv < count($odczyt_naglowka); $yv++) {
        
          $sql_ins.="'".$odczyt[$yv] . "'";
          if ($yv != count($odczyt_naglowka)-1) {
            $sql_ins .= ",";
             }else{
             $sql_ins .= ")";
             } 
        }
         
            if (mysqli_query($link, $sql_ins)) {
        echo "<br>New data inserted into Database of upper structure";
        } else {
        echo "<br >Error 568- New data not inserted into Database of upper structure :(";
        }
        
       //print_r($sql_ins);
        
        
         } else {
        $sql = "UPDATE " . $zapisz . " SET "; 
         for ($y = 7; $y < 14; $y++) {
            $sql .= "`" . $odczyt_naglowka[$y] . "`='" . $odczyt[$y] . "'";
             if ($y != 13) {
                $sql .= ",";
                 } 
            $sql .= " ";
             } 
        $sql .= " WHERE ";
        
         for ($y1 = 0; $y1 < 7; $y1++) {
            $sql .= "`" . $odczyt_naglowka[$y1] . "` LIKE '" . $odczyt[$y1] . "'";
             if ($y1 != 6) {
                $sql .= " AND ";
                 } 
            }
            
            
            if (mysqli_query($link, $sql)) {
        echo "Database of upper structure updated";
        } else {
        echo "Error 487 update of upper structure datebase failed :(";
        } 
         
    } 
   // print_r($sql);

  /*  while ($row1 = mysqli_fetch_array($result)) {

        } */
    // print_r($col1);
    
    
    
    } 

?>
