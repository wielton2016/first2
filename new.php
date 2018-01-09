<!DOCTYPE html>
<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <style>
     
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

        img.resize{
        /*width:300px;  you can use % */
        /*height: auto;*/
        max-width: 200px;
        max-height: 200px;
        }

          #header {

        height:100px;
      
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
  img.resize{
        /*width:300px;  you can use % */
        /*height: auto;*/
        border-style:none;
        max-width: 200px;
        max-height: 200px;
        }
   table.one{
/*          // border-spacing: 0.5rem;
          // margin:0 0 0 500px;
         // font-size: 10px;*/
        }
        table.two{
           border-spacing: 0.3rem;
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
// print_r($user_check);
        include 'tabela_1.php';
        include('session_guest.php');
if(!isset($user_check)){
        echo "<h2><a style='font-size: 16px;position:absolute; right:20px;' href = 'login.php'>Log in</a></h2>";}
//        echo  "<h1 id='tytu'  class='tytul'><b>Darth</b></h1>"; 
//        $zap=tlumacz("YES");
//        print_r($zap);
       // wyslijmail();
//        $tg=tlumacz_grup();
//         print_r($tg);
       // loadorder();
        echo "<a class ='but' href='index.php'>Home</a>";
        echo "<a class ='but' href='new.php'>Reload</a>";
        loadtable();

//        echo "<script type='text/javascript'>";
// echo  "start();";
//echo "</script>";
        

     //   $scategory= array_column($wier, 0);
     //   $category = array_unique($scategory);
      //$category=(array_values($category));
   echo  "<div >";    
      for($j=0;$j<count($tytuly);++$j){
      $scategory[$j]= array_values(array_unique(array_column($wier, $j)));
                   }
           // print_r($scategory[0][0]);    
             
           // echo "<img src='images/slider.jpg' class='resize' alt='Mountain View' >";
           // print_r(join("?",$wier[1]));

 
 
 
         echo "<table id='txtHint_start' class='one' style='width:100%' margin-top: 500px>";

        
        for ($n=0;$n<17;++$n){
                      if($tytuly[$n]!="wheels*" && $tytuly[$n]!="Typ"){
             echo"<tr>";
        echo "<td class='two'>".$tytuly[$n]."</td>" ;
          
             echo "<td class='one'>";
                echo "<div class='dropdownn'>";
				                  echo "<button class='dropbtn2n'  name='".$scategory[$n][$i]."' onclick='buton_menu(this)' id='".$tytuly[$n]."' >Choose</button>";
                             echo "<div  class='dropdown-contentn' id='drop_".$tytuly[$n]."'>";
                             search_access($tytuly[$n], $scategory);
                            for($i=0;$i<count($scategory[$n]);++$i){
                             echo "<a id='".$scategory[$n][$i]."' style='display:block;cursor: pointer;' name='".$tytuly[$n]."' value=$n onclick='showUser_new(this)'>".$scategory[$n][$i]."</a>"; 
              }  
                 echo "</div></td>";
       
        $dane1=str_replace("/","",$col[$i]);
         $dane1=str_replace(":","",$dane1);
            $dane1=substr($dane1,0,202);
           if(file_exists("images/".$dane1.".png")){
        echo "<td class='white'> <a href='images/".$dane1.".png' class='rys' target='_blank'><img src='images/".$dane1.".png' class='resize' alt=''></a></td>";
            }else{
               echo "<td class='white'><a href='images/".$dane1.".png' class='rys' target='_blank'><img src='images/".$dane1.".png' alt='' class='resize' onerror='imgError(this)'></a></td>";
         
            }
//            if(isset($po[$war[$i]])){
//             echo "<td class='one'>". $po[$war[$i]] . "</td>"; 
//            }
         echo"</tr>";
         }
        }

       
echo "</table><br>"; //???????????????????????????????
echo "</div>";

   echo "<div id='section'>";
  // echo  "<div id='txtdane'><b>";
  // // include('client.php');
  // echo "</b></div>"; 
    echo  "<div id='txtHint3'><b></b></div>"; 
        echo  "<div id='txtHint'><b></b></div>"; 
        //tabelaphp($wier);
         echo "</div>";
       echo  "<div id='txtHint2'><b></b></div>"; 
        echo "</div>";

    $tg0=tlumacz_grup();
    $tg=$tg0[0];
    $cena=$tg0[1];
    $cena0=json_encode($cena);
    //print_r(json_encode($cena));
    //$cena="yyy";
       

        ?>
   

     
<script>
 
    var ceny = <?php echo json_encode($cena0); ?>;
    var zmi=0;
    var baz=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    var cbaz=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    
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

        function showUser(str2) {
        str=str2.name;
          
        var col=str2.id;
       // alert(col);
        //alert(col);
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
      // alert(kbaz);
        //document.getElementById('tytu').innerHTML=kbaz;
         zmi=zmi+1;
         
        document.getElementById(col).innerHTML=str;
        document.getElementById("moz").innerHTML="";
        xmlhttp.open("GET","getuser.php?q="+jbaz+"&qu="+kbaz,true);
        xmlhttp.send();
  }
}
         function showUser_new(str2) {
        var col=str2.name;
          
        var str=str2.id;
        //alert(str);
        //alert(col);
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
       //alert(kbaz);
        //document.getElementById('tytu').innerHTML=kbaz;
         zmi=zmi+1;
         
        document.getElementById(col).innerHTML=str;
        //document.getElementById("moz").innerHTML="";
         document.getElementById(col).style.backgroundColor  = "gray";
        buton_menu_direct(col);
        xmlhttp.open("GET","getuser.php?q="+jbaz+"&qu="+kbaz,true);  
        xmlhttp.send();
             document.getElementById("txtHint_start").innerHTML="";
  }
}
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

