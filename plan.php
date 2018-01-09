<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<style>
table.one{
/*          // border-spacing: 0.5rem;
          // margin:0 0 0 500px;
         // font-size: 10px;*/
        }
        table.two{
          /* border-spacing: 0.5rem;     */
           background: hsl(170, 70%, 50%);
        }
        td.one {
            padding: 0.3rem;
            background: hsl(0, 0%, 92.9%);
            width:150px;

    overflow: hidden;
    text-overflow: ellipsis;
            /*colory tła drugiej kolumny*/
          }
           th.one {
            padding: 0.3rem;
            background: hsl(0, 0%, 92.9%);
            width:150px;
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
          
          
            ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
  li { margin: 5px; padding: 5px; }
          </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable({
      revert: true
    });
    
    
    $( "#draggable" ).draggable({
      connectToSortable: "#sortable",
      helper: "clone",
      revert: "invalid"
    });
    $( "ul, li" ).disableSelection();
  } );
  </script>
 </head>
<body>

<?php
   $tytul=loadtable_plan();  
 //  print_r($tytul);
   
   // echo "<table class='two' style='width:3300px; table-layout:fixed; position:fixed; margin-top: 500px'>"; 
   // naglówki tabeli 
  //  echo"<tr>";
   //for($y=0;$y<count($tytul[0]);$y++){
    // echo"<th class='one' style='width:150px;' >'".$tytul[0][$y]."'</th>";
  // }
  // echo"</tr>";
   // echo "</table>";    
    
         echo "<table class='two' style='width:3300px;table-layout:fixed; position:fixed; margin-top: 0px; z-index:1000;>"; 
   // naglówki tabeli 
    echo"<tr>";
   for($y=0;$y<count($tytul[0]);$y++){
     echo"<th class='one' style='width:150px;' >'".$tytul[0][$y]."'</th>";
   }
   echo"</tr>";
    echo "</table>";
    
        //style='position:relative ;'

      // print_r(count($tytul[1]));
echo"<ul id='sortable' style='position:relative'";
for($x=0;$x<count($tytul[1]);$x++){
 // echo"<li class='ui-state-default'> ";
  echo"<table class='ui-state-default' style='width:3300px;table-layout:fixed;'>";
  echo"<tr>";
   for($y1=0;$y1<count($tytul[1][0]);$y1++){
     echo"<td class='one' style='width:150px;'>'".$tytul[1][$x][$y1]."'</td>";
   }
  echo"</tr>";
   echo "</table>";
 // echo "</li>";
  }
  //echo"<li class='ui-state-default'>Item 2</li>";
  //echo"<li class='ui-state-default'>Item 3</li>";
 //echo" <li class='ui-state-default'>Item 4</li> ";
 //echo" <li class='ui-state-default'>Item 5</li> ";
echo"</ul>";
    
   





    ////////////////////////////////////////////////////////
        function linksql_plan(){
            $servername = "mysql.cba.pl";
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
//             $tab="table2";
//             $tabop="opcje";
              // create connection
             $link = mysqli_connect($servername, $username, $password,$dbname);
             if (mysqli_connect_errno())
            {
            echo "failed to connect to mysql: " . mysqli_connect_error();
            }  
            $db_selected=mysqli_select_db($link,$dbname);
            if (!$db_selected) {
                die ('nie mo�na ustawi� databasy : ' . mysql_error());
            }
            return $link;    
        
        }
        
         function loadtable_plan(){
          
            $servername = "mysql.cba.pl";//mysql.cba.pl
            $username = "ir";
            $password = "wielton";
            $dbname = "wielon_c0_pl";
            $tab="plan";

            // create connection
             $link = mysqli_connect($servername, $username, $password,$dbname);
             if (mysqli_connect_errno())
            {
            echo "failed to connect to mysql: " . mysqli_connect_error();
            } 

            if (!$link->set_charset("utf8")) {
            printf("error loading character set utf8: %s\n", $link->error);
            } else {
            //printf("current character set: %s\n", $link->character_set_name());
            }   // aby dobrze wyswietlaznaki polskie
     
            $db_selected=mysqli_select_db($link,$dbname);
            if (!$db_selected) {
                die ('nie można ustawić databasy : ' . mysql_error());
            }
        
            $query = "select * from $tab"; //you don't need a ; like you do in sql
        $result = mysqli_query($link,$query);   
        if (!$result) { // add this check.
            die('invalid quer2y: ' . mysql_error());
        }
        
        
        $kolumny="show columns from $tab";
        
         $result_kol = mysqli_query($link,$kolumny);   
        if (!$result_kol) { // add this check.
            die('invalid query: ' . mysql_error());
        }
        //////////////////////
       
        
        
     
        $x=0;
        $x2=0;
        while($row1= mysqli_fetch_array($result_kol)){   //creates a loop to loop through results
        //echo "<td class='two'>" . $row1[0] . "</td>" ;  //$row['index'] the index here is a field name
        //$globals['tytuly'][$x]=$row1[0];
        $tytul[$x]=$row1[0];
        $x=$x+1;
        
        }
           while($row = mysqli_fetch_array($result)){   //creates a loop to loop through results
        for($i=0;$i<count($tytul);++$i){
           // echo "<td class='one'>". $row[$tytul[$i]] . "</td>";  //$row['index'] the index here is a field name
              $wier[$x2][$i] = $row[$tytul[$i]];
               
           }
           $x2=$x2+1;}
        
           $a[0]=$tytul;
           $a[1]=$wier  ;
        //print_r($globals['wier']);
     return $a  ;
       }
?>

</body>
</html>