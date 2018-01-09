<!DOCTYPE html>  

<html>
<head>
<style>
/*@page { margin-top: 200px; margin-bottom: 0px; }*/
/*html{margin:0px 0px}*/
/*body { margin: 0px; }*/
/* table.one{
          // border-spacing: 0.5rem;
          // margin:0 0 0 500px;
         // font-size: 10px;
        }
        table.two{
           border-spacing: 0.5rem;
             background: hsl(170, 70%, 50%);
        }
        td.one {
            padding: 0.3rem;
            background: hsl(0, 0%, 92.9%);
            colory tła drugiej kolumny
          }*/
</style>
</head>
<body>
<?php
$q = ($_GET['q']);
$qu = ($_GET['qu']);
$zam = ($_GET['zam']);//nr zamównienia
$ad = ($_GET['ad']);//nr zamównienia
$comm = ($_GET['comm']);//komentarz
$user = ($_GET['user']);//komentarz
$ver = ($_GET['ver']);//komentarz
$comm=str_replace("?_?","+",$comm);
		$comm=str_replace("?a?","'",$comm);
//print_r($comm);
  //  <a href="pdfcreator.php">PDF</a> 
$qu=str_replace("?_?","+",$qu);


 include 'tabela_1.php';  
 $wynik= zmiany_mail($q,$qu,$zam,$comm);
 $szukana=  szuk_nad(explode('?',$q),explode('?',$qu));
$tab_nad=tab_nadwozie_string($szukana[0]);
 //print_r($tab_nad);
$start=$wynik[1];
$koniec=$wynik[2];
      $tab_zmian=$wynik[0];
     //print_r($wynik);

  wyslijmail($q,$qu,$zam,$ad,$comm,$ver,$user,$tab_zmian,$start,$koniec,$tab_nad);

  //print_r($tab_zmian);
//  $naz=explode('?',$q,-1); // nazwa opcji
//  $wybr=explode('?',$qu,-1); //opcje wybrane

  
//   for ($nl=0;$nl<count($naz);$nl++){
//     $tab[$nl]=array($naz[$nl],$wybr[$nl]);
//   }
// //  print_r($tab);
//  // print_r($col);
//   $pdf->SetFont('Arial','B',4);
// $pdf->AddPage();
// $pdf->BasicTable($naz,$tab);
// $pdf->Output('saved/'.$zam.'.pdf','F');
 //print_r($data);
  function wyslij_excel($list,$subject,$ver){

$file = fopen("saved/".$subject."_v".$ver.".csv","w");
foreach ($list as $line){
  fputcsv($file,explode(";",$line),";");
  }

fclose($file);
  }
  
