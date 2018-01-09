<!DOCTYPE html>
<?php

  ?>
<html>
 <head>
 <?php
    if ($_SERVER['HTTP_HOST']=="wielon.c0.pl") {
echo "<title>WIELON</title>";
}else{
echo "<title>WieltonIR</title>";

}
 ?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style> 
     #custom-search-input{
    padding: 3px;
    border-radius: 1px;
    border: solid 1px #E4E4E4;
    background-color: #fff;
} 
#custom-search-input input{
    border: 0; 
    box-shadow: none; 
}
     #custom-search-input button{
           border-color: #8f8073;         
    background: hsl(51.9, 68.8%, 40.2%);;
    border-radius: 1px;  
      

}
#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    
}
     .poszukiwanie {
    
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 1px;
    font-size: 16px;
    background-color: white;
    background-image: url('ico/searchicon.png');
    background-position: 2px 2px; 
    background-repeat: no-repeat;
    padding: 2px 2px 2px 30px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.poszukiwanie:focus {
   
}     
     			 h1.ukryte{
				 display: none;
			 }
       
              .dropbtnn {
    background-color: #4CAF50;
    color: white;
    padding: 2px 20px;
    font-size: 16px;
    border: none;
    cursor: hand;
}
        .dropbtn2n {
    background-color: #8f8073;
    color: white;
    padding: 2px 20px;
    font-size: 16px;
    border: none;
    cursor: hand;
}

 .dropbtnn:hover {
 background-color: #58F115;
 }
 .dropbtn2n:hover {
 background-color: #58F115;
 }
/* The container <div> - needed to position the dropdown content */
.dropdownn {
    position: relative;
    display: inline-block;
    
}
/* przycick<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  */
.button0 {
  display: inline-block;
  border-radius: 4px;
  background-color: #666600;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 5px;
  /*width: 80px;*/
  /*transition: all 0.5s;*/
  cursor: pointer;
  
  margin: 2px;
}
.button0:hover {
 background-color: #D29BBA;
 color: #000; 
 transition: 0.0s;

 -webkit-transform:  scale(1.2);  

}

.button0 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;    
}

.button0 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -10px;
  transition: 0.5s;
   color: #000; 
}

.button0:hover span {
  padding-right: 15px;
 
}

.button0:hover span:after {
  opacity: 1;
  right: 0;
}
/* przycick<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  */
/* Dropdown Content (Hidden by Default) */
.dropdown-contentn {
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
.dropdown-contentn a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    z-index:9000;
}

/* Change color of dropdown links on hover */
.dropdown-contentn a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdownn:hover .dropdown-contentn {
    /*display: block;*/
}       
.show {display:block;}  

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdownn:hover .dropbtn {
    background-color: #3e8e41;
}
.dropdownn:hover .dropbtn2 {
    background-color: #3e8e41;
}

     
     ///?


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
	z-index: 9000;
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

.nonst{
  background: #FFFFFF;
  text-align: center;
  width: 15px;
  height: 15px;
  border-radius: 2px;
}
.nonst:hover{
background-color: orange;
}  
.nonst:hover .opis-content{
display: block;
z-index: 9999;
} 

.nonst_doc{
  background: #F8F7F8;
  text-align: center;
  width: 30px;
  height: 15px;    
  border-radius: 2px;   
   padding: 1px 1px;
     font-size: 12px;
}
.nonst_doc:hover{
background-color: orange;
}  
.nonst_doc:hover .opis-content{
display: block;
} 

.nonst_qad{
  background: #F8F7F8;
  text-align: center;
  width: 30px;
  height: 15px;    
  border-radius: 2px;   
   padding: 1px 1px;
     font-size: 12px;
     color : #7D7B81;
}
.nonst_qad:hover{
background-color: orange;
}  
.nonst_qad:hover .opis-content{
display: block;
} 

.opis-content{  
 display: none;
 padding: 50px 50px;
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
    /*background-color: red;*/
}

a.rys:link {
    background-color: transparent;
    border-style:none
}

a.rys:hover, a:active {
    /*background-color: green;*/
     background-color: transparent;
}
a.rys:active {
    /*background-color: red;*/
     background-color: transparent;
}
    
