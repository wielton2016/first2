<!DOCTYPE html>
<?php

  ?>
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style>
     #loader {
position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(ico/loading.gif) center no-repeat #fff;
}
#loader1 {
position: fixed;
	left: 400px;
	top: 0px;
	width: 10%;
	height: 10%;
	z-index: 9999;
	background: url(ico/loading.gif) center no-repeat #fff;
}
/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
#myDiv {
  display: none;
  /*text-align: center;*/
}
#tabPL {
  display: none;
}
/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
/*body.loading {*/
/*    overflow: hidden;   */
/*}*/
/*body.loading .loader {*/
/*    display: block;*/
/*}*/
/*     .no-js #loader { display: none;  }*/
/*.js #loader { display: block; position: absolute; left: 100px; top: 0; }*/
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 10%;
	z-index: 9999;
	background: url(ico/loading.gif) center no-repeat #fff;
}

         a.one:link, a.one:visited {
           position: absolute;
           right:10px;
           font-size: 16px;
           top: 28px;
    /*background-color: hsl(51.9, 68.8%, 40.2%);*/
    /*color: white;*/
    /*padding: 4px 125px;*/
    /*text-align: center;*/
    /*text-decoration: none;*/
    /*display: inline-block;*/
}      
a.one:hover, a:active {
    /*background-color: orange;*/
}
a.one:active {
    /*background-color: red;*/
}

     a.two:link, a.two:visited {
    background-color: hsl(51.9, 68.8%, 40.2%);
    color: white;
    padding: 4px 125px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}      
a.two:hover, a:active {
    background-color: orange;
}
a.two:active {
    background-color: red;
}
      
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 2px 20px;
    font-size: 16px;
    border: none;
    cursor: hand;
}
       
       .dropbtn2 {
    background-color: #8f8073;
    color: white;
    padding: 2px 20px;
    font-size: 16px;
    border: none;
    cursor: hand;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 460px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index:50;
     /*bottom: 100%;*/ 
        /*border-bottom: 1px solid transparent*/
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

        img.resize{
        /*width:300px;  you can use % */
        /*height: auto;*/
        max-width: 200px;
        max-height: 200px;
        }

          #header {

        height:40px;
      
        }
        #section {
       margin-top: 1px;
        height:95%;
      
        }
        
 body {
    background:#FFFFFF;
}
 
.clearfix:after {
    display:block;
    clear:both;
}
 
/*----- Menu Outline -----*/
.menu-wrap {
    width:100%;
    box-shadow:0px 1px 3px rgba(0,0,0,0.2);
    background:#E5E6DE;
    /*kolor paska*/
}
 
.menu {
    width:1500px;
    margin:0px auto;
}
 
.menu li {
    margin:0px;
    list-style:none;
    font-family:'Ek Mukta';
}
 
.menu a {
    transition:all linear 0.15s;
    color:#000000;
    /*kolor czcionki na butonie*/
}
 
.menu li:hover > a, .menu .current-item > a {
    text-decoration:none;
    color:#FFFFFF;
    /*kolor czcionki po najechaniu*/
}

 
.menu .arrow {
    font-size:11px;
    line-height:0%;
}
 
/*----- Top Level -----*/
.menu > ul > li {
    float:left;
    display:inline-block;
    position:relative;
    font-size:22px;
    /*czcionka na przycisku*/
}
 
.menu > ul > li > a {
    padding:10px 30px;
    display:inline-block;
    /*text-shadow:0px 1px 0px rgba(0,0,0,0.4);*/
    /*sieñ pod czcionk¹ w butonie*/
}
 
.menu > ul > li:hover > a, .menu > ul > .current-item > a {
    background:#2e2728;
     z-index:51;
     /*t³o po najechaniu na categorie*/ 
}

/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
    z-index:1;
    opacity:1;
}
/*.menu li:active .sub-menu {
    z-index:1;
    opacity:1;
}*/
/*.menu li:focus .sub-menu {
    z-index:1;
    opacity:1;
}*/
 
.sub-menu {
    width:360%;
    /*szerokosc menu po rozwinieciu*/
    padding:5px 0px;
    position:absolute;
    top:100%;
    left:0px;
    z-index:-1;
    opacity:0;
    transition:opacity linear 0.15s;
    box-shadow:0px 2px 3px rgba(0,0,0,0.2);
    background:#FFF;
    /*t³o opuszczanego menu*/
    
}

.sub-menu2 {
    width:60%;
    padding:5px 0px;
    position:absolute;
    top:100%;
    left:500px;
    z-index:-1;
    opacity:0;
    transition:opacity linear 0.15s;
    box-shadow:0px 2px 3px rgba(0,0,0,0.2);
    background:#c3b8ba;
}
.sub-menu li {
    display:block;
    font-size:20px;
    /*czcionka w menu*/
}
 