function chooser(str) {
      idd=str.name;
      rys=str.id;
      // idd2=str.getAttribute("v");
      ir=rys.replace("/","");
      iddr=ir.replace(":","");
        iddr=iddr.substring(0,203);
      var arp=JSON.parse(ceny);// odkodowuje Jonsona
     // alert(arp['Tank 9600']);
         
                document.getElementById(idd).innerHTML=str.id;
     document.getElementById(idd).style.backgroundColor  = "gray";
    //new File("path/to/file.txt").isFile();
//    var loc = window.location.pathname;
//var dir = loc.substring(0, loc.lastIndexOf('/'));

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
   //document.getElementById("total_cena").innerHTML=sumowanie;

//alert(sumowanie);
  //alert(document.getElementById("c_"+idd).innerHTML);

var image_url1="images/"+iddr+".png" ;
// alert(iddr);
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
        function chooser_hide(str) {
        
        }
   function chooser_tarp_new(str) {
      idd=str.name;
      rys=str.id;
      
   
                   //w przypadku gdy zmienia wysokoć stelaza
      if(idd=="internal heights" && document.getElementById("Category").innerHTML!="VAN"){   
          //alert(rys);
  buton_heigth(rys);
  } 
             
         // idd2=str.getAttribute("v");
      ir=rys.replace("/","");
      iddr=ir.replace(":","");
        iddr=iddr.substring(0,203);
      var arp=JSON.parse(ceny);// odkodowuje Jonsona
     // alert(arp['Tank 9600']);
      
                document.getElementById(idd).innerHTML=str.id;
     document.getElementById(idd).style.backgroundColor  = "gray";
    //new File("path/to/file.txt").isFile();
//    var loc = window.location.pathname;
//var dir = loc.substring(0, loc.lastIndexOf('/'));
        st1='drop_';
 // alert(idd) ;
  document.getElementById(st1.concat(idd)).classList.toggle("show");
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
   //document.getElementById("total_cena").innerHTML=sumowanie;

//alert(sumowanie);
  //alert(document.getElementById("c_"+idd).innerHTML);
   if (iddr=="YES"){
   
       iddr= idd;
   }
var image_url1="images/"+iddr+".png" ;
// alert(iddr);
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
           function chooser2(str) {
             
                idd=str.name;
                rys=str.id;
               
               // idd2=str.getAttribute("v");
            ir=rys.replace("/","");
            iddr=ir.replace(":","");
              iddr=iddr.substring(0,203);
//        alert(str.id);
         
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

//alert(client_data);
//(!($tytul[$i]=="ride height" || $tytul[$i]=="min unloaded height" || $tytul[$i]=="Mass of welded chassis (W2) [kg]"))

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
 if (zamowienie!="") {
var comment=document.getElementById("comment").value;
comment=comment.replace(/\r?\n/g, '<br />');
//li++;
//   alert(comment);
for(i=0;i<co2.length;i++){
  if(!(co2[i]=="ride height" || co2[i]=="min unloaded height" || co2[i]=="Mass of welded chassis (W2) [kg]")){
    acc[i]=document.getElementById(co2[i]).innerHTML;
        if (acc[i]=="Choose"){}else{
        kol[li]=co1[i];
        kol2[li]=acc[i];
        li++;
        }
//     alert(kol2);
}
    }
     //alert(co2);
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
        
//alert(c2);
// location.reload();
xmlhttp.open("GET","tab_sav.php?q="+c1+"&qu="+c2+"&zam="+zamowienie+"&comm="+comment+"&user="+user,true); // VERTTABLE
xmlhttp.send();
document.getElementById("section").innerHTML = "";
}
}else{
alert("No order number!");
} }

function showFunction(col) {
    document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
  
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

col2=col2.replace(/\+/g, '?_?');
xmlhttp.open("GET","tab_show.php?q="+col1+"&qu="+col2+"&zam="+zamowienie,true);
xmlhttp.send();

}
}
function showPLFunction(col) {
  document.getElementById("txtHint2").innerHTML="<img src='ico/loading.gif' style='position: absolute; left:45%;'>";
    
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
col2=col2.replace(/\+/g, '?_?');
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
col2=col2.replace(/\+/g, '?_?');
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

function buton_menu(but){
       st1='drop_';
        //alert('st1.concat(idd)');

      
    document.getElementById(st1.concat(but.id)).classList.toggle("show");

}  
function buton_menu_direct(but){
       st1='drop_';
       // alert(but);

      
    document.getElementById(st1.concat(but)).classList.toggle("show");

}  
 function buton_heigth(wysokosc){
       //st1='drop_';
       
      // var wysokosc=document.getElementById('internal heights').innerHTML;
       var drop_but=document.getElementById('tarpaulin No.').innerHTML;
       var drop=document.getElementById('drop_tarpaulin No.').innerHTML;
        
      var plandeka=document.getElementById('tarpaulin No.').getAttribute('plandeka');
       
      if(plandeka==0){
      document.getElementById('tarpaulin No.').setAttribute('plandeka',drop);
      }else{
        drop=plandeka;
      };
      
        
       if(drop_but.indexOf(wysokosc)<0 && drop_but!="none"){
       document.getElementById('tarpaulin No.').innerHTML="internal height was changed, please select tarpaulin again";
       }
       
    //document.getElementById(st1.concat(but.id)).classList.toggle("show");
    
} 
function buton_menu_tarp(but){
       st1='drop_';
       
       
 var wysokosc=document.getElementById('internal heights').innerHTML;
 //alert(wysokosc);
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
  //alert(st1.concat(but.id));
   document.getElementById(st1.concat(but.id)).classList.toggle("show");
}
var myVar_edit;
function showResult_access(str) {
//var myVar_edit=0;

 clearTimeout(myVar_edit);
 myVar_edit = setTimeout(function(){showResult_access0(str);}, 500);
}    
function showResult_access0(str) {
            st1='drop_';
            st2='search_'
  wyszukiwanie=1;

   //var baza=JSON.parse(dane0);
   
            var rys=str.id.split("_").pop(); 
                            
             var opcje=document.getElementById(st1.concat(rys)).innerHTML ;
              var opcje=opcje.split("</a>");
              //opcje[0]=opcje[0].concat(str.value);
              //alert(opcje);
            
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

        </script>

 </body>
</html>