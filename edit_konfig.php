<!DOCTYPE html>
<?php

  ?>
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style>
     p {
    /* font-family: verdana; */
    font-size: 12px;
}
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
  from { bottom:0px; opacity:1 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:0px; opacity:1 } 
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
    
a.but:link, a.but:visited {
    background-color: hsl(51.9, 68.8%, 40.2%);
    color: white;
    padding: 4px 4px;
    width:100px;
    text-align: center;
    margin-left:5px;
    text-decoration: none;
    display: inline-block;
}      
a.but:hover, a:active {
    background-color: orange;
}
a.but:active {
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
/*.dropdown:hover .dropdown-content {*/
/*    display: block;*/*/
/*}*/
.dropdown:hover .dropdown-content {
    display: block;*/
}
.show {display:block;}
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
    /*sień pod czcionką w butonie*/
}
 
.menu > ul > li:hover > a, .menu > ul > .current-item > a {
    background:#2e2728;
     z-index:51;
     /*tło po najechaniu na categorie*/ 
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
    /*tło opuszczanego menu*/
    
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
            /*colory tła drugiej kolumny*/
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
 /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}           
</style>



 </head>


    <div>
   <?php
 
   
   
include('session.php'); //loguje jeśli nie zalogowany
// print_r($user_check);
  echo "<a class ='two' href='new.php'>New</a>";
//echo "<a class ='but' href='index_me.php'>Show mine</a>";
//  echo "<a class ='but' href='index_me.php'>Approved</a>";
 echo "<a class ='but' href='index.php'>Home</a>";
 if($user_check=="g.szkop"){
 echo "<a class ='but' href='slownik.php'>All</a>";
   echo "<a class ='but' href='edit_konfig.php'>Konfiguratory</a>";
 }
     // echo "<a class ='but' href='index_prod.php'>In production</a>";
//echo "<a class ='two' href='client.php'>Order data</a>";


echo "<a  style='position: absolute;right:20px;top:5px;'>you're logged as: $user_check</a>";
echo "<h2><a class ='one' href = 'logout.php'>Sign Out</a></h2>";

        include 'tabela_1.php';

    $tabelka2=get_table2(); 
    $konf=get_konfigurator();//Array ( [0] => Array ( [0] => 0 [1] => 1200 [2] => K033044 [3] => G251200KRPODW-IT ) )  
    
    //print_r(in_array("K033044", $konf[0]));
      for ($u=0;$u<count($tabelka2[1]);++$u){
          $rear5[$u]=$tabelka2[1][$u][12];
          $index[$u]=$tabelka2[1][$u][18];
      }
    
    
    
    
 //($war2,$col2,$zam,$comm)


           pokaz_konf($konf,$index,$rear5,1);
           pokaz_konf($konf,$index,$rear5,0);
           

           




        ?>
</div>
   <?php
function pokaz_konf($konf,$index,$rear5,$jest) {
//print_r($index);
if($jest==1){
           echo "<table id='tabela_konf1' class='one' style='width:30%' margin-top: 500px>"; 
           }else{
           echo "<table id='tabela_konf' class='one' style='width:30%' margin-top: 500px>"; 
           }
	echo   "<col width=5%>";
	echo   "<col width=5%>";
	echo   "<col width=15%>";
	echo   "<col width=5%>";
  echo "<td class='two'>rear 5th wheel</td>" ;
       echo "<td class='one'>Index</td>" ;
        echo "<td class='one'>Configurator</td>"; 
          echo "<td class='four'>Save</td>";
        for($i=0;$i<count($rear5);++$i){
       //print_r($index[$i]);
      // echo "<br>";
      if(strlen($index[$i])==7){
       
      
     
       
          foreach($konf as $r){
         // print_r($rear5[$i]==$r[1]);
      if($rear5[$i]==$r[1] && $index[$i]==$r[2]){    //  && $r[3]!=null
              $czy_jest_konf=$r[3];
              if($jest==1){
              echo"<tr>";
            echo "<td class='two'>".$rear5[$i]."</td>" ;
            echo "<td class='three'>".$index[$i]."</td>"; 
            
            echo "<td class='three' style='background: #A3703C;width:80%;' ><input type='text' name='' 
            id='".$rear5[$i].$index[$i]."' style='width:95%' value='".$czy_jest_konf."'></td>";   
            echo "<td class='four'><button name='".$index[$i]."'  numer='".$rear5[$i]."' onclick='save_konfig(this)'>save</button></td>"; 
            echo"</tr>";
            }
              }else{
              
             //  echo "<td class='three'><input type='text' name='' id='".$rear5[$i].$index[$i]."' value=''></td>"; 
              }
              
          }
        
           if($czy_jest_konf=="" && $jest!=1){
           echo"<tr>";
            echo "<td class='two'>".$rear5[$i]."</td>" ;
            echo "<td class='three'>".$index[$i]."</td>";
            echo "<td class='three' style='width:80%;'>
            <input type='text' name='' style='width:95%' id='".$rear5[$i].$index[$i]."'  value='".$czy_jest_konf."'></td>";   
            echo "<td class='four'><button name='".$index[$i]."'  numer='".$rear5[$i]."' onclick='save_konfig(this)'>save</button></td>"; 
            echo"</tr>";
         }  
       
        }
        $czy_jest_konf="";
      }


   echo "</table><br>"; //?????????????????????????????????

 echo  "<div id='txtHint'><b></b></div>";
}
?>
<script>



function save_konfig(col) {
   
var idd=col.name;
 
var real5=col.getAttribute("numer");  

var konfigurator=document.getElementById(real5.concat(idd)).value;
//alert(konfigurator.length);
  if (konfigurator.length<0){
      alert("Configurator nr is to short") ;
  }else{

//alert(idd);

//alert(c1);

if (col == "") {
document.getElementById("txtHint").innerHTML = "";

return;
} else { 

if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
    }
}


document.getElementById("tabela_konf").innerHTML = "";
document.getElementById("tabela_konf1").innerHTML = "";
 //alert(konfigurator);
xmlhttp.open("GET","tab_konfigurator.php?real5="+real5+"&inde="+idd+"&konf="+konfigurator,true); // VERTTABLE

xmlhttp.send();


}
}
}
</script>

 </body>
</html>