function wyslijmail($war2,$col2,$subject,$to,$comm,$ver,$user,$tab_zmian,$start,$koniec,$tab_nad){
  //print_r($comm);
  
  
  
  $czy_pro=czy_prod($subject,$ver);
   $czy_appr=czy_app($subject,$ver);
 // print_r(str_replace(";",",",$col[$j]));
  
$war=explode('?',$war2);
$col=explode('?',$col2);
$tg=tlumacz_grup();
$tg1=$tg;
$tg=$tg1[0];
$tg_it=$tg1[2];
        //print_r($tg_it);
//$to = "wielton2016@gmail.com";
//$subject = $zam;
   $list_csv[0]="Order No (v".$ver.");".$subject ;
for ($j=0;$j<count($war);++$j){  
$list_csv[$j+1]=  $war[$j].";".str_replace(";",",",$col[$j]);

}

$comm2=str_replace("<br />","\n",$comm);
$list_csv[count($war)+1]="Non standard description;".$comm2;
    //print_r($list_csv); print_r(htmlspecialchars($poczatek))
wyslij_excel($list_csv,$subject,$ver);


   //////////////////////////////////////
$fsiz="8.5px";
  //print_r($tg);
  
  
  $indeksy=indeksy();
//print_r($indeksy);
$message_ind=' 
<h2 style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">For logistics/Indeksy magazynowe</h2>
<table class='."one".'  style="width: 100%; border-collapse: collapse;">';



	 for ($i=0;$i<count($war);++$i){
	   $r=$col[$i];
     if($war[$i]=="(real 5 wheel)"){
             $rear5=$col[$i];
        }
         if($war[$i]=="QAD NR"){
             $index=$col[$i];
        }
       

	   	
	   for ($u=0;$u<count($indeksy[0]);++$u){
	   if($indeksy[0][$u]==$col[$i] && $indeksy[0][$u]!=null){
$message_ind .='<tr><td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.$war[$i].'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$col[$i].'</td>
<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$indeksy[1][$u].'</td></tr>'; 
	   }
	   }
	 }
    $message_ind .= '</table>';
    
  $konf=get_konfigurator();
 
  foreach($konf as $r){
   //print_r($rear5==$r[1] && $index==$r[2]);
    if($rear5==$r[1] && $index==$r[2]){    //  && $r[3]!=null
      $czy_jest_konf=$r[3];
      if(1==1){
              
        $message_ind .='<table>';
        $message_ind .='<tr><td>KONFIGURATOR:   '.$czy_jest_konf.'</td></tr>';
        
        $message_ind .= '</table>';    
    
    }
      }
    
}

//print_r($message_ind);

$message = '
<html>
<head>
<title>Order '.$subject.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
@page { margin: 10px 40px 10px 40px;}
  body { font-family: DejaVu Sans, sans-serif;margin: 0px; }
</style>
</head>
<body>'; 
 $message.='<p align="right" style="position:fixed; right:0px; top:10px;font-size: '.$fsiz.';">first version:'.$start.'</p>';
$message.='<p align="right" style="position:fixed; right:0px; top:20px;font-size: '.$fsiz.';">this version:'.$koniec.'</p>'; 
if($czy_pro[0]!=null){
$message.='<p align="right" style="position:fixed; right:0px; top:30px;font-size: '.$fsiz.';">in production since:'.$czy_pro[0].'</p>';
}
if($czy_jest_konf!=null){
$message.='<p align="right" style="position:fixed; right:0px; top:40px;font-size: '.$fsiz.';">CONFIGURATOR:'.$czy_jest_konf.'</p>';
}



//if($czy_appr!=null){
//if(strpos($czy_appr, 'g.szkop') !== false){
//$message.='<p align="right" style="position:fixed; right:0px; top:50px;font-size: '.$fsiz.';">Documentation ready</p>'; 
//}else{
//$message.='<p align="right" style="position:fixed; right:0px; top:50px;font-size: '.$fsiz.';">Documentation is not ready or waiting to be verified</p>'; 
//}
//if(strpos($czy_appr, 'a.garbiec') !== false || strpos($czy_appr, 'm.kuzbinski') !== false){
//$message.='<p align="right" style="position:fixed; right:0px; top:60px;font-size: '.$fsiz.';">Configurator is ready</p>'; 
//}else{
//$message.='<p align="right" style="position:fixed; right:0px; top:60px;font-size: '.$fsiz.';">Configurator is not ready or waiting to be verified</p>'; 
//}
//}



$message .= '<table class='."one".' style="width: 100%; border-collapse: collapse;" >
<tr>
<td   style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">Order No (v'.$ver.')</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$subject.'</td>
</tr>';

// <td bgcolor=#e8f8f0  width="150" style="font-size: '.$fsiz.';">Order No (v'.$ver.')</td>
// <td bgcolor=#f0f0ef width="350" style="font-size: '.$fsiz.';">'.$subject.'</td>
$akapit1=0;
$count_war=count($war)-10;
//print_r($count_war);
for ($n=0;$n<count($war);$n++){
  
  if ($war[$n]=='axle producer'){
  $akapit1=$n;
  $message .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;" >';
  }
    if ($war[$n]=='QAD NR' && $akapit1==0){
  $akapit1=$n;
  $message .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;" >';
  }
   
   if ($n==(round(($count_war/2)+10))){
  $akapit2=$n;
//   $message .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;margin-left:100px;" >';
  }
 // print_r($akapit2);
  // print_r("<br>");
    //print_r($akapit2);
  if(!($war[$n]=="ride height" || $war[$n]=="min unloaded height" || $war[$n]=="Mass of welded chassis (W2) [kg]")){ // nie pokazuj tych wierszy
  if ($akapit1==0){ // od full mudguards nie pokazuje
$message .= '
<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.$war[$n].'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$col[$n].'</td>
</tr>';
}
}
}
	
$dod=0;
$lim=$n1+3;
  $message .= '<table class='."one".' style="width: 100%; border-collapse: collapse;" >';
for ($n1=$akapit1;$n1<$akapit2;$n1++){// od full mudguards podwujna tabelka

  $message .= '
<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.$war[$akapit1+$dod].'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$col[$akapit1+$dod].'</td>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;border-left: 5px solid #ddd;">'.$war[$akapit2+$dod].'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$col[$akapit2+$dod].'</td>
</tr>';
 $dod++; 
}

	for ($ne=0;$ne<9;$ne++){
		if(isset($war[$akapit2+$dod+$ne])){

		  $message .= '
			<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;"></td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;"></td>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;border-left: 5px solid #ddd;">'.$war[$akapit2+$dod+$ne].'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$col[$akapit2+$dod+$ne].'</td>
</tr>';
	}
	}
	
  $message .= '</table>';
  $message .= '<table class='."one".' style="width: 100%; border-collapse: collapse;" >'; 
 $message .= ' <tr>
<td   style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">Non standard description</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$comm.'</td>
</tr>';
$message .= '</table>';

 $message .= $tab_nad;
 $message.=$message_ind;
$message .='</body>
</html>';
//print_r($message);
//////pl

       


  $messagePL = '
<html>
<head>
<title>Zamówienie '.$subject.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
@page { margin: 10px 40px 10px 40px;}
  body { font-family: DejaVu Sans, sans-serif;margin: 0px; }
</style>
</head>
<body>';
// $messagePL .= '<p></p>
// <table class='."one".' width="500">
// <col width="100">
// <col width="350">
// <tr>
// <th></th>
// <th></th>
// </tr>
// <tr>
// <td bgcolor=#e8f8f0  width="150">Order No</td>
// <td bgcolor=#f0f0ef width="350">'.$subject.'</td>
// </tr>';
// for ($n=0;$n<count($war);$n++){
// $messagePL .= '
// <tr>
// <td bgcolor=#e8f8f0  width="150">'.$war[$n].'</td>
// <td bgcolor=#f0f0ef width="350">'.$col[$n].'</td>
// </tr>';
// }
// $messagePL .= '</table><br>';
$messagePL.='<p align="right" style="position:fixed; right:0px; top:10px;font-size: '.$fsiz.';">pierwsza wersja:'.$start.'</p>';
$messagePL.='<p align="right" style="position:fixed; right:0px; top:20px;font-size: '.$fsiz.';">ta wersja:'.$koniec.'</p>';
if($czy_pro[0]!=null){
$messagePL.='<p align="right" style="position:fixed; right:0px; top:30px;font-size: '.$fsiz.';">w produkcji:'.$czy_pro[0].'</p>';
}
if($czy_jest_konf!=null){
$messagePL.='<p align="right" style="position:fixed; right:0px; top:40px;font-size: '.$fsiz.';">KONFIGURATOR:'.$czy_jest_konf.'</p>';
}

//if($czy_appr!=null){
//if(strpos($czy_appr, 'g.szkop') !== false){
//$messagePL.='<p align="right" style="position:fixed; right:0px; top:50px;font-size: '.$fsiz.';">Dokumentacja gotowa</p>'; 
//}else{
//$messagePL.='<p align="right" style="position:fixed; right:0px; top:50px;font-size: '.$fsiz.';">Dokumentacja nie gotowa lub nie zweryfikowana</p>'; 
//}
//if(strpos($czy_appr, 'a.garbiec') !== false || strpos($czy_appr, 'm.kuzbinski') !== false){
//$messagePL.='<p align="right" style="position:fixed; right:0px; top:60px;font-size: '.$fsiz.';">Konfigurator gotowy</p>'; 
//}else{
//$messagePL.='<p align="right" style="position:fixed; right:0px; top:60px;font-size: '.$fsiz.';">Konfigurator nie gotowy lub nie zweryfikowany</p>'; 
//}
//}





$messagePL .= '<p></p>
<table class='."one".'  style="width: 100%; border-collapse: collapse;">
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">Nr zlecenia  (v'.$ver.')</td>
<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$subject.'</td>
</tr>';

$akapit1=0;
for ($n=0;$n<count($war);$n++){
  
  if ($war[$n]=='axle producer'){
  $akapit1=$n;
  $messagePL .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;" >';
  }
      if ($war[$n]=='QAD NR' && $akapit1==0){
  $akapit1=$n;
  $messagePL .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;" >';
  }
   if ($n==(round(($count_war/2)+10))){
  $akapit2=$n;
//   $message .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;margin-left:100px;" >';
  }
  if(!($war[$n]=="ride height" || $war[$n]=="min unloaded height" || $war[$n]=="Mass of welded chassis (W2) [kg]")){ // nie pokazuj tych wierszy
  if ($akapit1==0){ // od full mudguards nie pokazuje
$messagePL .= '
<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.tlumacz3($war[$n],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumacz3($col[$n],$tg).'</td>
</tr>';
}
}
}
$dod=0;
$lim=$n1+3;
  $messagePL .= '<table class='."one".' style="width: 100%; border-collapse: collapse;" >';
for ($n1=$akapit1;$n1<$akapit2;$n1++){// od full mudguards podwujna tabelka

  $messagePL .= '
<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.tlumacz3($war[$akapit1+$dod],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumacz3($col[$akapit1+$dod],$tg).'</td>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;border-left: 5px solid #ddd;">'.tlumacz3($war[$akapit2+$dod],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumacz3($col[$akapit2+$dod],$tg).'</td>
</tr>';
 $dod++; 
}

	for ($ne=0;$ne<9;$ne++){
		if(isset($war[$akapit2+$dod+$ne])){

		  $messagePL .= '
			<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;"></td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;"></td>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;border-left: 5px solid #ddd;">'.tlumacz3($war[$akapit2+$dod+$ne],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumacz3($col[$akapit2+$dod+$ne],$tg).'</td>
</tr>';
	}
	}
















//
//
//for ($n=0;$n<count($war);$n++){
//$messagePL .= '
//<tr>
//<td style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.tlumacz3($war[$n],$tg).'</td>
//<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumacz3($col[$n],$tg).'</td>
//</tr>';
//}






  $messagePL .= '</table>';
  $messagePL .= '<table class='."one".' style="width: 100%; border-collapse: collapse;" >'; 
   $messagePL .= ' <tr>
<td style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">Opis niestandardu</td>
<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumacz3($comm,$tg).'</td>
</tr>';
$messagePL .= '</table>';
  $messagePL .= $tab_nad;
$messagePL.=$message_ind;

$messagePL .='</body>
</html>';
  $mes_user='<p>sent by: '.$user.'</p>';
if($czy_pro<>0){
$mes_user.='<div style="font-size:30px;color:#cf2d10;">in production since: '.$czy_pro[0].', by: '.$czy_pro[1].'</div>';
  
};
 
$messagePL2=str_replace("body { font-family: DejaVu Sans, sans-serif; }","",$messagePL);//font-family:"Calibri",sans-serif;
$messagePL2=str_replace("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>","<meta http-equiv='content-type' content='text/html; charset=windows-1250'/>",$messagePL2);
//print_r($messagePL2);
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <IRorders@wielton.com.pl>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

// mail($to,$subject,$message,$headers);

//////////////////////////////////////
$messageIT=message_IT($fsiz,$start,$koniec,$czy_pro,$czy_jest_konf,$ver,$subject,$war,$col,$tg_it,$user,$message_ind,$count_war,$comm);
 //print_r($messageIT);
  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
require_once("dompdf/dompdf_config.inc.php"); // tworzymy pdf z HTMLu
//$html = <<<'ENDHTML'
// <html>
// <body>
//   <h1>Hello Dompdf</h1>
// </body>
// </html>
// ENDHTML;
//generate some PDFs!
//print_r($message);
//print_r($messagePL);
 $subject=str_replace("/","__",$subject);
$dompdf = new Dompdf();  //if you use namespaces you may use new \DOMPDF()

$dompdf->load_html($message);
$dompdf->render();
$output = $dompdf->output();
file_put_contents('saved/'.$subject.'_v'.$ver.'.pdf', $output);
  
 $dompdf = new Dompdf();  //if you use namespaces you may use new \DOMPDF()
$dompdf->load_html($messagePL);
$dompdf->render();
//$dompdf->stream('df', array("Attachment" => false));
$output = $dompdf->output();
//$dompdf->stream("pdf_filename_".rand(10,1000).".pdf", array("Attachment" => 1));
//exit(0);
file_put_contents('saved/'.$subject.'_v'.$ver.'_PL.pdf', $output);


 $dompdf = new Dompdf();  //if you use namespaces you may use new \DOMPDF()

$dompdf->load_html($messageIT);
$dompdf->render();
$output = $dompdf->output();
file_put_contents('saved/'.$subject.'_v'.$ver.'_IT.pdf', $output);


// while (@ob_end_clean());
//header("Content-type:application/pdf");
  // readfile("saved/'.$subject.'_v'.$ver.'.pdf");
 //ob_clean();
//flush();
 if ($_SERVER['HTTP_HOST']=="wielon.c0.pl") {
$adres='http://wielon.c0.pl';
}else{
$adres='http://wieltonir.c0.pl';

}

        // $filename ="http://wielon.c0.pl/saved/".$subject."_v".$ver.".pdf";
        // echo "<a href='".$filename."' class='rys' target='_blank'>Download</a><br>";
       $file=$subject."_v".$ver.".pdf";
$do_druku="<!DOCTYPE html>
<?php
   \$filename ='".$adres."/saved/".$subject."_v".$ver.".pdf';
   header('Content-Type: application/pdf');
   header('Content-Disposition: inline; filename=\"$file\"' );
   header('Content-Transfer-Encoding: binary');  
   readfile(\$filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>";//<?php
           // console.log($do_druku);
               $file1=$subject."_v".$ver."_PL.pdf";
 $do_drukuPL="<!DOCTYPE html>
<?php
   \$filename_PL ='".$adres."/saved/".$subject."_v".$ver."_PL.pdf';
   header('Content-Disposition: attachment; filename=\"$file1\"' );
   header('Content-Type: application/pdf');
 readfile(\$filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>";//<?php

         file_put_contents("to_download/".$subject."_v".$ver.".php", $do_druku);
          file_put_contents("to_download/".$subject."_v".$ver."_PL.php", $do_drukuPL);
         
 
}

function zmiany_mail($war2,$col2,$zam,$comm){
            $war=explode('?',$war2);
           $col=explode('?',$col2);
          
//   print_r($war);
    $po=poka_edit($col,$war);
       
  
  $zlecenia=orders();

  //$n=0;
  foreach($zlecenia as $z){
    if($z[0]==$zam){
      $porow[$z[1]]=$z;
      $wer[$z[1]]=rozbij($z[2],$z[3]);
      $kwer[$z[1]]=array_keys($wer[$z[1]]);  // nazwa opcji
			$opis[$z[1]]=$z[4];
			$data[$z[1]]=$z[5];
			$user[$z[1]]=$z[6];
      $prod[$z[1]]=$z[10];
     // ++$n;
    }
    
  }
  $roz=array_diff($wer[2],$wer[3]);
  //  print_r($kwer);
   //print_r($wer[0]);
//   foreach($wer as $we){
    
//   }f0f0ef

$tab_zmian="<table  style='width:100%' margin-top: 500px>";
$tab_zmian.='<col width="30%">
<col width="40%">
<col width="40%">';
$start=$data[1] ;

for($k=1;$k<count($wer);$k++){
  			$tab_zmian.="<tr>";
	$kk=$k+1;

$tab_zmian.= "<td bgcolor=#e8f8f0>changes in versions ".$kk." on ".$data[$kk]."</td>" ;
//	if($k==1){ // tylko dla pierwszego wiersza wyświetla datę dla ver 1
	$tab_zmian.="<td bgcolor=#e8f8f0>ver: ".$k." by ".$user[$k]." on ".$data[$k]."</td>";
// 	}else{
// 	 	$tab_zmian.="<td bgcolor=#e8f8f0>ver: ".$k." by ".$user[$k]."</td>"; 
// 	}
		$tab_zmian.="<td bgcolor=#e8f8f0>ver: ".$kk." by ".$user[$kk]." on ".$data[$kk]."</td>";
		
					$tab_zmian.="</tr>";
  for($m=0;$m<count($kwer[$k]);$m++){

  if($wer[$k+1][$kwer[$k+1][$m]]<>$wer[$k][$kwer[$k+1][$m]]){
 	$tab_zmian.="<tr>";
			$tab_zmian.= "<td bgcolor=#f0f0ef>".$kwer[$k+1][$m]."</td>";
		$tab_zmian.= "<td bgcolor=#f0f0ef>".$wer[$k][$kwer[$k+1][$m]]. "</td>"; 
		$tab_zmian.= "<td bgcolor=#f0f0ef>". $wer[$k+1][$kwer[$k+1][$m]]. "</td>"; 
	$tab_zmian.="</tr>";
//     print_r($wer[$k+1][$kwer[$k+1][$m]]);
// 	print_r("__________");
// 		print_r($wer[$k][$kwer[$k+1][$m]]);
 //    print_r(count($kwer[$k]));
  }
		
                }
	if( $opis[$k]<> $opis[$k+1]){
	 	$tab_zmian.="<tr>";
			$tab_zmian.= "<td bgcolor=#f0f0ef>Non standard description</td>" ;
		$tab_zmian.= "<td bgcolor=#f0f0ef>". $opis[$k]. "</td>"; 
			$tab_zmian.= "<td bgcolor=#f0f0ef>". $opis[$k+1]. "</td>"; 
	$tab_zmian.="</tr>";
	}

}
$koniec=$data[$k];
		$tab_zmian.= "</table><br>";
		 $wynik[0]= $tab_zmian;
        $wynik[1]= $start;
         $wynik[2]= $koniec;
         $wynik[3]= $prod;
		return $wynik;
}
function rozbij($col,$war){
     $war=explode('?',$war);
     $col=explode('?',$col);
    $n=0;
    foreach($col as $r){
      $ret[$r]=$war[$n];
      ++$n;
    }
   // print_r($ret);
    return $ret;
  }
  
function diff($col1){ // wybiera tylko najnowsze wersjie zapisanych zleceń
	
	foreach($col1 as $r){
		if(isset($zl[$r[0]])){
			if($r[1]>$zl[$r[0]]){
			$zl[$r[0]]=$r[1];
			$col[$r[0]]=$r;
			}
		}else{
			$zl[$r[0]]=$r[1];
			$col[$r[0]]=$r;
		}
	}
	$n=0;
	foreach($col as $c){
		$colu[$n]=$c;
		++$n;
	}
// 			print_r($col);
	return $colu;
}
function orders(){
           // wczytuje tabelke z zapisanymi zleceniami i wywietla tabelkę z nimi i opcjami
	
            $servername = "mysql.cba.pl";
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
            $zapisz="zapisane";
            $tab="TABLE2";

            // Create connection
             $link = mysqli_connect($servername, $username, $password,$dbname);
             if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }  
            $db_selected=mysqli_select_db($link,$dbname);
            if (!$db_selected) {
                die ('Nie mo�na ustawi� databasy : ' . mysql_error());
            }
         $query="SELECT * FROM zapisane";// WHERE `COL 5` LIKE '1'";
//            $sql = "INSERT INTO zapisane (`Order No`, `nazwy opcji`, `wybrane opcje`, uwagi)"; 

            $result = mysqli_query($link,$query);
            // print_r($result);
$x=0;

        while($row1= mysqli_fetch_array($result)){   //Creates a loop to loop through results
for($y=0;$y<count($row1);$y++){
    if(isset($row1[$y])){
        $col1[$x][$y]=$row1[$y];
    }
}
        $x=$x+1;
        
        }
   // print_r($col1);
return $col1;
}


function czy_prod($zam,$ver){
 	$zlecenia=loadorder0();//tabelka zapisanych zleceń
	$wersja=1; // iloć zapisanych wersji
	foreach($zlecenia as $r){//dla każdego zlecenia
		if($r[0]==$zam){		//jesi nr zlecenia już istnieje
			$wersja=$wersja+1; //liczy istniejące wersje i dodaje jeden
				if ($r[10]<>0){
		  $kiedy_prod[0]=$r[10];
		  $kiedy_prod[1]=$r[11];
      $kiedy_prod[2]=$r[7]; // approved by
		 // print_r($kiedy_prod);
		  return $kiedy_prod;
		}
		}
	
	//print_r($r[0]);
	}
	
	
}
function czy_app($zam,$ver){
 	$zlecenia=loadorder0();//tabelka zapisanych zleceń
	$wersja=1; // iloć zapisanych wersji
  
	foreach($zlecenia as $r){//dla każdego zlecenia
  //print_r($r[1]==$ver);
		if($r[0]==$zam && $r[1]==$ver){		//jesi nr zlecenia już istnieje
			$wersja=$wersja+1; //liczy istniejące wersje i dodaje jeden
			//	if ($r[7]<>0){
		 // $kiedy_prod[0]=$r[10];
		  //$kiedy_prod[1]=$r[11];
      $appro=$r[7]; // approved by
      $appro=str_replace("?o?",", ",$appro);
		  //print_r($r[7]);

		  return $appro;
		//}
		}
	
	//print_r($r[0]);
	}
	
	
}


function message_IT($fsiz,$start,$koniec,$czy_pro,$czy_jest_konf,$ver,$subject,$war,$col,$tg,$user,$message_ind,$count_war,$comm){

 $messagePL = '
<html>
<head>
<title>Zamówienie '.$subject.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
@page { margin: 10px 40px 10px 40px;}
  body { font-family: DejaVu Sans, sans-serif;margin: 0px; }
</style>
</head>
<body>';

$messagePL.='<p align="right" style="position:fixed; right:0px; top:10px;font-size: '.$fsiz.';">pierwsza wersja:'.$start.'</p>';
$messagePL.='<p align="right" style="position:fixed; right:0px; top:20px;font-size: '.$fsiz.';">ta wersja:'.$koniec.'</p>';
if($czy_pro[0]!=null){
$messagePL.='<p align="right" style="position:fixed; right:0px; top:30px;font-size: '.$fsiz.';">w produkcji:'.$czy_pro[0].'</p>';
}
if($czy_jest_konf!=null){
$messagePL.='<p align="right" style="position:fixed; right:0px; top:40px;font-size: '.$fsiz.';">KONFIGURATOR:'.$czy_jest_konf.'</p>';
}







$messagePL .= '<p></p>
<table class='."one".'  style="width: 100%; border-collapse: collapse;">
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">Nr zlecenia  (v'.$ver.')</td>
<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.$subject.'</td>
</tr>';

$akapit1=0;
for ($n=0;$n<count($war);$n++){
  
  if ($war[$n]=='axle producer'){
  $akapit1=$n;
  $messagePL .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;" >';
  }
      if ($war[$n]=='QAD NR' && $akapit1==0){
  $akapit1=$n;
  $messagePL .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;" >';
  }
   if ($n==(round(($count_war/2)+10))){
  $akapit2=$n;
//   $message .= '</table>';
//  $message .= '<table class='."one".' style="width: 30%; border-collapse: collapse;margin-left:100px;" >';
  }
  if(!($war[$n]=="ride height" || $war[$n]=="min unloaded height" || $war[$n]=="Mass of welded chassis (W2) [kg]")){ // nie pokazuj tych wierszy
  if ($akapit1==0){ // od full mudguards nie pokazuje
$messagePL .= '
<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.tlumaczIT($war[$n],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumaczIT($col[$n],$tg).'</td>
</tr>';
}
}
}
$dod=0;
$lim=$n1+3;
  $messagePL .= '<table class='."one".' style="width: 100%; border-collapse: collapse;" >';
for ($n1=$akapit1;$n1<$akapit2;$n1++){// od full mudguards podwujna tabelka

  $messagePL .= '
<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">'.tlumaczIT($war[$akapit1+$dod],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumaczIT($col[$akapit1+$dod],$tg).'</td>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;border-left: 5px solid #ddd;">'.tlumaczIT($war[$akapit2+$dod],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumaczIT($col[$akapit2+$dod],$tg).'</td>
</tr>';
 $dod++; 
}

	for ($ne=0;$ne<9;$ne++){
		if(isset($war[$akapit2+$dod+$ne])){

		  $messagePL .= '
			<tr>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;"></td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;"></td>
<td  style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;border-left: 5px solid #ddd;">'.tlumaczIT($war[$akapit2+$dod+$ne],$tg).'</td>
<td  style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumaczIT($col[$akapit2+$dod+$ne],$tg).'</td>
</tr>';
	}
	}




  $messagePL .= '</table>';
  $messagePL .= '<table class='."one".' style="width: 100%; border-collapse: collapse;" >'; 
   $messagePL .= ' <tr>
<td style="width:20%; font-size: '.$fsiz.'; border-bottom: 1px solid #ddd;">Descrizione non standard</td>';  

 // if ($tg[$comm]!=null){
  //   $messagePL .= '<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumaczIT($comm).'</td>';
  //  } else{
 //     $messagePL .= '<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;"></td>';
 //   }
    
 $messagePL .= '<td style="font-size: '.$fsiz.'; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;">'.tlumaczIT($comm,$tg).'</td>';
 $messagePL .= '</tr>';
$messagePL .= '</table>';
  $messagePL .= $tab_nad;
//$messagePL.=$message_ind;

$messagePL .='</body>
</html>';
  $mes_user='<p>sent by: '.$user.'</p>';
if($czy_pro<>0){
$mes_user.='<div style="font-size:30px;color:#cf2d10;">in production since: '.$czy_pro[0].', by: '.$czy_pro[1].'</div>';
  
};
 return $messagePL;
}
?>
</body>
</html>