a.but:link, a.but:visited {
    background-color: hsl(51.9, 68.8%, 40.2%);
    color: white;
    padding: 4px 4px ;
    width:100px;
    text-align: center;
    margin-left:5px;
    margin-top:5px;
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
.dropdown:hover .dropbtn2 {
    background-color: #6C8E41;
}

        img.resize{
        /*width:300px;  you can use % */
        /*height: auto;*/
        border-style:none;
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
    border-style: solid;
    border: 2px solid #FFFFFF;
/*          // border-spacing: 0.5rem;
          // margin:0 0 0 500px;
         // font-size: 10px;*/
        }
        table.two{
           border-spacing: 0.5rem;
           background: hsl(170, 70%, 50%); 
            border-style: solid;
               border: 2px solid #FFFFFF;
        }
        td.one {
            padding: 0.3rem;
            background: hsl(0, 0%, 92.9%);
             border-style: solid;
                border: 2px solid #FFFFFF;
            /*colory tła drugiej kolumny*/
          }
          td.two {
            padding: 0.3rem;
            width: 20%;
            background: hsl(51.9, 68.8%, 40.2%);
             border-style: solid;
                border: 2px solid #FFFFFF;
            /*kolor naglowka pionowego*/
          }
       
        td.dwa {
               padding: 0.3rem;
                border-style: solid;
                   border: 2px solid #FFFFFF;
/*             width: 20%; */
<?php
if ($_SERVER['HTTP_HOST']=="wielon.c0.pl") {
           echo  "background: hsl(137, 0%, 79%);";
           }else{
           echo  "background: hsl(51.9, 68.8%, 40.2%);";
           }
            ?>
            /*kolor naglowka pionowego*/
          }
          td.prod {
               padding: 0.3rem;
/*             width: 20%; */
            background: #b5b797;
             border-style: solid;
                border: 2px solid #FFFFFF;
            /*kolor zleceń w produkcji*/
          }
          td.three {
            padding: 0.3rem;
             width:20% ;
            background: #F0F8FF;
             border-style: solid;
                border: 2px solid #FFFFFF;
          }
          td.four {
            padding: 0.3rem;
             border-style: solid;
                border: 2px solid #FFFFFF;
           
            background: #F5F5DC;
          }
          td.white {
            padding: 0.3rem;
           
            background: "white";
             border-style: solid;
                border: 2px solid #FFFFFF;
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
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 
 <script type="text/javascript">// <![CDATA[
 //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>    
  
   
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 

$(document).ready(function() {
$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
var ile_ID=document.getElementById("div1").innerHTML; 
//alert(ile_ID);
ile_ID=ile_ID.replace("<style>","");
       ile_ID=ile_ID.replace("</style>","");
       ile_ID=ile_ID.replace(/(\r\n|\n|\r|\s)/gm,"");
document.getElementById("div2").innerHTML=ile_ID;


 var isOldTitle = true;
var oldTitle =  document.title;
var newTitle = "Database updated";
var interval = null;
var czy_aktualne=0;
function changeTitle() {
    document.title = isOldTitle ? oldTitle : newTitle;
    isOldTitle = !isOldTitle;
}
 


// if (czy_aktualne==0;){
/*var inter1=setInterval(function() {
$('#div1').load('load.php');
           
        var dan=document.getElementById("div1").innerHTML;
        dan=dan.replace("<style>","");
       dan=dan.replace("</style>","");
       dan=dan.replace(/(\r\n|\n|\r|\s)/gm,"");
      // alert(czy_aktualne)  ;
      if (dan==ile_ID && czy_aktualne==0){
      document.getElementById("div2").innerHTML="bez zmian";//document.getElementById("div1").innerHTML + "bez zmian " +ile_ID; 
      }else{
      czy_aktualne=1;
       document.getElementById("div2").innerHTML="Database updated";
       document.getElementById("div2").style.display="block";
      //document.title = "Database updated";
      interval = setInterval(changeTitle, 700);
       clearInterval(inter1);
       //dan=dan.replace(" ",""); 
       //
      }

}, 5000); // the "3000" here refers to the time to refresh the div.  it is in milliseconds.
 */

  //  };
//document.getElementById("div1").innerHTML="ll"; 
});
$(window).focus(function () { 
//alert("g");
    clearInterval(interval);
   
    $("title").text(oldTitle);
});
// ]]></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

 <body id="body_0" onload="myFunction()" style="margin:0 auto ;width:99%;">

    <div id="loader"></div>
   	<!--<div class="se-pre-con"></div>-->
 
    <div style="display:none;" id="myDiv" class="animate-bottom">

   <?php
 
       echo "<div id='gora'>";
   
include('session.php'); //loguje jeśli nie zalogowany
// print_r($user_check);
  echo "<a class ='two' style=' margin-left:5px;' href='new.php'>New</a>";
//echo "<a class ='but' href='index_me.php'>Show mine</a>";
//  echo "<a class ='but' href='index_me.php'>Approved</a>";
 echo "<a class ='but' href='index.php'>Home</a>";
  echo "<a class ='but' href='index_All.php'>Hiden</a><br><br>";
       // echo "<a class ='but' href='index_prod.php'>In production</a><br><br>";
  if($user_check=="g.szkop"){
 echo "<a class ='but' href='slownik.php'>Slownik</a>";
  echo "<a class ='but' href='edit_konfig.php'>Konfiguratory</a>";
  echo "<a class ='but' href='slownik_tlumacz.php'>S_T</a>";
  echo "<a class ='but' href='scrap.php'>scrap</a>";
    echo "<a class ='but' href='beone.php'>one</a><br>";
  }
   if($user_check=="a.ogorek" || $user_check=="m.kuzbinski" || $user_check=="a.garbiec"){
  echo "<a class ='but' href='edit_konfig.php'>Konfiguratory</a><br>";
  }
//echo "<a class ='two' href='client.php'>Order data</a>";

//  echo "<form id='search_form'><br>Search: <br>"; //wyszukiwanie
//echo "<input type='text'  name='search' id='search' size='100' onkeyup='showResult(this.value)'><br></form>";
echo "<br>"; //wyszukiwanie
/*echo "<input type='text' class='poszukiwanie'  style='font-size: 18px;' name='search'
 id='search' size='100' placeholder='Search..' onkeyup='showResult(this.value)'>
 <button class='button0' id='search_again' size='100'  style='font-size: 12px;color: #000000;background-color: white;
    border-radius: 1px; display: none;border: 1px solid #ccc;
    border-radius: 1px;' 
 onclick='showResult_go(this)'>Search again</button><br>";    */
 ?>
    
	<div class="row" style="margin-left: 1cm;">
        <div class="col-md-3">
    		    <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text"  id='search' class="form-control input-sm" placeholder="Search..." onkeyup="showResult(this.value)" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-sm" id='search_again' type="button" onclick="showResult_go(this)">
                            <i class="glyphicon glyphicon-search" ></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div><br>

 <?php
 

echo "<div id='livesearch'></div>";

echo "<span  style='position: absolute;right:20px;top:5px;'>you're logged as: $user_check</span>";
echo "<a class ='one' href = 'logout.php'>Sign Out</a>";
  echo "</div>"; 
        include 'tabela_1.php';
//        echo  "<h1 id='tytu'  class='tytul'><b>Darth</b></h1>"; 
//echo "<div >Recent:</div>";
    //   $col=loadorder_notab($user_check,4);
            $col=loadorder($user_check,2);
                                                   
      // print_r($_SERVER['HTTP_HOST']);

//print_r($dane0);
//loadorder($user_check,3);
 
echo "<div class='content'>";
  echo "<div id='section'>";
    echo  "<div id='txtHint3'><b></b></div>"; 
        echo  "<div id='txtHint'><b></b></div>"; 

        echo "</div>";
        echo "</div>";
      echo  "<div  id='txtHint2'><b></b></div>"; 
echo "</div>";

//echo "<div class='druk' id='druk_1' align='left' style='position:fixed; left:300px; right:500px; top:300px; height:200px;  background-color: #B2F7F8;'>asdsad";   //<<<<<<<<
 // echo "</div>";
 $opcje=getopcje(); 
 //print_r($opcje["cess.NS3P30_IT"][2] );
 $opcje1=json_encode($opcje);
  $dane1=json_encode($col);
  $tg0=tlumacz_grup();
    $tg=$tg0[0];
    $cena=$tg0[1];
    $cena0=json_encode($cena);
    $tabelka2=get_table2();  
    $tabelka0=json_encode($tabelka2[0]);
    $tabelka1=json_encode($tabelka2[1]); 
        ?>
</div>
 <div id="div1" style="display:none;">
 <?php
  include('load.php');
  echo "</div>";
  //echo "<div id='div3'>";
 // include('load.php');
 // echo"</div><br>";
 ?>
  <div id="div2" style='position:fixed;display:none; padding: 2px 20px;left:10px; top:10px;background-color: red;'></div>
<script>
  var baz=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    var cbaz=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var wyszukiwanie=0;
var dane0 = <?php echo json_encode($dane1); ?>;
var opcje0 = <?php echo json_encode($opcje1); ?>;
 var ceny = <?php echo json_encode($cena0); ?>;
 var tabelka01 = <?php echo json_encode($tabelka0); ?>;
  var tabelka11 = <?php echo json_encode($tabelka1); ?>;
$('#clickCatcher').click(function () { 
  alert('df');
  //$('#dropContainer').hide();
  //$(this).hide();
});
    
    var zmi=0;

 
    //////////////////////////////// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
//////////////////////////////


function  zm_dropdown(v_unik,kolumny0,tabelka1){
    var link="";
                         for (d=0;d<v_unik[kolumny0[k]].length;d++){
                        var link1= "<a id='"+v_unik[kolumny0[k]][d]+"' name='"+tabelka1[kolumny0[k]]+"' value='"+kolumny0[k]+"' onclick='showUser_new(this)'>"+v_unik[kolumny0[k]][d]+"</a>";
                         link=link.concat(link1);
                       //alert(link);
                        document.getElementById(st1.concat(tabelka1[kolumny0[k]])).innerHTML=link;
                        //link="";
                        }

}
function buton_menu(but){
       st1='drop_';
       // alert(st1.concat(idd));

      
    document.getElementById(st1.concat(but.id)).classList.toggle("show");

}   
 function buton_heigth(wysokosc){
       //st1='drop_';
       
      // var wysokosc=document.getElementById('internal heights').innerHTML;
       var drop_but=document.getElementById('tarpaulin No.').innerHTML;
       var drop=document.getElementById('drop_tarpaulin No.').innerHTML;

      var plandeka=document.getElementById('tarpaulin No.').getAttribute('plandeka');
       //alert(plandeka);
      if(plandeka==0){
      document.getElementById('tarpaulin No.').setAttribute('plandeka',drop);
      }else{
        drop=plandeka;
      };
      
        
       if(drop_but.indexOf(wysokosc)<0){
       document.getElementById('tarpaulin No.').innerHTML="internal height was changed, please select tarpaulin again";
       }
       
    //document.getElementById(st1.concat(but.id)).classList.toggle("show");
    
} 
function buton_menu_tarp(but){
       st1='drop_';
       
       // alert(st1.concat(idd));
 var wysokosc=document.getElementById('internal heights').innerHTML;
	 var drop=document.getElementById('drop_tarpaulin No.').innerHTML;
      var plandeka=but.getAttribute('plandeka');
      if(plandeka==0){
      document.getElementById('tarpaulin No.').setAttribute('plandeka',drop);
      }else{
        drop=plandeka;
      };
//	plandeka=JSON.parse(plandeka);
 
 drop=drop.split("</a>");

	//document.getElementById('wysokosc').innerHTML=plandeka;
    document.getElementById(st1.concat(but.id)).classList.toggle("show");
      //var fil_drop=Array(drop.length);
    	var fil_drop=drop[0];
      fil_drop=fil_drop.concat("</a>");
      var nic=0;
    for(i=1;i<drop.length;i++){
     if(drop[i].indexOf(wysokosc)>0){
     nic=1;
         fil_drop=fil_drop.concat(drop[i]);
        fil_drop=fil_drop.concat("</a>");
        
      }
       }
          //alert(fil_drop);
          if(nic==0){
    document.getElementById('drop_tarpaulin No.').innerHTML="<a>  please choose internal height first </a>"; 
  }else{
     document.getElementById('drop_tarpaulin No.').innerHTML=fil_drop; 
  }   
}
//// live search
function dopisek(tabelka1,kolumny0,k){
 var to_co_bylo=document.getElementById(tabelka1[kolumny0[k]]).innerHTML;
               to_co_bylo = to_co_bylo.replace("-not avalible - Choose", ""); 
                 document.getElementById(tabelka1[kolumny0[k]]).innerHTML=to_co_bylo+"-not avalible - Choose";
                 to_co_bylo="";

}
function showResult(str) {

  wyszukiwanie=1;
   var baza=JSON.parse(dane0);
  
   /* if (str!=0){
    document.getElementById("search_again").style.display="inline";
    }else{
    document.getElementById("search_again").style.display="none";
    } */
/*  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }*/
   
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      //document.getElementById("livesearch").style.border="10px solid #A5ACB2";
    }
  }
 
 n=0; 
if(baza!=null){
 var zlecenia=new Array(baza.length);

  //var zlecenia=new Array(baza.length);
  var de="wer";
  
  //alert(de.search("e")!=null);
for (i=0;i<baza.length;i++){

      if(baza[i][0].search(str)!=null){
        
        //alert(baza[i][0]);
     zlecenia[n]=baza[i][0];
     
     //alert(zlecenia[n]);
     n++;
      };

  };
   
  c1=zlecenia.join("?k?"); 
}else{
 c1="";  
}

// if(str.length==0){
//   alert("not");
// };
 //alert(c1);
  xmlhttp.open("GET","livesearch.php?q="+str+"&zl="+c1,true);
  xmlhttp.send();

  document.getElementById("loadtab").innerHTML = "";
  document.getElementById("loadmail").innerHTML = "";

}
function showResult_go(str) {

  wyszukiwanie=1;
   var baza=JSON.parse(dane0);
    var str1=document.getElementById("search").value;
     // alert(str1);
    if (str1!=0){
         // alert(str1);
/*  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }*/
   
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
     // document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
 
 n=0; 
if(baza!=null){
 var zlecenia=new Array(baza.length);

  //var zlecenia=new Array(baza.length);
  var de="wer";
  
  //alert(de.search("e")!=null);
for (i=0;i<baza.length;i++){

      if(baza[i][0].search(str)!=null){
        
        //alert(baza[i][0]);
     zlecenia[n]=baza[i][0];
     
     //alert(zlecenia[n]);
     n++;
      };

  };
   
  c1=zlecenia.join("?k?"); 
}else{
 c1="";  
}

// if(str.length==0){
//   alert("not");
// };
// alert(str);
  xmlhttp.open("GET","livesearch.php?q="+str1+"&zl="+c1,true);
  xmlhttp.send();

  document.getElementById("loadtab").innerHTML = "";
  document.getElementById("loadmail").innerHTML = "";
 }
}
function showResult_access(str) {
            st1='drop_';
            st2='search_'
  wyszukiwanie=1;
  
   var baza=JSON.parse(dane0);
   
            var rys=str.id.split("_").pop();
             var opcje=document.getElementById(st1.concat(rys)).innerHTML ;
              var opcje=opcje.split("</a>");
              //opcje[0]=opcje[0].concat(str.value);
              
              //alert(opcje[0].concat(str.value));
                 for (d=1;d<opcje.length;d++){
                
                 if(opcje[d].split(">")[1].toLowerCase().indexOf(str.value.toLowerCase())>=0){
                 //opcje[d]=opcje[d].split(">")[1] ;
                 // alert(opcje[d]);
                  opcje[d]=opcje[d].replace("display:none","display:block");
                 }else{
                 opcje[d]=opcje[d].replace("display:block","display:none");
                 //  alert(opcje);
                // opcje[d]="";
                 // document.getElementById(st1.concat(rys)).innerHTML=opcje.join("</a>");
                 // document.getElementById(st2.concat(rys)).value=str.value;
                 // document.getElementById(st2.concat(rys)).focus();
                 }
                 document.getElementById(st1.concat(rys)).innerHTML=opcje.join("</a>");
                  document.getElementById(st2.concat(rys)).value=str.value;
                  document.getElementById(st2.concat(rys)).focus();
                 }
           
}

