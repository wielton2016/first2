<?php
$q = ($_GET['q']);
$qu = ($_GET['qu']);
$zam = ($_GET['zam']);//nr zamównienia
$comm = ($_GET['comm']);//komentarz
$comm=str_replace("?_?","+",$comm);
$qu=str_replace("?_?","+",$qu);
	$comm=str_replace("?a?","'",$comm);
 //print_r($qu);
 include 'tabela_1.php';
//print_r($q);
 //saveorder($q,$qu,$zam);
// $user_check="g.szkop";

$col=loadorder_live($user_check,4,$zam);

showtablediff($q,$qu,$zam,$comm);

$szukana=  szuk_nad(explode('?',$q),explode('?',$qu));
   //print_r($szukana[0]);
tab_nadwozie($szukana[0],$szukana[1]);


function showtablediff($war2,$col2,$zam,$comm){
            $war=explode('?',$war2);
           $col=explode('?',$col2);
          $tg0=tlumacz_grup();
           $tg=$tg0[0];
           $cena=$tg0[1];
           $c=0;

  //print_r($comm);
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
      $zatwierdzone[$z[1]]=str_replace("?o?",", ",$z[7]);;
     // ++$n;
    }

  }
  $roz=array_diff($wer[2],$wer[3]);
  //  print_r($kwer);
   //print_r($wer[0]);
//   foreach($wer as $we){

//   }

	echo "<table class='one' style='width:100%' margin-top: 500px>";
