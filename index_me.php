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
            background: hsl(49, 49%, 87%);
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

 <body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
   	<!--<div class="se-pre-con"></div>-->
 
    <div style="display:none;" id="myDiv" class="animate-bottom">

   <?php
 
   
   
include('session.php'); //loguje jeśli nie zalogowany
// print_r($user_check);
  echo "<a class ='two' href='new.php'>New</a>";
     //  echo "<a class ='but' href='index_me.php'>Show mine</a>";
  echo "<a class ='but' href='index_me.php'>Approved</a>";
   echo "<a class ='but' href='index.php'>To approve</a>";
   echo "<a class ='but' href='index_all.php'>All</a>";
      echo "<a class ='but' href='index_prod.php'>In production</a>";
//echo "<a class ='two' href='client.php'>Order data</a>";
echo "<a  style='position: absolute;right:20px;'>you're logged as: $user_check</a>";
echo "<h2><a class ='one' href = 'logout.php'>Sign Out</a></h2>";

        include 'tabela_1.php';
//        echo  "<h1 id='tytu'  class='tytul'><b>Darth</b></h1>"; 
echo "<div>Orders that are waiting for approva:</div>";
        loadorder($user_check,1);


echo "<div class='content'>";
  echo "<div id='section'>";
    echo  "<div id='txtHint3'><b></b></div>"; 
        echo  "<div id='txtHint'><b></b></div>"; 

        echo "</div>";
        echo "</div>";
      echo  "<div  id='txtHint2'><b></b></div>"; 
echo "</div>";
  //echo "</div>";
        ?>
</div>
<script>
 
    
    var zmi=0;
    var baz=[0,0,0,0,0,0,0,0,0,0,0];
    var cbaz=[0,0,0,0,0,0,0,0,0,0,0];
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
               // idd2=str.getAttribute("v");
            ir=rys.replace("/","");
            iddr=ir.replace(":","");
//         alert(str.id);
         
                document.getElementById(idd).innerHTML=str.id;
     document.getElementById(idd).style.backgroundColor  = "gray";
    //new File("path/to/file.txt").isFile();
//    var loc = window.location.pathname;
//var dir = loc.substring(0, loc.lastIndexOf('/'));
var image_url1="images/"+iddr+".png" ;

var a=imageExists(image_url1);
    
  if(a){
    document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png' class='resize' alt=''>";

}else{
//            document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png'  alt='' onerror='imgError()'>";
//
////alert(image_url1);
 document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png' alt='' class='resize' onerror='imgError(this)'>";
//
    }
}
function chooser2(str) {
                idd=str.name;
                rys=str.id;
               // idd2=str.getAttribute("v");
            ir=rys.replace("/","");
            iddr=ir.replace(":","");
//        alert(str.id);
         
                document.getElementById(idd).innerHTML=str.id;
     document.getElementById(idd).style.backgroundColor  = "gray";
    //new File("path/to/file.txt").isFile();
//    var loc = window.location.pathname;
//var dir = loc.substring(0, loc.lastIndexOf('/'));
var image_url1="images/"+iddr+".png" ;

var a=imageExists(image_url1);
    
  if(a){
    document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png' class='resize' alt=''>";

}else{
//            document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png'  alt='' onerror='imgError()'>";
//
////alert(image_url1);
 document.getElementById("pic"+idd).innerHTML="<img src='images/"+iddr+".png' alt='' class='resize' onerror='imgError(this)'>";
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
   
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
user=col.getAttribute("user");
client_data=col.getAttribute("order");
co1=col1.split("?");
co2=col2.split("?");
//alert(col2);
//alert(client_data);

var odczyt=new Array(7);
c_d=client_data.split("?p?"); // id pól do wypełniania
str2="err";
//alert(c_d);
for(n=0;n<c_d.length-1;n++){

  odczyt[n]=document.getElementById(c_d[n]).value;
}

  odczyt[6]=document.getElementById(c_d[n]).innerHTML;


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


//alert(c1);

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
 
 //alert(c2);  
// location.reload();
xmlhttp.open("GET","tab_sav.php?q="+c1+"&qu="+c2+"&zam="+zamowienie+"&comm="+comment+"&user="+user,true); // VERTTABLE
xmlhttp.send();
document.getElementById("loadtab").innerHTML = "";
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
xmlhttp.open("GET","tab_show.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm+"&clientd="+clientd,true);
xmlhttp.send();

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
xmlhttp.open("GET","tab_diff.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm,true);
xmlhttp.send();

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
xmlhttp.open("GET","tab_edit.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm,true);
xmlhttp.send();

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
xmlhttp.open("GET","tab_showPL.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&comm="+comm,true);
xmlhttp.send();

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
var adre=document.getElementById("mail").value;
//alert(adre);
col2=col2.replace(/\+/g, '?_?');
xmlhttp.open("GET","tab_pdf.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&ad="+adre+"&comm="+comm+"&ver="+ver+"&user="+user,true);
xmlhttp.send();
document.getElementById(col.id).disabled = true;
}
}
function start() {
    alert("kbaz");
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
        </script>

 </body>
</html>