function showlive(str){
  comm=str.getAttribute("name1");
//alert(comm);
document.getElementById("search").value=comm;
//document.getElementById("livesearch").innerHTML = "";

}
function find_q(tabelka1){ 
   var qonfig=new Array(14);
         var nagl=new Array(14); 
         var wynik=new Array(2); 
     // alert(qonfig);
     
          for (r=0;r<qonfig.length;r++){
          //alert(document.getElementById(tabelka1[r]).innerHTML) ;
          if(document.getElementById(tabelka1[r]) !=null && tabelka1[r]!="wheels*"){
          qonfig[r]=document.getElementById(tabelka1[r]).innerHTML
          nagl[r]=r;
          }
          } 
          wynik[0]=qonfig;
          wynik[1]=nagl;
          //alert (qonfig);
          return   wynik;
          
}
 function sprawdza_podwujnie(tabelka2,tabelka1,kolumny,v_unik,q){
                   
             var q=document.getElementById("q").innerHTML; 
         q=q.split("?");
         
         var f_wiersz=  szukaj_w_tab(tabelka2,kolumny,q);  //pokazuje który wiersz spelnia
         //alert(f_wiersz);
          var v_unik=uniqu_select(tabelka2,f_wiersz,kolumny,q);
                 
              var kolumny0=not_zero(kolumny);
                 nagl=find_q(tabelka1);
wybrane=nagl[0];
kolumny=nagl[1];



            if(f_wiersz.length>0){
                 for (k=0;k<kolumny0.length;k++){
                 //alert( tabelka1[kolumny0[k]]);    
              if(document.getElementById(tabelka1[kolumny0[k]]) !=null ){  //&& tabelka1[kolumny0[k]]!="Typ"
 
              document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "blue";
             
               zm_dropdown(v_unik,kolumny0,tabelka1);
  
              
       
                if(v_unik[kolumny0[k]]!=null){
                var to= v_unik[kolumny0[k]].indexOf(document.getElementById(tabelka1[kolumny0[k]]).innerHTML);
                
        
                if(to<0){  //jeli niedostępne
               document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "red";
               
           
                         
                       
                        
                    if(v_unik[kolumny0[k]].length==1){ 
                
               document.getElementById(tabelka1[kolumny0[k]]).innerHTML=v_unik[kolumny0[k]]; 
               document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "gray";
               }else{
                 dopisek(tabelka1,kolumny0,k)
              
               }
                  
               
                  }else{

                  if(v_unik[kolumny0[k]].length==1){
                 
               document.getElementById(tabelka1[kolumny0[k]]).innerHTML=v_unik[kolumny0[k]];
                document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "orange";
               }else{
               //alert(tabelka1[kolumny0[k]]);
               //document.getElementById(tabelka1[kolumny0[k]]).innerHTML="Choose";

                 document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "pink";
                  q[kolumny0[k]]=document.getElementById(tabelka1[kolumny0[k]]).innerHTML;
                 
               
               }
                  }
              
                 } 
                }
              }

       }
    
  return f_wiersz;
}

