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



<?php
echo "<button onclick='myFunction_frame()'>Replace document</button>";
 ?>
</div>

<script>
//window.open("http://192.168.1.181:8090/share/page/user/gszkop/dashboard","_self")

function myFunction_frame() {
    location.replace("http://192.168.1.181:8090/share/page/user/gszkop/dashboard")
}
</script>

 </body>
</html>