for($k=1;$k<count($wer);$k++){
  				 echo"<tr>";
	$kk=$k+1;
 // if($zatwierdzone[$k]!=null){
	echo "<td class='two'>changes in versions ".$kk." on ".$data[$kk]." " ;

    echo "</td>";
/*} else{
 	echo "<td class='two'>changes in versions ".$kk." on ".$data[$kk]."";

   echo "</td>" ;
}     */
// 	if($k==1){ // tylko dla pierwszego wiersza wyświetla datę dla ver 1
		echo "<td class='two'>ver: ".$k." by ".$user[$k]." on ".$data[$k]."" ;
    doc_qad_show($zatwierdzone[$k],"prod");
    echo "</td>";
// 	}else{
// 	 echo "<td class='two'>ver: ".$k." by ".$user[$k]."</td>";
// 	}
		echo "<td class='two'>ver: ".$kk." by ".$user[$kk]." on ".$data[$kk]."";
       doc_qad_show($zatwierdzone[$kk],"prod");
    echo "</td>";

					 echo"</tr>";
  for($m=0;$m<count($kwer[$k]);$m++){

  if($wer[$k+1][$kwer[$k+1][$m]]<>$wer[$k][$kwer[$k+1][$m]]){
 echo"<tr>";
		echo "<td class='one'>".$kwer[$k+1][$m]."</td>";
		echo "<td class='one'>".$wer[$k][$kwer[$k+1][$m]]. "</td>";
		echo "<td class='one'>". $wer[$k+1][$kwer[$k+1][$m]]. "</td>";
 echo"</tr>";
//     print_r($wer[$k+1][$kwer[$k+1][$m]]);
// 	print_r("__________");
// 		print_r($wer[$k][$kwer[$k+1][$m]]);
 //    print_r(count($kwer[$k]));
  }

                }
	if( $opis[$k]<> $opis[$k+1]){
	 echo"<tr>";
		echo "<td class='one'>Non standard description</td>" ;
		echo "<td class='one'>". $opis[$k]. "</td>";
		echo "<td class='one'>". $opis[$k+1]. "</td>";
 echo"</tr>";
	}

}

	echo "</table><br>";

	 echo "<table class='one' style='width:100%' margin-top: 500px>"; // tabelka z zamówieniem

       echo "<td class='two'>Order No.</td>" ;

        echo "<td class='one'>". $zam. "</td>";


        for ($i=0;$i<count($war);++$i){
             echo"<tr>";
        echo "<td class='two'>" .$war[$i] . "</td>" ;
        if($war[$i]=="(real 5 wheel)"){
             $real5=$col[$i];
        }
         if($war[$i]=="QAD NR"){
             $index=$col[$i];
        }

        echo "<td class='one'>". $col[$i] . "</td>";
          $b=tlumacz4($col[$i],$cena,$war[$i]);
					echo "<td class='one'>". $b. "</td>";
					$price=$price+$b; // sumuje ceny
         $dane1=str_replace("/","",$col[$i]);
         $dane1=str_replace(":","",$dane1);
            $dane1=substr($dane1,0,202); // w przypadku bardzo długich nazw
                   // print_r( $war[$i]);
                  //  echo "<br>";
         $dane1=yes_image($dane1, $war[$i]);
         //print_r($dane1);
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
	   echo "<td class='two'>Non standard description</td>" ;
     		 echo  "<td class='one'>".$comm."</td>" ;

echo "</table><br>"; //?????????????????????????????????
//echo "<div><p align='right' style='position:fixed; right:10px; bottom:10px;'>total price:".$price."</p></div>";


	$indeksy=indeksy();
	//$in=$indeksy1[0];
	//print_r($in);
	 echo "<table class='one' style='width:80%' margin-top: 500px>";
	   echo"<tr>Information for logistic:";

	    echo"</tr>";
	 for ($i=0;$i<count($war);++$i){
	   $r=$col[$i];


	   for ($u=0;$u<count($indeksy[0]);++$u){
	   if($indeksy[0][$u]==$col[$i] && $indeksy[0][$u]!=null){

	    echo"<tr>";
	   echo "<td class='one'>" .$war[$i] . "</td>" ;
	   echo "<td class='one'>" .$col[$i] . "</td>" ;
	   echo "<td class='one'>" .$indeksy[1][$u] . "</td>" ;
	       echo"</tr>";
	   }
	   }
	 }

echo "</table><br>"; //?????????????????????????????????
// print_r($war);

 $konf=get_konfigurator();
  $prices=get_price($zam);
  
// $tabelka2=get_table2();
 //($war2,$col2,$zam,$comm)
// $licz=0;
// foreach($prices as $price){
// if ($price[1]>$licz){
// $cena=$price[13];
// }
 

 
 //}
  $cena=$prices[0][13];
  $versja=$prices[0][1];
//print_r($price);
	include('session.php');
if($user_check=="g.szkop" || $user_check=="a.ogorek" || $user_check=="m.kuzbinski" || $user_check=="a.garbiec"){
   change_konf($konf,$index,$real5);
   }else{
       show_konf($konf,$index,$real5);
   }
   if($user_check!="guest"){
   if($user_check=="g.szkop" || $user_check=="d.stanek"){
   change_price($cena,$zam,$versja,$prices);
   }else{
       show_price($cena,$zam,$versja,$prices);
   }
    }
echo  "<div id='txtHint'><b></b></div>";
}
 function show_konf($konf,$index,$rear5) {
 $jest=1;

 //	print_r($user_check);
if($jest==1){

          foreach($konf as $r){

      if($rear5==$r[1] && $index==$r[2]){    //  && $r[3]!=null
              $czy_jest_konf=$r[3];
              if($jest==1){

 echo "<table class='one' style='width:80%' margin-top: 500px>";
	   echo"<tr><td class='one'>KONFIGURATOR:   ".$czy_jest_konf."</td></tr>";

       echo "</table>";

            }
              }

          }

           if($czy_jest_konf=="" && $jest!=1){

         }

        $czy_jest_konf="";

}
}
 function change_konf($konf,$index,$rear5) {
 $jest=1;




        //for($i=0;$i<count($rear5);++$i){

       // print_r(strlen($index[$i]));



   $czy_jest_konf="" ;

          foreach($konf as $r){

      if($rear5==$r[1] && $index==$r[2] && $r[3]!=null){    //  && $r[3]!=null
              $czy_jest_konf=$r[3];
              if($jest==1){
              echo "<table id='tabela_konf1' class='one' style='width:30%' margin-top: 500px>";
              	echo   "<col width=5%>";
	echo   "<col width=5%>";
	echo   "<col width=15%>";
	echo   "<col width=5%>";
  echo "<td class='one'>rear 5th wheel</td>" ;
       echo "<td class='one'>Index</td>" ;
        echo "<td class='one'>Configurator</td>";
          echo "<td class='one'>Save</td>";
              echo"<tr>";
            echo "<td class='one'>".$rear5."</td>" ;
            echo "<td class='one'>".$index."</td>";

            echo "<td class='one' style='width:80%;' > ";
            echo "<input type='text' name='' id='".$rear5.$index."' style='width:95%' value='".$czy_jest_konf."'>";
            echo "</td>";
            echo "<td class='one'><button name='".$index."'  numer='".$rear5."' id='but_".$rear5.$index."' onclick='save_konfig_show(this)'>save</button></td>";
            echo"</tr>";
              echo "</table><br>"; //?????????????????????????????????

            }
              }else{

             //  echo "<td class='three'><input type='text' name='' id='".$rear5[$i].$index[$i]."' value=''></td>";
              }

          }
            // print_r($czy_jest_konf=="");
           if($czy_jest_konf==""){
            echo "<table id='tabela_konf1' class='one' style='width:30%' margin-top: 500px>";
              	echo   "<col width=5%>";
	echo   "<col width=5%>";
	echo   "<col width=15%>";
	echo   "<col width=5%>";
  echo "<td class='one'>rear 5th wheel</td>" ;
       echo "<td class='one'>Index</td>" ;
        echo "<td class='one'>Configurator</td>";
          echo "<td class='one'>Save</td>";
           echo"<tr>";
            echo "<td class='one'>".$rear5."</td>" ;
            echo "<td class='one'>".$index."</td>";
            echo "<td class='one' style='width:80%;'>
            <input type='text' name='' style='width:95%' id='".$rear5.$index."'  value='".$czy_jest_konf."'></td>";
            echo "<td class='one'><button name='".$index."'  id='but_".$rear5.$index."' numer='".$rear5."' onclick='save_konfig_show(this)'>save</button></td>";
            echo"</tr>";
              echo "</table><br>"; //?????????????????????????????????
         }


        $czy_jest_konf="";
      //}




 //echo  "<div id='txtHint'><b></b></div>";

}
function change_price($cena,$zam,$versja,$prices) {
 $jest=1;


 
            echo "<table id='tabela_konf1' class='one' style='width:50%' margin-top: 500px>";
 //             	echo   "<col width=5%>";
//	echo   "<col width=5%>";
//	echo   "<col width=15%>";
//	echo   "<col width=5%>";
  //echo "<td class='one'>rear 5th wheel</td>" ;
     //  echo "<td class='one'>Index</td>" ;
        echo "<td class='one'>Price:</td>";
          echo "<td class='one'>Save</td>";
           echo"<tr>";
           // echo "<td class='one'>".$rear5."</td>" ;
           // echo "<td class='one'>".$index."</td>";
            echo "<td class='one' >
            <input type='text' name=''  id='cena_zamowienia'  value='".$cena."'></td>";
            echo "<td class='one'><button name='".$versja."'  id='przycisk_zamowienia' numer='".$zam."' onclick='cena_zmiana(this)'>save for current version</button></td>";
            echo"</tr>";
             for ($u=0;$u<count($prices);++$u){
             if ($prices[$u][13]!=0){
               echo"<tr>";
            echo "<td class='one' >".$prices[$u][13]."</td>";
            echo "<td class='one' >Version:".$prices[$u][1]."</td>";
            echo"</tr>";
            }
             }
            
              echo "</table><br>"; //?????????????????????????????????

}
function show_price($cena,$zam,$versja,$prices) {
 $jest=1;


 
            echo "<table id='tabela_konf1' class='one' style='width:80%' margin-top: 500px>";
              	//echo   "<col width=5%>";
//	echo   "<col width=5%>";
//	echo   "<col width=15%>";
	//echo   "<col width=5%>";
  //echo "<td class='one'>rear 5th wheel</td>" ;
     //  echo "<td class='one'>Index</td>" ;
        echo "<tr class='one'>Price:</tr>";
          //echo "<td class='one'>Save</td>";
           //echo"<tr>";
           // echo "<td class='one'>".$rear5."</td>" ;
           // echo "<td class='one'>".$index."</td>";
            //echo "<td class='one' style='width:80%;'>";
           // echo "<td class='one' style='width:80%;'>".$cena."</td>";
           // echo "<td class='one' style='width:80%;'>Version:".$prices[$u][1]."</td>";
          //  echo"</tr>";
                     for ($u=0;$u<count($prices);++$u){
             if ($prices[$u][13]!=0){
               echo"<tr>";
            echo "<td class='one' style='width:80%;'>".$prices[$u][13]."</td>";
            echo "<td class='one' style='width:80%;'>Version:".$prices[$u][1]."</td>";
            echo"</tr>";
            }
             }
            
              echo "</table><br>"; //?????????????????????????????????

}
function show_konfigurator(){
  //$wyn=get_konfigurator();
 $tabelka2=get_table2();
 //($war2,$col2,$zam,$comm)
     //print_r($war);
    for ($u=0;$u<count($war);++$u){
    if($war[$u]=="Chassis PDM drawing"){
      $drawing=$col[$u];
    }
    if($war[$u]=="QAD NR"){
      $qad_nr=$col[$u];
    }
     if($war[$u]=="(real 5 wheel)"){
      $real5=$col[$u];
    }
    }
    //print_r($drawing);

    //print_r(count($wyn));

   for ($x=0;$x<count($wyn);++$x){

   if(strpos($wyn[$x][2],$drawing)!=false && strpos($wyn[$x][0],$real5)!=false){
     //print_r($wyn[$x]);

   } else{
   //print_r($wyn[$x][2]);
   }
   }
}





function get_decorated_diff($old, $new){
    $from_start = strspn($old ^ $new, "\0");
    $from_end = strspn(strrev($old) ^ strrev($new), "\0");

    $old_end = strlen($old) - $from_end;
    $new_end = strlen($new) - $from_end;

    $start = substr($new, 0, $from_start);
    $end = substr($new, $new_end);
    $new_diff = substr($new, $from_start, $new_end - $from_start);
    $old_diff = substr($old, $from_start, $old_end - $from_start);

  //  $new = "$start<ins style='background-color:#ccffcc'>$new_diff</ins>$end";
   // $old = "$start<del style='background-color:#ffcccc'>$old_diff</del>$end";
    return array("old"=>$old_diff, "new"=>$new_diff);
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


?>