function koryguj_nrqad(tabelka2,f_wiersz,tabelka1,opcje){
 // alert(tabelka2[1].length);
  //alert(f_wiersz);
    for (k=0;k<tabelka2[1].length;k++){
   //alert(tabelka1[k]);
     if(document.getElementById(tabelka1[k]) !=null ){ 
    //document.getElementById(tabelka1[k]).style.backgroundColor  = "orange";
    if (document.getElementById(tabelka1[k]).style.backgroundColor == "gray" || k>13) {
                if (document.getElementById(tabelka1[k]).innerHTML!="Choose" || document.getElementById(tabelka1[k]).innerHTML!="none"){
         //document.getElementById(tabelka1[k]).style.backgroundColor  = "#B8576C";
         }
         
         sprawdz_akcesoria(tabelka1[k],tabelka2[f_wiersz[0]][k],opcje,tabelka2);
         // document.getElementById(tabelka1[k]).innerHTML=tabelka2[f_wiersz[0]][k];
        }else{
        
         document.getElementById(tabelka1[k]).style.backgroundColor  = "orange";
        
        }
        } 
    
    }
     
} 

function sprawdz_akcesoria(tabelka1,tabelka2,opcje,tabelka20){
             
var szuk=document.getElementById(tabelka1).innerHTML;
var opcje_wiersz=opcje[tabelka2];
//opcje_wiersz =opcje_wiersz.split(",");
//alert(szuk); 
if (opcje_wiersz != null){
  if (opcje_wiersz.includes(szuk) || szuk =="Choose"){
  //alert(opcje_wiersz);
  //alert(opcje_wiersz.includes(szuk));
  
  }else{
   document.getElementById(tabelka1).style.backgroundColor  = "red";
   document.getElementById(tabelka1).innerHTML=document.getElementById(tabelka1).innerHTML+" - chassis was changed, NOT AVAILABLE or need to be verificated, choose again this option";
  var inn=document.getElementById("drop_"+tabelka1).innerHTML;
  inn=inn.split("</a>");
  //alert(opcje_wiersz.length);
  var new_inn=""; 
    for (k1=1;k1<opcje_wiersz.length;k1++){
       new_inn=new_inn+"<a id='"+opcje_wiersz[k1]+"' name='"+tabelka1+"' value='23' onclick='chooser2(this)'>"+opcje_wiersz[k1]+"</a>";
       } 
    //alert(document.getElementById("drop_"+tabelka1).getAttribute("name"));
    document.getElementById("drop_"+tabelka1).innerHTML=new_inn;
  }
}else{
 document.getElementById(tabelka1).innerHTML=tabelka2;
 document.getElementById(tabelka1).style.backgroundColor  ="#B8576C";
}
//alert(opcje_wiersz.includes(szuk));
//alert(isset(opcje_wiersz.indexOf(szuk)));
if (document.getElementById(tabelka1).innerHTML==tabelka2){
//alert(tabelka2);
 document.getElementById(tabelka1).innerHTML=tabelka2;
}
}


function szukaj_w_tab(tabelka2,kolumny,wybrane){
 var f_wiersz=new Array(tabelka2.length);
 var v_wiersz=new Array(tabelka2.length);
 var ktore=[];
              //alert(kolumny.length);
              
              for (r=0;r<tabelka2.length;r++){
              //for (r=55;r<56;r++)
              f_wiersz[r]=1;
               v_wiersz[r]=0;
              for (k=0;k<kolumny.length;k++){
              if( kolumny[k]!=null && wybrane[k]!=0 && k!=1){
              if(tabelka2[r][k]==wybrane[k] && f_wiersz[r]!=0){  //&& kolumny[k]!=null
             // alert(tabelka2[r][k]);
             // alert(wybrane[k]);
              v_wiersz[r]=1;
                 f_wiersz[r]=1;
                 
              }else{
              //alert(tabelka2[r][k]);
             // alert(wybrane[k]);
            //v_wiersz[k]=0;
              
              f_wiersz[r]=0;
              //break;
              }
                }
              
              }
              if(f_wiersz[r]==1){
              ktore=ktore.concat(r);
              }
              }
              
             //alert(ktore);
            return ktore;  

} 
function uniq(a) {
    var prims = {"boolean":{}, "number":{}, "string":{}}, objs = [];

    return a.filter(function(item) {
        var type = typeof item;
        if(type in prims)
            return prims[type].hasOwnProperty(item) ? false : (prims[type][item] = true);
        else
            return objs.indexOf(item) >= 0 ? false : objs.push(item);
    });
}

function notnull(uniq){
var licz=0;
var wyn=[];
//alert(uniq);
for (k=0;k<uniq.length;k++){

if(uniq[k]!=0){
   wyn.push(uniq[k]);
  
   //licz++;
}

          
}
   //  alert(wyn);
   return wyn;
}

function not_zero(uniq){
var licz=0;
var wyn=[];
//alert(uniq);
for (k=0;k<uniq.length;k++){

if(uniq[k]!=null){
   wyn.push(uniq[k]);
  
   //licz++;
}

          
}
   //  alert(wyn);
   return wyn;
}