.sub-menu li a {
    padding:10px 30px;
    display:block;
}
 
.sub-menu li a:hover,  .sub-menu .current-item a {
    background:#000000;
    /*kolor podcwietlania gdy najechane*/
}


   table.one{
/*          // border-spacing: 0.5rem;
          // margin:0 0 0 500px;
         // font-size: 10px;*/
        }
        table.two{
           border-spacing: 0.5rem;
           background: hsl(170, 70%, 50%);
        }
        td.one {
            padding: 0.3rem;
            background: hsl(0, 0%, 92.9%);
            /*colory t³a drugiej kolumny*/
          }
          td.two {
            padding: 0.3rem;
            width: 20%;
            background: hsl(51.9, 68.8%, 40.2%);
            /*kolor naglowka pionowego*/
          }
       
        td.dwa {
               padding: 0.3rem;
/*             width: 20%; */
            background: hsl(51.9, 68.8%, 40.2%);
            /*kolor naglowka pionowego*/
          }
          td.three {
            padding: 0.3rem;
             width:20% ;
            background: #F0F8FF;
          }
          td.four {
            padding: 0.3rem;
           
            background: #F5F5DC;
          }
          td.white {
            padding: 0.3rem;
           
            background: "white";
          }
          
           label
            {
            background-color:#9C3;
            padding: 0px 0px;
            }
            input[type=radio]
            {
            display:none;
            }
            input[type=radio]:checked + label
            {
            background-color:#C33;
            }
            
            h1 {
    font-size: 40px;
     color: grey;
}
            
</style>
 </head>

 <body>
  
<?php
$client_data=array('PL order No.','Client','Delivery address to client','VIN','Production slot (week)','Units','Brand');
$c_d=$col1= join("?p?",$client_data);
//$nameErr=$name=$ErrPL=$ErrClient=$Erraddress=$ErrVIN=$Errslot=$ErrUnits=$ErrBrand="";


  //if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //if (empty($_POST["Client"])) {
    //$nameErr = "Name is required";
  //} else {
//    $name = test_input($_POST["Client"]);
    // check if name only contains letters and whitespace
  //  if (!preg_match("/^[A-Z]{2}[0-9]{4}*$/",$name)) {
    //  $nameErr = "Only letters and white space allowed";
    //}else{
      // $nameErr = "OnK";
  //  }
  //}
  //}
  //function test_input($data) {
  //$data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  //return $data;
//}
/////////////////////////////////////////////////////

//$Err=array($ErrPL,$ErrClient,$Erraddress,$ErrVIN,$Errslot,$ErrUnits,$ErrBrand);
$marki=array('Viberti','Merker','Cardi');




echo "<form> ";
// echo "<form method='post' action='htmlspecialchars(".$_SERVER["PHP_SELF"].");'>";
//echo "<table class='one' style='width:100%' margin-top: 500px>"; // start a table tag in the HTML
 $n=0;
foreach($client_data as $c){
echo"<tr>";
if($c=='Brand'){
echo "<td class='four'>".$c."</td>";
echo "<td class='one' colspan='2'>";
                echo "<div class='dropdown'>";
echo "<button class='dropbtn' id='".$c."'>Choose</button>"; 

 echo "<div  class='dropdown-content'>";
                //echo "<td class='one'>". $opcja[$po[$po[$i]]][1] . "</td>";
                 for($p=0;$p<count($marki);++$p){
                   echo "<a id='".$marki[$p]."' name='".$c."'  onclick='chooserclient(this)'>".$marki[$p]."</a>";  
                  }
                 echo "</div></td>";
                 
}else{
echo "<td class='four'>".$c."</td>";
echo "<td class='one' colspan='2'><input type='text' name='".$c."' id='".$c."' size='100'>";
echo "<span id='err".$client_data[$n]."'></span></td>";
 $n++;
}
echo"</tr>";
}
//echo "</table><br>";
// echo "<div><input type='submit' name='submit' value='Submit'></div>";
 echo "</form>";
 //print_r($c_d);
 //echo "<div><button col1='".$c_d."'  onclick='ssaveClient(this)'>save</button></div>";

// echo "<h2>Your Input:</h2>";
// echo $name;
/////////////////////////////////////////////////////
echo "<div class='content'>";
  echo "<div id='section'>";
    echo  "<div id='txtHint3'><b></b></div>"; 
        echo  "<div id='txtHint'><b></b></div>"; 

        echo "</div>";
        echo "</div>";
      echo  "<div  id='txtHint2'><b></b></div>"; 
echo "</div>";
  //echo "</div>";
  
//   function client_gen(){
// $client_data=array('PL order No.','Client','Delivery address to client','VIN','Production slot (week)','Units','Brand');
// $c_d=$col1= join("?p?",$client_data);
// //$nameErr=$name=$ErrPL=$ErrClient=$Erraddress=$ErrVIN=$Errslot=$ErrUnits=$ErrBrand="";


