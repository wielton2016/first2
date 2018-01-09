<!DOCTYPE html>
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style>
         .dropbtn {
    background-color: #4CAF50;
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
          td.three {
            padding: 0.3rem;
             width:20% ;
            background: hsl(170, 10%, 50%);
          }
          td.four {
            padding: 0.3rem;
           
            background: hsl(181, 10%, 68%);
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
     

     <!--<img src="https://bippig-bn1305.files.1drv.com/y3m3M5TT9Q0GTWqo9316ZZouJhqmtCRFfHqmsp7QmL0csNF0ikenVhTiuotKHGp6pfH2-GyWBg__8eY8CD-E0mAVDXB38aNs7ESoieyOY23vkJYS9TtqT3XrGwoLFFDUbqWEBRiGLese9t6pWr0ux81kzNOYMG6kiQXe4ZumSAgHp0?width=660&height=497&cropmode=none" alt="no image">-->
     <!--<a href="https://bippig-bn1305.files.1drv.com/y3m3M5TT9Q0GTWqo9316ZZouJhqmtCRFfHqmsp7QmL0csNF0ikenVhTiuotKHGp6pfH2-GyWBg__8eY8CD-E0mAVDXB38aNs7ESoieyOY23vkJYS9TtqT3XrGwoLFFDUbqWEBRiGLese9t6pWr0ux81kzNOYMG6kiQXe4ZumSAgHp0?width=660&height=497&cropmode=none">bird</a>-->  
<!--<iframe src="https://onedrive.live.com/embed?cid=1768F0D3FE310213&resid=1768F0D3FE310213%218158&authkey=AA0ftckLpRkI7Kk" width="165" height="128" frameborder="0" scrolling="no"></iframe>-->
         <?php
 
        include 'tabela_1.php';
        echo  "<h1 id='tytu'  class='tytul'><b>Darth</b></h1>"; 
//        $zap=tlumacz("YES");
//        print_r($zap);
       // wyslijmail();
//        $tg=tlumacz_grup();
//         print_r($tg);
        loadorder();
        loadtable();

//        echo "<script type='text/javascript'>";
// echo  "start();";
//echo "</script>";
        

     //   $scategory= array_column($wier, 0);
     //   $category = array_unique($scategory);
      //$category=(array_values($category));
      
      for($j=0;$j<count($tytuly);++$j){
      $scategory[$j]= array_values(array_unique(array_column($wier, $j)));
                   }
           // print_r($scategory[0][0]);    
             
           // echo "<img src='images/slider.jpg' class='resize' alt='Mountain View' >";
           // print_r(join("?",$wier[1]));
        ?>
      <div class="menu-wrap" id="header">
    <nav class="menu">
        <ul class="clearfix" id="ech">
  <?php
  for($n=0;$n<1;++$n) {  
          echo  "<li>";
   if ($n<1){  
   echo "<a  id='".$tytuly[$n]."' name='pi' >".$tytuly[$n]."</a>";}
   else
   {
      echo "<a  id='".$tytuly[$n]."'></a>";
   }
           echo    "<ul class='sub-menu' id='moz'>" ;
                    for($i=0;$i<count($scategory[$n]);++$i){
                        if ($n<1){
                     echo "<li><a   id='".$tytuly[$n]."'  value=$n name='".$scategory[$n][$i]."' onclick='showUser(this)' >".$scategory[$n][$i]."</a></li>";   
                   // print_r($tytuly[$n].$i);
                   }
                   else{
                    echo "<li><a   id='".$tytuly[$n]."'  value=$n name='".$scategory[$n][$i]."' onclick='showUser(this)' ></a></li>";   
                   } 
                    }    
               echo "</ul>";
  echo "</li>";
  
                    }
        ?>    

        </ul>
    </nav>
</div>
 <?php
   echo "<div id='section'>";
    echo  "<div id='txtHint3'><b></b></div>"; 
        echo  "<div id='txtHint'><b></b></div>"; 
        //tabelaphp($wier);
         echo "</div>";
       echo  "<div id='txtHint2'><b></b></div>"; 
        echo "</div>";
        
        
       

        ?>
   

     
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
es.height=20;
}
function ssave(col) {
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
co1=col1.split("?");
co2=col2.split("?");

//alert(co1);

var acc=[];
var kol=[];
var kol2=[];
var li=0;
//kol[li]="Order No.";
var zamowienie=document.getElementById("Order No.").value;
//li++;
for(i=0;i<co2.length;i++){
    acc[i]=document.getElementById(co2[i]).innerHTML;
        if (acc[i]=="Choose"){}else{
        kol[li]=co1[i];
        kol2[li]=acc[i];
        li++;
        }
//     alert(kol2);
    }
     //alert(co2);
c1=kol.join("?"); 
c2=kol2.join("?");  
// alert(c2);

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

c2=c2.replace(/\+/g, '%%%');
//alert(c2);
// location.reload();
xmlhttp.open("GET","tab_sav.php?q="+c1+"&qu="+c2+"&zam="+zamowienie,true);
xmlhttp.send();

}
}

function showFunction(col) {
     
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
co1=col1.split("?");
co2=col2.split("?");


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

col2=col2.replace(/\+/g, '%%%');
xmlhttp.open("GET","tab_show.php?q="+col1+"&qu="+col2+"&zam="+zamowienie,true);
xmlhttp.send();

}
}
function showPLFunction(col) {
     
col1=col.getAttribute("col1");
col2=col.getAttribute("col2");
co1=col1.split("?");
co2=col2.split("?");


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
col2=col2.replace(/\+/g, '%%%');
xmlhttp.open("GET","tab_showPL.php?q="+col1+"&qu="+col2+"&zam="+zamowienie,true);
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
col2=col2.replace(/\+/g, '%%%');
xmlhttp.open("GET","tab_send.php?q="+col1+"&qu="+col2+"&zam="+zamowienie+"&ad="+adre,true);
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


        </script>

 </body>
</html>