function uniqu_select(tabelka2,f_wiersz,kolumny,q){//  unikalne wartoci
           var v_unik=new Array(f_wiersz.length);
          var h_unik=new Array(kolumny.length);
          var n_unik=new Array(kolumny.length);
           
            for (k=0;k<kolumny.length;k++){
            
              for(i=0;i<f_wiersz.length;i++){
              //h_unik[i]=null; 
              if(tabelka2[f_wiersz[i]][k]!=null){
              
               h_unik[i]=tabelka2[f_wiersz[i]][k]; 
               }
              }
             v_unik[k] =uniq(h_unik);
             n_unik[k]=k;
            // alert(notnull(v_unik[k]));
            // alert(k);
 
            }
            // alert(n_unik);
  //return  notnull(v_unik);
    return  v_unik; 
}
function showUser_new(str2) {
 document.getElementById("save_button").style.display="none";
st1='drop_';
        var col=str2.name;
        var str=str2.id; 
         var q=document.getElementById("q").innerHTML; 
         q=q.split("?");
         q[0]= document.getElementById("Category").innerHTML;
              
        baz[str2.getAttribute("value")]=str;
        cbaz[str2.getAttribute("value")]=col;
        
        var tabelka1=JSON.parse(tabelka01);
        var tabelka2=JSON.parse(tabelka11);
        var opcje=JSON.parse(opcje0);
   
         
 nagl=find_q(tabelka1);
wybrane=nagl[0];
kolumny=nagl[1];

q[str2.getAttribute("value")]=str;
q1=q.join("?");
document.getElementById("q").innerHTML=q1; 

wybrane[str2.getAttribute("value")]=str;

          //alert(q[1]);
          //alert(q[11]);
         var f_wiersz=  szukaj_w_tab(tabelka2,kolumny,q);  //pokazuje który wiersz spelnia
         //alert(f_wiersz);
          var v_unik=uniqu_select(tabelka2,f_wiersz,kolumny,q);
                 
              var kolumny0=not_zero(kolumny);
                         // alert(tabelka1); 
                          //alert(kolumny);
                         // alert(kolumny0);
             if(f_wiersz.length>0){ // jeli znalazl conajmniej jedna konfiguracja
           document.getElementById(col).innerHTML=str;
             if(1==0){
             //alert(wybrane);
             // alert(f_wiersz);
             } else{
              for (k=0;k<kolumny0.length;k++){
                 //alert( tabelka1[kolumny0[k]]);    
              if(document.getElementById(tabelka1[kolumny0[k]]) !=null ){  //&& tabelka1[kolumny0[k]]!="Typ"
 
              document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "blue";
             
               zm_dropdown(v_unik,kolumny0,tabelka1);
  
              
       
                if(v_unik[kolumny0[k]]!=null){
                var to= v_unik[kolumny0[k]].indexOf(document.getElementById(tabelka1[kolumny0[k]]).innerHTML);
                
        
                if(to<0){  //jeli niedostępne
               document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "red";
               
           
                         
                       
                        
                    if(v_unik[kolumny0[k]].length==1){ 
                
               //document.getElementById(tabelka1[kolumny0[k]]).innerHTML=v_unik[kolumny0[k]]; 
               document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "gray";
               }else{
                 dopisek(tabelka1,kolumny0,k)
              
               }
                  
               
                  }else{

                  if(v_unik[kolumny0[k]].length==1){
                 
               document.getElementById(tabelka1[kolumny0[k]]).innerHTML=v_unik[kolumny0[k]];
                document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "orange";
               }else{
               //alert(tabelka1[kolumny0[k]]);
               //document.getElementById(tabelka1[kolumny0[k]]).innerHTML="Choose";

                 document.getElementById(tabelka1[kolumny0[k]]).style.backgroundColor  = "pink";
                  q[kolumny0[k]]=document.getElementById(tabelka1[kolumny0[k]]).innerHTML;
                 
                 
               }
                  }
              
                 } 
                }
              }

             }
              //alert(tabelka2); 
                 
              q1=q.join("?");
document.getElementById("q").innerHTML=q1; 
             buton_menu_direct(col);
              //alert(tabelka2[1]);
             //alert(f_wiersz.length);
             if(f_wiersz.length==1){
             alert("OK");
               //alert(tabelka2[1]);
              document.getElementById("save_button").style.display="block";
              koryguj_nrqad(tabelka2,f_wiersz,tabelka1,opcje);
             } else{
            f_wiersz=sprawdza_podwujnie(tabelka2,tabelka1,kolumny,v_unik,q);
             
             if(f_wiersz.length==1){
             alert("OK");
              document.getElementById("save_button").style.display="block";
             koryguj_nrqad(tabelka2,f_wiersz,tabelka1,opcje);
             }
             }
              
              // alert(tabelka2[1]);

        if (str == "") {
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
            };
       
     
      
      
       jbaz=baz.join("?");
       kbaz=cbaz.join("?");
       //alert(jbaz);
       //alert(kbaz);
        //document.getElementById('tytu').innerHTML=kbaz;
         zmi=zmi+1;
          
         
        //document.getElementById("moz").innerHTML="";
         document.getElementById(col).style.backgroundColor  = "gray";
        
        xmlhttp.open("GET","getuser_index.php?q="+jbaz+"&qu="+kbaz,true);  
        xmlhttp.send();
   // wyb_kolejne();
       // document.getElementById("txtHint_start").innerHTML="";


  }
  
} else{
alert("not avalible");
} 
}
 function buton_menu_direct(but){
       st1='drop_';
       // alert(but);

      
    document.getElementById(st1.concat(but)).classList.toggle("show");

} 
function showUser(str2) {
        str=str2.name;
        var col=str2.id;
        if (str == "") {
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
            };
        
         // bal=str2.getAttribute("wier");
        
        baz[str2.getAttribute("value")]=str;
        cbaz[str2.getAttribute("value")]=col;
       jbaz=baz.join("?");
       kbaz=cbaz.join("?");
       //alert(jbaz);
        //document.getElementById('tytu').innerHTML=kbaz;
         zmi=zmi+1;
         
        document.getElementById(col).innerHTML=str;
        document.getElementById("moz").innerHTML="";
        xmlhttp.open("GET","getuser.php?q="+jbaz+"&qu="+kbaz,true);
        xmlhttp.send();
  }
}



 function chooser(str) {
                idd=str.name;
                rys=str.id;
                
                 ir=rys.replace("/","");
      iddr=ir.replace(":","");
        iddr=iddr.substring(0,203);
               // idd2=str.getAttribute("v");
            ir=rys.replace("/","");
            iddr=ir.replace(":","");
              iddr=iddr.substring(0,203);
              
//         alert(str.id);
                     st1='drop_';
        document.getElementById(st1.concat(idd)).classList.toggle("show");
                document.getElementById(idd).innerHTML=str.id;
     document.getElementById(idd).style.backgroundColor  = "gray";
    //new File("path/to/file.txt").isFile();
//    var loc = window.location.pathname;
//var dir = loc.substring(0, loc.lastIndexOf('/'));
var image_url1="images/"+iddr+".png" ;

var a=imageExists(image_url1);
    
  if(a){
    document.getElementById("pic"+idd).innerHTML="<a href='images/"+iddr+".png' class='rys' target='_blank'><img src='images/"+iddr+".png' class='resize' alt=''></a>";

}else{
//            document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png'  alt='' onerror='imgError()'>";
//
////alert(image_url1);
 document.getElementById("pic"+idd).innerHTML="<a href='images/"+iddr+".png' class='rys' target='_blank'><img src='images/"+iddr+".png' alt='' class='resize' onerror='imgError(this)'></a>";
//
    }
}

// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn2')) {

//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }
//document.getElementById(st1.concat(idd)).classList.add("show");  
 function ilosc(str){

wybrane=str.id;
ktore=str.name;
vartosc=str.value;
     var wheels=document.getElementById("wheels*").innerHTML;
     wheels= wheels.split("x");
     //alert(wheels); 
       if (wybrane=="ile_opon"){
     wheels[0]= vartosc;
     }else{
     wheels2= wheels[1].split(", ");
       wheels2[1]=vartosc;
      wheels[1]=wheels2.join(", ") ;
     }
   
   podmiana= wheels.join("x") ;
  //  alert(podmiana); 
   document.getElementById("wheels*").innerHTML=podmiana;
} 
function opony(str){
wybrane=str.id;
ktore=str.name;

 var opona=document.getElementById(ktore).innerHTML;
  
  var wheels=document.getElementById("wheels*").innerHTML;
    
   var  podmiana=wheels.replace(opona,wybrane);
   document.getElementById("wheels*").innerHTML=podmiana;
}  
 
function chooser2(str) {
var arp=JSON.parse(ceny);// odkodowuje Jonsona
//print_r(arp);
                idd=str.name;
                rys=str.id;
               // idd2=str.getAttribute("v");
            ir=rys.replace("/","");
            iddr=ir.replace(":","");
              iddr=iddr.substring(0,203);
            st1='drop_';
        document.getElementById(st1.concat(idd)).classList.toggle("show");
         //document.getElementById(st1.concat(idd)).style.display = "block";
                document.getElementById(idd).innerHTML=str.id;
     document.getElementById(idd).style.backgroundColor  = "gray";
    //new File("path/to/file.txt").isFile();
//    var loc = window.location.pathname;
//var dir = loc.substring(0, loc.lastIndexOf('/'));

//alert(arp[rys])
if(typeof arp[rys]=="undefined" || arp[rys]==0){
    document.getElementById("c_"+idd).innerHTML="TBC";

  }else{
  document.getElementById("c_"+idd).innerHTML=arp[rys];
  //document.getElementById("total_cena").innerHTML=parseInt(document.getElementById("total_cena").innerHTML)+parseInt(arp[rys]);
};

//&& (typeof arp[idd]!="undefined")
if (document.getElementById(idd).innerHTML=="YES" && (typeof arp[idd]!="undefined")){
//alert("afd");
if(arp[idd].length>0){
document.getElementById("c_"+idd).innerHTML=arp[idd];

}else{
    document.getElementById("c_"+idd).innerHTML="TBC"; 
}

};

if(idd=="internal heights"){    
//w przypadku gdy zmienia wysokoć stelaza
  buton_heigth(rys);
  }


if (document.getElementById(idd).innerHTML=="NO"){
   
document.getElementById("c_"+idd).innerHTML=""; 
}
 
 var sumowanie=0;
 var elements = document.getElementsByClassName("cena");
 for(s=0;s<elements.length;s++){
  // alert(elements[s].innerHTML);
  if (!isNaN(Number(elements[s].innerHTML))){
   sumowanie=sumowanie+ Number(elements[s].innerHTML);
  }
 }
   document.getElementById("total_cena").innerHTML=sumowanie;





var image_url1="images/"+iddr+".png" ;

var a=imageExists(image_url1);
  //alert("pic"+idd) ; 
  if(a){
    document.getElementById("pic"+idd).innerHTML="<a href='images/"+iddr+".png' class='rys' target='_blank'><img src='images/"+iddr+".png' class='resize' alt=''></a>";

}else{
//            document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png'  alt='' onerror='imgError()'>";
//
////alert(image_url1);
 document.getElementById("pic"+idd).innerHTML="<a href='images/"+iddr+".png' class='rys' target='_blank'><img src='images/"+iddr+".png' alt='' class='resize' onerror='imgError(this)'></a>";
//
    }
     
}
function imgError(es)
{
//alert(es.src);
es.src="images/0.png";
//es.height=20;
}
function ssave(col) {

 document.getElementById("save_button").innerHTML = "wait";
  document.getElementById("save_button").disabled = true;
   
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
user=col.getAttribute("user");
client_data=col.getAttribute("order");
co1=col1.split("?");
co2=col2.split("?");



var odczyt=new Array(7);
c_d=client_data.split("?p?"); // id pól do wypełniania
str2="err";
//alert(c_d);
for(n=0;n<c_d.length-1;n++){

  odczyt[n]=document.getElementById(c_d[n]).value;
}

if (odczyt[6]=document.getElementById(c_d[6]).innerHTML=="Choose"){
  odczyt[6]="";
}else{
  odczyt[6]=document.getElementById(c_d[6]).innerHTML;
}


var acc=[];
var kol=[];
var kol2=[];
var li=0;
//kol[li]="Order No.";
var zamowienie=document.getElementById("Order No.").value;
var comment=document.getElementById("comment").value;
comment=comment.replace(/\r?\n/g, '<br />');
//li++;
//   alert(comment);

for(i=0;i<co2.length;i++){
  //alert(document.getElementById(co2[i]) !=null); 
  if (document.getElementById(co2[i]) !=null) {
    acc[i]=document.getElementById(co2[i]).innerHTML;
        if (acc[i]=="Choose"){}else{
        kol[li]=co1[i];
        kol2[li]=acc[i];
        li++;
        
        }
        //alert(kol[li]);
  }
    }
 
c1=kol.join("?"); 
c2=kol2.join("?");  // wybrane wartości
odczyt=odczyt.join("?");
odczyt=odczyt.concat("?");
c2=odczyt.concat(c2);
//c1=c1.comcat('?');
//c2=c2.comcat('?');
//c1=c1.comcat(cd.join('?'));
//c2=c2.comcat(odczyt);
c_d=c_d.join("?");
c_d=c_d.concat("?");
c1=c_d.concat(c1);

//c2=c2.replace(/'/g, "&#039;");
//alert(c2);

if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}

c2=c2.replace(/\+/g, '?_?');
  comment=comment.replace(/\+/g, '?_?');
  
  c2=c2.replace(/\'/g, '?a?'); //'
  c2=c2.replace(/\&/g, ' and '); //'
  comment=comment.replace(/\'/g, '?a?');//'
  comment=comment.replace(/\&/g, ' and ');
   c2=c2.replace(/\$/g, ' dolar '); //'
  comment=comment.replace(/\$/g, ' dolar ');
     c2=c2.replace(/\%/g, ' percent '); //'
  comment=comment.replace(/\%/g, ' percent ');
       c2=c2.replace(/\@/g, ' at '); //'
  comment=comment.replace(/\@/g, ' at ');
    
 //alert(comment);
// location.reload();

xmlhttp.open("GET","tab_sav.php?q="+c1+"&qu="+c2+"&zam="+zamowienie+"&comm="+comment+"&user="+user,true); // VERTTABLE
xmlhttp.send();
document.getElementById("loadtab").innerHTML = "";
document.getElementById("loadmail").innerHTML = "";
}
}


