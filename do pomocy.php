// formulaż 1 start
           $price=0;
             $tg0=tlumacz_grup();
           $tg=$tg0[0];
           $cena=$tg0[1];
           //print_r($cena);
           $war=explode('?',$war2,-1);
           $col=explode('?',$col2,-1);
           
            $servername = "mysql.cba.pl";
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
            $tab="TABLE2";
            $tabop="opcje";
            $tabrys="rysunki";
            
          ?>
       
          <?php
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
        
           
            
            
           // $query = "SELECT * FROM $tab WHERE `$col` LIKE '$war'"; //You don't need a ; like you do in SQL
             $query = "SELECT * FROM $tab WHERE";
            // $queryop1 = "SELECT * FROM '$tabop' WHERE 'COL 1' LIKE 'tank_rear'";
             $queryop1="SELECT `COL 1` FROM `opcje`";
            $resultop1 = mysqli_query($link,$queryop1); 
//            $queryrys="SELECT `COL 1`,`COL 7`,`COL 9` FROM `rysunki` WHERE `COL 5` LIKE '1'";
//            $resultrys=mysqli_query($link,$queryrys); 
            //$lrys=0;    
//            while($rowrys= mysqli_fetch_array($resultrys)){   //Creates a loop to loop through results
//            //echo "<td class='two'>" . $row1[0] . "</td>" ;  //$row['index'] the index here is a field name
//            $rys[$rowrys[0]]=$rowrys[2];
//             //$lrys=$lrys+1;
//            }
           // print_r($rys);
            $lop1=0;    
            while($rowop1= mysqli_fetch_array($resultop1)){   //Creates a loop to loop through results
            //echo "<td class='two'>" . $row1[0] . "</td>" ;  //$row['index'] the index here is a field name
            $opcje[$lop1]=$rowop1[0];
            $lop1=$lop1+1;
            }
           // print_r($col);
            
             $op1="tank_rear";
             $queryop = "SELECT * FROM `opcje` WHERE `COL 1` LIKE '$op1'";
             $queryopall = "SELECT * FROM `opcje`";
             $resultopall = mysqli_query($link,$queryopall); 

            $lopall=0;    
            while($rowop1= mysqli_fetch_array($resultopall)){   //Creates a loop to loop through results
            //echo "<td class='two'>" . $row1[0] . "</td>" ;  //$row['index'] the index here is a field name
            $opcjeall[$rowop1[0]]=notnull($rowop1);
            $lopall=$lopall+1;
            }
   
           $li=0;
            for ($l=0;$l<count($war);++$l){

                if ($col[$l]!=="0"){
                   // print_r($war[$l]);
                    if($li==0){
                    $query="$query `$col[$l]` LIKE '$war[$l]'";    
                    }
                    else{
                    $query="$query AND`$col[$l]` LIKE '$war[$l]'";
                    }
                $li=$li+1;
                    }

            }
            
            

           // print_r($query);
            $result = mysqli_query($link,$query); 
            $resultop = mysqli_query($link,$queryop); 
       
            
        if (!$result) { // add this check.
            die('Invalid quer2y: ' . mysql_error());
        }
        if (!$resultop) { // add this check.
            die('Invalid quer2y for options: ' . mysql_error());
        }
        //print_r($resultop1);
        
        $kolumny="SHOW COLUMNS FROM $tab";
        
         $result_kol = mysqli_query($link,$kolumny);   
        if (!$result_kol) { // add this check.
            die('Invalid query: ' . mysql_error());
        }
        //////////////////////

         while($rowop= mysqli_fetch_array($resultop,MYSQLI_NUM)){   //Creates a loop to loop through results

            $opc=notnull($rowop);
 //print_r($opc);
        }
        
        
       // echo"<tr>";
        $x=0;
        $x2=0;
        while($row1= mysqli_fetch_array($result_kol)){   //Creates a loop to loop through results
        //echo "<td class='two'>" . $row1[0] . "</td>" ;  //$row['index'] the index here is a field name
        $GLOBALS['tytuly'][$x]=$row1[0];
        $tytul[$x]=$row1[0];
        $x=$x+1;
        }
        
  
        
        
        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
            $dane=$row; 
        }

     // print_r($tytul);
        //tabelkaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
        echo "<table class='one' id='tabelka_start' style='width:100%' margin-top: 500px>"; // start a table tag in the HTML 
         // echo "<div>";
   include('client.php'); //tabelka z informacjami o kliencie z zamówieniu
  // print_r($c_d);
  //echo "</div>";
  
  
          $tabend=nie0opcje($opcje,$tytul,$dane);
   $colory=0;
        //  print_r($opcjeall);
         $tytul=$tabend[2];
         $dane=$tabend[0];
         $czy_opcja=$tabend[1];
         
         for($i=0;$i<count($tytul);++$i){
             if($tytul[$i]=="Frame"){
							 $colory=1;
							 
						 }
            echo"<tr>";
                   //echo"<tr>";
					 if($colory==0){
            echo "<td class='two'>" . $tytul[$i] . "</td>" ;
					 }else{
						 echo "<td class='four'>" . $tytul[$i] . "</td>" ;
					 }
            if (isset($czy_opcja[$i])){
            echo "<td class='one'>";
            echo "<div class='dropdown'>";
							if($colory==0){ // dla kolorów pokazuje domylne wartoci
            echo "<button class='dropbtn' id='".$tytul[$i]."'>Choose</button>";
							}else{
            echo "<button class='dropbtn' id='".$tytul[$i]."'>".$opcjeall[$dane[$i]][1]."</button>";
							}
            echo "<div  class='dropdown-content'>";
           // print_r($rys[$opcjeall[$dane[$i]][$p]]);
               for($p=1;$p<count($opcjeall[$dane[$i]]);++$p){
                   echo "<a  id='".$opcjeall[$dane[$i]][$p]."' name='".$tytul[$i]."'  onclick='chooser(this)'>".$opcjeall[$dane[$i]][$p]."</a>";  
                  }
                  echo "<td class='cena' id='c_".$tytul[$i]."'>". tlumacz5($dane[$i],$cena,$tytul[$i]) . "</td>";// ceny
                       echo "</div></td><td class='white' id='pic".$tytul[$i]."' alt='No picture' ></td>";
       
            }else{
            echo "<td class='one' id='".$tytul[$i]."'>". $dane[$i] . "</td>";
                $b=tlumacz5($dane[$i],$cena,$tytul[$i]);
                //echo "<td class='four'>". $b. "</td>";
                $price=$price+$b; // sumuje ceny
            echo "<td class='cena' id='c_".$tytul[$i]."' width='20'>". $b. "</td>";// ceny
//            if (isset($rys[$dane[$i]])){
            $dane1=str_replace("/","",$dane[$i]);
            //print_r(count($dane[$i]));
            //$dane1=substr($dane[$i],0,202);
           // print_r($dane1);
            //echo "<br>";
            if(file_exists("images/".$dane1.".png")){
             echo "<td class='white'><a href='images/".$dane1.".png' class='rys' target='_blank'><img src='images/".$dane1.".png' class='resize' alt='' ></a></td>";
            }
//             }
            }
            
               echo"</tr>";
               // cena w nowym formulażu
           
        }
          echo "<td class='two'>Non standard description</td>" ;
     		 echo "<td class='one'><textarea name='comment' id='comment' style='width:90%;height:150px;'></textarea></td>" ;
        echo "</table><br>"; //Close the table in HTML 
        echo "<div><p align='right' style='position:fixed; right:50px; bottom:10px;'>total price:</p>";
       echo "<p id='total_cena' align='right' style='position:fixed; right:10px; bottom:10px;'>".$price."</p></div>";

       // print_r( join("?",$dane));
        $tab=remowchoos($tytul,$tytul); 
       $col1= join("?",$tab[0]);
       $col2= join("?",$tab[1]);
       
    // print_r("tytul");
//       echo "<br>";
//       print_r( $col2);
include('session_guest.php');
if(!isset($user_check)){
   print_r('you must be logged to save');
    }else{
             echo "Order No:<br>";
       echo "<input type='text' name='Order No.' id='Order No.' size='100'><br>";
      // include('session_guest.php');
           echo "<button col1='".$col1."' col2='".$col2."' onclick='ssave(this)' user='".$user_check."' order='".$c_d."'>save</button>";
     // print_r("toolbox Daken 1000 (k031033)");
    }
       
    