//   //if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   //if (empty($_POST["Client"])) {
//     //$nameErr = "Name is required";
//   //} else {
// //    $name = test_input($_POST["Client"]);
//     // check if name only contains letters and whitespace
//   //  if (!preg_match("/^[A-Z]{2}[0-9]{4}*$/",$name)) {
//     //  $nameErr = "Only letters and white space allowed";
//     //}else{
//       // $nameErr = "OnK";
//   //  }
//   //}
//   //}
//   //function test_input($data) {
//   //$data = trim($data);
//   //$data = stripslashes($data);
//   //$data = htmlspecialchars($data);
//   //return $data;
// //}
// /////////////////////////////////////////////////////

// //$Err=array($ErrPL,$ErrClient,$Erraddress,$ErrVIN,$Errslot,$ErrUnits,$ErrBrand);
// $marki=array('Viberti','Merker','Cardi');




// echo "<form> ";
// // echo "<form method='post' action='htmlspecialchars(".$_SERVER["PHP_SELF"].");'>";
// echo "<table class='one' style='width:100%' margin-top: 500px>"; // start a table tag in the HTML
// $n=0;
// foreach($client_data as $c){
// echo"<tr>";
// if($c=='Brand'){
// echo "<td class='four'>".$c."</td>";
// echo "<td class='one'>";
//                 echo "<div class='dropdown'>";
// echo "<button class='dropbtn' id='".$c."'>Choose</button>"; 

// echo "<div  class='dropdown-content'>";
//                 //echo "<td class='one'>". $opcja[$po[$po[$i]]][1] . "</td>";
//                 for($p=0;$p<count($marki);++$p){
//                   echo "<a id='".$marki[$p]."' name='".$c."'  onclick='chooserclient(this)'>".$marki[$p]."</a>";  
//                   }
//                 echo "</div></td>";
                 
// }else{
// echo "<td class='four'>".$c."</td>";
// echo "<td class='one'><input type='text' name='".$c."' id='".$c."' size='100'>";
// echo "<span id='err".$client_data[$n]."'></span></td>";
// $n++;
// }
// echo"</tr>";
// }
// echo "</table><br>";
// // echo "<div><input type='submit' name='submit' value='Submit'></div>";
// echo "</form>";
// //print_r($c_d);
// //echo "<div><button col1='".$c_d."'  onclick='ssaveClient(this)'>save</button></div>";

// // echo "<h2>Your Input:</h2>";
// // echo $name;
// /////////////////////////////////////////////////////
// echo "<div class='content'>";
//   echo "<div id='section'>";
//     echo  "<div id='txtHint3'><b></b></div>"; 
//         echo  "<div id='txtHint'><b></b></div>"; 

//         echo "</div>";
//         echo "</div>";
//       echo  "<div  id='txtHint2'><b></b></div>"; 
// echo "</div>";
//   //echo "</div>";

    
//   }
        ?>
</div>
<script>
 //function ssaveClient(col) {
////document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
//col1=col.getAttribute("col1");
//user=col.getAttribute("user");
//var odczyt=new Array(7);
//co1=col1.split("?p?"); // id pól do wype³niania
//str2="err";
//
//for(n=0;n<co1.length-1;n++){
//
//  odczyt[n]=document.getElementById(co1[n]).value;
//}
//
//  odczyt[6]=document.getElementById(co1[n]).innerHTML;
//
//
//if (col == "") {
//document.getElementById("txtdane").innerHTML = "";
//
//return;
//} else { 
//
//if (window.XMLHttpRequest) {
//// code for IE7+, Firefox, Chrome, Opera, Safari
//xmlhttp = new XMLHttpRequest();
//} else {
//    // code for IE6, IE5
//    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//}
//xmlhttp.onreadystatechange = function() {
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//        document.getElementById("txtdane").innerHTML = xmlhttp.responseText;
//    }
//}
//c1=kol.join("?"); 
//c2=kol2.join("?"); 
//c2=c2.replace(/\+/g, '?_?');
//// alert(comment);
//// location.reload();
//xmlhttp.open("GET","tab_dane.php?q="+c1+"&odczyt="+odczyt+;true);
//xmlhttp.send();
////document.getElementById("loadtab").innerHTML = "";
//}
//}
// function chooserclient(str7) {
// alert("idd");
//     //             iddy=str7.name;
//     //             rys=str7.id;
//     //           // idd2=str.getAttribute("v");
//     //         ir=rys.replace("/","");
//     //         iddr=ir.replace(":","");

//     //             document.getElementById(iddy).innerHTML=str7.id;
//     // document.getElementById(iddy).style.backgroundColor  = "gray";
// }
        </script>

 </body>
</html>