function showFunction(col) {
 document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";    
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
co1=col1.split("?");
co2=col2.split("?");
//alert(col2);
clientd=col.getAttribute("clientd");
var zamowienie=col.id;



if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}
// alert(col2);
col2=col2.replace(/\+/g, '?_?');
 // alert(col2);

    //alert(arp1[0]);
xmlhttp.open("GET","tab_show.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm+"&clientd="+clientd,true);
xmlhttp.send();
if(wyszukiwanie==0){
  document.getElementById("loadtab").innerHTML = "";
    document.getElementById("loadmail").innerHTML = "";
}
}
}
function showdiffFunction(col) {
     document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
co1=col1.split("?");
co2=col2.split("?");
//alert(co2);

var zamowienie=col.id;



if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}

col2=col2.replace(/\+/g, '?_?');   
var wysokosc=window.innerHeight;
xmlhttp.open("GET","tab_diff.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm,true);
xmlhttp.send();
window.scrollTo(0,wysokosc);
//if(wyszukiwanie==0){
  document.getElementById("loadtab").innerHTML = "";
    document.getElementById("loadmail").innerHTML = "";
     document.getElementById("livesearch").innerHTML = "";
     // document.getElementById("livesearch").style.border = "0px solid #0000FF";
//}

}
}
function editFunction(col) {
    document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>"; 
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
co1=col1.split("?");
co2=col2.split("?");
clientd=col.getAttribute("clientd");

var zamowienie=col.id;



if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}

col2=col2.replace(/\+/g, '?_?');
//alert("sdf");
xmlhttp.open("GET","tab_edit.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm,true);
xmlhttp.send();

if(wyszukiwanie==0){
  document.getElementById("loadtab").innerHTML = "";
    document.getElementById("loadmail").innerHTML = "";
}
}
}
function editFunction_prod(col) {
    document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>"; 
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
co1=col1.split("?");
co2=col2.split("?");
clientd=col.getAttribute("clientd");

var zamowienie=col.id;



if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}

col2=col2.replace(/\+/g, '?_?');
//alert("sdf");
xmlhttp.open("GET","tab_edit_prod.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm,true);
xmlhttp.send();

if(wyszukiwanie==0){
  document.getElementById("loadtab").innerHTML = "";
    document.getElementById("loadmail").innerHTML = "";
}
}
}
function showPLFunction(col) {
    
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
co1=col1.split("?");
co2=col2.split("?");

document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
var zamowienie=col.id;



if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}
col2=col2.replace(/\+/g, '?_?');
 comm=comm.replace(/\'/g, '?a?');//'
 comm=comm.replace(/\+/g, '?_?');       //zamienia plusa w komentarzach na ?_?, potem musi być znowy zamienione
 //alert(comm);
xmlhttp.open("GET","tab_showPL.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm,true);
xmlhttp.send();
if(wyszukiwanie==0){
  document.getElementById("loadtab").innerHTML = "";
    document.getElementById("loadmail").innerHTML = "";
}
}
}

function sendorder(col) {
     
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
co1=col1.split("?");
co2=col2.split("?");

//ir=rys.replace("/","");
var zamowienie=col.id.replace("send","");;




if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}
var adre=document.getElementById("mail").value;
//alert(adre);

col2=col2.replace(/\+/g, '?_?');
xmlhttp.open("GET","tab_send.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&ad="+adre,true);
xmlhttp.send();
document.getElementById(col.id).disabled = true;
}
}
  function sendorderPDF(col) {
 document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
    
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
user=col.getAttribute("user");
ver=col.getAttribute("ver");
co1=col1.split("?");
co2=col2.split("?");

//ir=rys.replace("/","");
var zamowienie=col.id.replace("send","");




if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}


var adre='g.szkop@wielton.com.pl, alessandro.straccini@italianarimorchi.it, katia.murri@italianarimorchi.it, D.Stanek@wielton.com.pl, antonio.malvestuto@italianarimorchi.it, alessio.forcucci@italianarimorchi.it, marco.pomante@italianarimorchi.it';
//var adre='g.szkop@wielton.com.pl';

	var adre = prompt("Email will be send to:_________________________________________________________________________________________________________________________________________",adre);

	
  if (adre=="null"){
	 document.getElementById("txtHint2").innerHTML="";
	}else{
 // document.getElementById("gora").style.display = "none";
			 document.getElementById("loadtab").style.display = "none";
		col2=col2.replace(/\+/g, '?_?'); 
xmlhttp.open("GET","tab_pdf_0.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&ad="+adre+"&comm="+comm+"&ver="+ver+"&user="+user,true);
xmlhttp.send();  
//document.getElementById(col.id).disabled = true;
//var do_druku=document.getElementById("druk_1").innerHTML;
 // var OpenWindow = window.open("",'_blank');
//OpenWindow.document.write(do_druku);

	}

	
// if (person != null) {
//     document.getElementById("email_do").innerHTML =adre;
//    // "Hello " + person + "! How are you today?";
// }
	
	
//alert(adre);

}
}
  function sendorderPDF_AK(col) {
 document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
    
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
user=col.getAttribute("user");
ver=col.getAttribute("ver");
co1=col1.split("?");
co2=col2.split("?");

//ir=rys.replace("/","");
var zamowienie=col.id.replace("send","");




if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}


var adre='g.szkop@wielton.com.pl, A.Garbiec-Ogorek@wielton.com.pl, M.Kuzbinski@wielton.com.pl';
//var adre='g.szkop@wielton.com.pl';

	var adre = prompt("Email will be send to:_________________________________________________________________________________________________________________________________________",adre);

	
  if (adre=="null"){
	 document.getElementById("txtHint2").innerHTML="";
	}else{
 // document.getElementById("gora").style.display = "none";
			 document.getElementById("loadtab").style.display = "none";
		col2=col2.replace(/\+/g, '?_?'); 
xmlhttp.open("GET","tab_pdf_0.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&ad="+adre+"&comm="+comm+"&ver="+ver+"&user="+user,true);
xmlhttp.send();  
//document.getElementById(col.id).disabled = true;
//var do_druku=document.getElementById("druk_1").innerHTML;
 // var OpenWindow = window.open("",'_blank');
//OpenWindow.document.write(do_druku);

	}

	
// if (person != null) {
//     document.getElementById("email_do").innerHTML =adre;
//    // "Hello " + person + "! How are you today?";
// }
	
	
//alert(adre);

}
}
  function make_PDF(col) {
 document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
    
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
comm=col.getAttribute("comm");
user=col.getAttribute("user");
ver=col.getAttribute("ver");
co1=col1.split("?");
co2=col2.split("?");

//ir=rys.replace("/","");
var zamowienie=col.id.replace("send","");




if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}


var adre='g.szkop@wielton.com.pl';
//var adre='g.szkop@wielton.com.pl';

//	var adre = prompt("Email will be send to:_________________________________________________________________________________________________________________________________________",adre);

	
  if (adre=="null"){
	 document.getElementById("txtHint2").innerHTML="";
	}else{
 // document.getElementById("gora").style.display = "none";
			 document.getElementById("loadtab").style.display = "none";
		col2=col2.replace(/\+/g, '?_?'); 
xmlhttp.open("GET","tab_pdf.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&ad="+adre+"&comm="+comm+"&ver="+ver+"&user="+user,true);
xmlhttp.send();  
document.getElementById(col.id).disabled = true;
var do_druku=document.getElementById("druk_1").innerHTML;
  var OpenWindow = window.open("",'_blank');
OpenWindow.document.write(do_druku);

	}

	
