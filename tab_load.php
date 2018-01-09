<?php
 $q = ($_GET['no_prod']);
include('session.php');

        include 'tabela_1.php';
          // print_r($q);
          if($q=="true"){
            $me=1;
      }           else{
      $me=0;
      }
       $col=loadorder($user_check,$me);
?>