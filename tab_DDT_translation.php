<?php
//narazie nieuzywane
$ver = ($_GET['ver']);
$q = ($_GET['q']);
$qu = ($_GET['qu']);
$zam = ($_GET['zam']);//nr zamównienia
  $comm = ($_GET['comm']);//komentarz
$comm=str_replace("?_?","+",$comm);
$qu=str_replace("?_?","+",$qu);
	 	$comm=str_replace("'","&#039;",$comm);
    $comm=str_replace("?a?","&#039;",$comm);
   //$comm=str_replace("&#039;","'",$comm);
 include 'tabela_1.php';
           $q=explode("?",$q);
                  $qu=explode("?",$qu);
      //print_r($q);
      for ($k = 7; $k < count($q); ++$k) {     
             $tresc_zam=$tresc_zam.tlumaczIT($q[$k])."  -  ".tlumaczIT($qu[$k])."<br>";
         }
         $tresc_zam=$tresc_zam."Descrizione non standard  :  ";
         $tresc_zam=$tresc_zam.tlumaczIT($comm);
         $tresc_zam=$tresc_zam."<br><br>NR.TELAIO  :  ";
         $tresc_zam=$tresc_zam.tlumaczIT($qu[3]);
 
 
$ddt="<div id='tabela_DDT' name='".$zam."'><table id='tab_ddt'  style='width:80%;table-layout:fixed;border-collapse: collapse;'><tr style='height:35px;'>
       <td class='tab_ddt_1' style='border: solid 1px black;'>DOCUMENTO DI TRANSPORTO(D.D.T.)
      <div style='font-size:8px'>(D.P.R 14 Augusto 1996 n.472)</div></td><td class='tab_ddt' style='border: solid 1px black;'>LUGO DI PROVENZIA<div>Stab.</div></td>
       <td class='tab_ddt' style='border: solid 1px black;'>N.</td><td class='tab_ddt_data' style='border: solid 1px black;'>DATA
       <p><input type='text' id='datepicker1' style='font-size:20px;border: none;width:90%;' value='".date("d.m.Y")."'></p>
      </td></tr></table>
      <br><table class='table1' style='width:100%;border-collapse: collapse;'><tr style='height:100px;'>
      <td style='border: solid 1px black;' class='tab_ddt'>CESSIONARIO - DOMICILIO O REZIDENZA</td>
      <td style='border: solid 1px black;' class='tab_ddt'>LUOGO DI DESTINAZIONE</td></tr></table><br>
      <table id='tab_ddt' class='table1' style='width:100%;border-collapse: collapse;'><tr style='height:60px;'>
      <td style='border: solid 1px black;' class='tab_ddt'>PAG.
      </td>
      <td style='border: solid 1px black;' class='tab_ddt'>TRANSPORTO A CURA</td>
       <td style='border: solid 1px black;' class='tab_ddt'>PORTO</td>
       </tr></table><br>";
$ddt2= "<table id='tab_ddt' class='table1' style='width:100%;table-layout:fixed;border-collapse: collapse;'><tr style='height:35px;'>
       <col width=5%>
       <col width=40%>
       <col width=40%>
       <col width=8%>
      <col width=8%>
       <col width=8%>
       <col width=8%>
       <td style='border: solid 1px black;width:5%;' class='tab_ddt_data'>RIGA</td>
       <td style='border: solid 1px black;' class='tab_ddt_data' colspan='4'>DESCRIZIONE DEI BENI (NATURA E QUALITA)</td>
       <td style='border: solid 1px black;width:8%;' class='tab_ddt_data'>U.M.</td>
       <td style='border: solid 1px black;width:8%;' class='tab_ddt_data' style='font-size:10px;word-break:break-all;'>QUANTITA</td>
       </tr>
       <tr style='height:200px;'>
       <td class='tab_ddt' style='border: solid 1px black;'></td>
       <td class='tab_zam' style='border: solid 1px black;'colspan='4'>".$tresc_zam."</td>
       <td class='tab_ddt' style='border: solid 1px black;' ></td>
       <td class='tab_ddt' style='border: solid 1px black;' ></td>
       </tr>
       <tr style='height:60px;'>
       <td style='border: solid 1px black;' class='tab_ddt' colspan='2'>ASPETTO ESTERIORE DEI BENI</td>
       <td style='border: solid 1px black;' class='tab_ddt'>CASUALE TRANSPORTO</td>
       <td style='border: solid 1px black;'  class='tab_ddt' colspan='2'>TOTALE COLLI</td>
       <td style='border: solid 1px black;' class='tab_ddt' colspan='2'>TOTALE PESO KG.</td>
       </tr>
       </tr>
       <tr style='height:60px;'>
       <td style='border: solid 1px black;' class='tab_ddt' colspan='2' rowspan='2'>VETTORI - INCARICATO DEL TRANSPORTO</td>
       <td style='border: solid 1px black;' class='tab_ddt'>DATA E ORA RITIRO</td>
       <td style='border: solid 1px black;' class='tab_ddt' colspan='4'>FIRMA INCARICATO DEL TRANSPORTO</td>
       </tr>
       </tr>
       <tr style='height:60px;'>
       <td style='border: solid 1px black;' class='tab_ddt'>DATE E ORA RITIRO</td>
       <td style='border: solid 1px black;' class='tab_ddt' colspan='4'>FIRMA INCARICATO DEL TRANSPORTO</td>
       </tr>
       <tr style='height:60px;'>
       <td style='border: solid 1px black;' class='tab_ddt' colspan='3'>ANNOTAZIONI<div>Tel. per preavv.:</div></td>
       <td style='border: solid 1px black;'  class='tab_ddt' colspan='4'>FIRMA DEL DESTINATARI</td>
       </tr>
       </table></div>";
                  $button='<button class="but" id="send_email" onclick="rer(this)">Save</button>';
       print_r($ddt.$ddt2.$button);
   // echo "<span id='naglowki'>".$ddt."</span>";    
?>