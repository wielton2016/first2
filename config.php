<?php
   define('DB_SERVER', 'mysql.cba.pl');
   define('DB_USERNAME', 'ir');
   define('DB_PASSWORD', 'wielton');
   define('DB_DATABASE', 'wielon_c0_pl');
  // print_r(DB_SERVER);
//    $servername = "wielon.c0.pl";//mysql.cba.pl
//    $username = "ir";
//    $password = "wielton";
//    $dbname = "wielon_c0_pl";
//    $tab="admin";

            // Create connection
   //           $db = mysqli_connect($servername, $username, $password,$dbname);
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>