// if (person != null) {
//     document.getElementById("email_do").innerHTML =adre;
//    // "Hello " + person + "! How are you today?";
// }
	
	
//alert(adre);

}
}
function start() {
    alert("kbaz");
}

function close_print() {  
var do_druku=document.getElementById("druk_1").innerHTML;
//document.getElementById("druk_1").innerHTML="";

  var OpenWindow = window.open("",'_blank');   
OpenWindow.document.write(do_druku);



}
function imageExists(image_url){

    var http = new XMLHttpRequest();

    http.open('HEAD', image_url, false);
    http.send();

    return http.status != 404;

}
function approve(col){
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
user=col.getAttribute("user");
co1=col1.split("?");
co2=col2.split("?");

// alert(co2);

var acc=[];
var kol=[];
var kol2=[];
var li=0;
//kol[li]="Order No.";
var zamowienie=col.id;
//var comment=document.getElementById("comment").value;
//comment=comment.replace(/\r?\n/g, '<br />');
//li++;
   
// alert(comment);
for(i=0;i<co2.length;i++){
  if(document.getElementById(co2[i])!==null){
  //alert(co2[li]);
    acc[i]=document.getElementById(co2[i]).innerHTML;
  // alert(acc[i]);
        if (acc[i]=="Choose"){}else{
        kol[li]=co1[i];
        kol2[li]=acc[i];
        li++;
           
        }}
//     alert(kol2);
    }
    // alert(kol2);
c1=kol.join("?"); 
c2=kol2.join("?");  
 //alert(c2);

if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}
c2=c2.replace(/\+/g, '?_?');
// alert(user);
// location.reload();
xmlhttp.open("GET","tab_approve.php?q="+c1+"&qu="+c2+"&zam="+zamowienie+"&user="+user,true);
xmlhttp.send();

document.getElementById("loadtab").innerHTML = "";
}
}
function Hide(col){
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
user=col.getAttribute("user");
ifh=col.getAttribute("ifh");
co1=col1.split("?");
co2=col2.split("?");

// alert(co2);

var acc=[];
var kol=[];
var kol2=[];
var li=0;
//kol[li]="Order No.";
var zamowienie=col.id;
var st="hd_";
zamowienie_td=st.concat(zamowienie);
//alert(zamowienie_td);
//var comment=document.getElementById("comment").value;
//comment=comment.replace(/\r?\n/g, '<br />');
//li++;
   
// alert(comment);
for(i=0;i<co2.length;i++){
  if(document.getElementById(co2[i])!==null){
  //alert(co2[li]);
    acc[i]=document.getElementById(co2[i]).innerHTML;
  // alert(acc[i]);
        if (acc[i]=="Choose"){}else{
        kol[li]=co1[i];
        kol2[li]=acc[i];
        li++;
           
        }}
//     alert(kol2);
    }
    // alert(kol2);
c1=kol.join("?"); 
c2=kol2.join("?");  
 //alert(c2);

if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}
c2=c2.replace(/\+/g, '?_?');
//= alert(user);
// location.reload();
xmlhttp.open("GET","tab_Hide.php?q="+c1+"&qu="+c2+"&zam="+zamowienie+"&user="+user+"&ifh="+ifh,true);
xmlhttp.send();

document.getElementById(zamowienie_td).innerHTML = "";
}
}
function approve_production(col){
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
user=col.getAttribute("user");
co1=col1.split("?");
co2=col2.split("?");

// alert(co2);

var acc=[];
var kol=[];
var kol2=[];
var li=0;
//kol[li]="Order No.";
var zamowienie=col.id;
//var comment=document.getElementById("comment").value;
//comment=comment.replace(/\r?\n/g, '<br />');
//li++;
   
// alert(comment);
for(i=0;i<co2.length;i++){
  if(document.getElementById(co2[i])!==null){
  //alert(co2[li]);
    acc[i]=document.getElementById(co2[i]).innerHTML;
  // alert(acc[i]);
        if (acc[i]=="Choose"){}else{
        kol[li]=co1[i];
        kol2[li]=acc[i];
        li++;
           
        }}
//     alert(kol2);
    }
    // alert(kol2);
c1=kol.join("?"); 
c2=kol2.join("?");  
 //alert(c2);

if (col == "") {
document.getElementById("txtHint2").innerHTML = "";

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
        document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
    }
}
c2=c2.replace(/\+/g, '?_?');
// alert(user);
// location.reload();
xmlhttp.open("GET","tab_approve_prod.php?q="+c1+"&qu="+c2+"&zam="+zamowienie+"&user="+user,true);
xmlhttp.send();

document.getElementById("loadtab").innerHTML = "";
}
}
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 0);
    
}

function showPage() {
  
  if(document.getElementById('loader') !=null){
   
  document.getElementById("loader").style.display = "none";
}
  if(document.getElementById('loader1') !=null){
     alert('asdfg');
  document.getElementById("loader1").style.display = "none";
}
  if(document.getElementById('tabPL') !=null){
  document.getElementById("tabPL").style.display = "block";                           
  }
  
   if(document.getElementById('myDiv') !=null){
  document.getElementById("myDiv").style.display = "block";
     
   }
}
// document.getElementById("txtHint2").addEventListener("onchange", myFunction);
function chooserclient(str7) {
// alert("idd");
            iddy=str7.name;
           rys=str7.id;
          // idd2=str.getAttribute("v");
         ir=rys.replace("/","");
        iddr=ir.replace(":","");

            document.getElementById(iddy).innerHTML=str7.id;
 document.getElementById(iddy).style.backgroundColor  = "gray";
}
function wyb_kolejne() {
  // alert('q');
// alert("idd");
          //  iddy=str7.name;
          // rys=str7.id;

 var q=document.getElementById("q").innerHTML;
 alert(q);
}


  function save_konfig_show(col) {
        
var idd=col.name;
// alert(idd);
var real5=col.getAttribute("numer");  

var konfigurator=document.getElementById(real5.concat(idd)).value;
//alert(konfigurator.length);
  if (konfigurator.length<0){
      alert("Configurator nr is to short") ;
  }else{



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


//document.getElementById("tabela_konf").innerHTML = "";
//document.getElementById("tabela_konf1").innerHTML = "";
document.getElementById("txtHint2").innerHTML = "";
 //alert(konfigurator);
xmlhttp.open("GET","tab_konfigurator.php?real5="+real5+"&inde="+idd+"&konf="+konfigurator,true); // VERTTABLE

xmlhttp.send();


//document.getElementById("wiadomosc").innerHTML="";
//document.getElementById("but_".concat(real5).concat(idd)).innerHTML = document.getElementById("wiadomosc").innerHTML;
}
}
}
function deleteFunction(u) {

if (u == "") {
document.getElementById("txtHint3").innerHTML = "";

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
        document.getElementById("txtHint3").innerHTML = xmlhttp.responseText;
    }
}
 // alert(u.id); 
// location.reload();
xmlhttp.open("GET","tab_del.php?qd="+u.id,true);
xmlhttp.send();
document.getElementById("loadtab").innerHTML = "";
}
}

        </script>

 </body>
</html>