<!DOCTYPE html>
<?php

  ?>
<html>
 <head>
<title>WieltonIR</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style>
             
</style>



 </head>


   <?php
 
       echo "<div id='gora'>";
   session_start();
   
   
     $_SESSION['login_user'] = "guest";
     header("location: index.php");
 
 
        ?>




</html>