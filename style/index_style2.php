/* CSS Document */

     .btn-warning{
   background-color: #b5b797 !important;
  border: none !important;
  padding: 4px 4px 4px 4px !important;
}
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
    background: hsl(51.9, 68.8%, 40.2%);
    border-radius: 1px;


}


#custom-search-input button:hover{
    border: 0;
    box-shadow: none;

}
   td.tab_ddt{
   font-size:8px;
   word-break:break-all;
    border: 1px solid black;
    vertical-align: top;
  text-align: left;
  height:45px;
   }
      td.tab_ddt_data{
   font-size:10px;
   word-break:break-all;
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
.ns_form{
top: 20%;
right: 5%;
margin-top: -100px; /* Negative half of height. */

display: block;
position:fixed;
background-color: #F3F2DF;
padding:5% 5%;
 box-shadow: 10px 10px 5px grey;
  border-radius: 10px;
  border: solid 1px #000000;
  z-index: 9999;
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

a.but:link, a.but:visited, button.but{
    background-color: hsl(51.9, 68.8%, 40.2%);
    color: white;
    padding: 4px 4px ;
    width:100px;
    text-align: center;
    margin-left:5px;
    margin-top:5px;
    text-decoration: none;
    display: inline-block;    
     border: none;    
}
a.but:hover, a:active, button.but:hover {
    background-color: orange;
}
a.but:active, button.but:active {
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
          td.it1 {
            padding: 0.3rem;
             border-style: solid;
                border: 2px solid #FFFFFF;
background: hsl(51.9, 68.8%, 40.2%);
            
          }
          td.it2 {
            padding: 0.3rem;
             border-style: solid;
                border: 2px solid #FFFFFF; 
                  background: hsl(0, 0%, 92.9%);
          }
          td.it3 {
            padding: 0.3rem;
             border-style: solid;
                border: 2px solid #FFFFFF; 
             background: hsl(0, 0%, 92.9%);
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