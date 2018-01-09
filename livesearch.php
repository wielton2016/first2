<?php
//print_r("asd");
//$xmlDoc=new DOMDocument();
//$xmlDoc->load("links.xml");
//
//$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];
//$zl=$_GET["zl"];
//  $zlecenia=explode('?k?',$zl);
//  $n=0;
// print_r($q);
////lookup all links from the xml file if length of q>0
//if (strlen($q)>0) {
//  $hint="";
//  for($i=0; $i<count($zlecenia); $i++) {
//      //find a link matching the search text
//if(!EMPTY($zlecenia[$i])){
//        if ($hint=="") {
//          $hint="<p name1='".$zlecenia[$i]."' onclick='showlive(this)'>" .$zlecenia[$i] ."</p>";
//        } else {
//          $hint=$hint . "<p name1='".$zlecenia[$i]."' onclick='showlive(this)'>" .$zlecenia[$i] ."</p>";
//        }
//        $n++;
//}
//  }
//}

// Set output to "no suggestion" if no hint was found
// or to the correct values
//if ($hint=="") {
//  $response="no suggestion";
//} else {
//  $response=$hint;
//}

//output the response
echo $response;
include('session.php'); 
 include 'tabela_1.php';


// if($n==1){
// echo "<div id='loadtab'>ooo</div>";
//  }

    //$col=loadorder($user_check,4);
    // print_r(strlen($q));
      $col=loadorder_live($user_check,4,$q);
// print_r($col[]);
?> 