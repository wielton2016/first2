<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
        #nav {
        line-height:30px;
        background-color:#eeeeee;
        height:100%;
        width:450px;
        float:left;
        padding:5px;
        }
         #section {
       margin-left: 0px;
        }
        table.one{
          // border-spacing: 0.5rem;
          // margin:0 0 0 500px;
        }
        table.two{
           border-spacing: 0.5rem;
             background: hsl(170, 70%, 50%);
        }
        td.one {
            padding: 0.5rem;
            background: hsl(170, 50%, 50%);
          }
          td.two {
            padding: 0.5rem;
            background: hsl(170, 50%, 90%);
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
            
        </style>
    </head>
    <body>
        
        <?php 
            $servername = "sql7.freemysqlhosting.net";
            $username = "sql7123838";
            $password = "c5nSNwEgVg";
            $dbname = "sql7123838";
            $tab="table1";

            // Create connection
             $link = mysqli_connect($servername, $username, $password,$dbname);
             if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }  
            $db_selected=mysqli_select_db($link,'sql7123838');
            if (!$db_selected) {
                die ('Nie można ustawić databasy : ' . mysql_error());
            }
        
            $query = "SELECT * FROM $tab"; //You don't need a ; like you do in SQL
        $result = mysqli_query($link,$query);   
        if (!$result) { // add this check.
            die('Invalid quer2y: ' . mysql_error());
        }
        
        
        
        $kolumny="SELECT `COLUMN_NAME`
        FROM `INFORMATION_SCHEMA`.`COLUMNS`
        WHERE `TABLE_SCHEMA` = 'sql7123838'
        AND `TABLE_NAME` = '$tab' LIMIT 0 , 30";
        
         $result_kol = mysqli_query($link,$kolumny);   
        if (!$result_kol) { // add this check.
            die('Invalid query: ' . mysql_error());
        }
        //////////////////////
        echo "<div id='section'><br>";
        echo output.inerHTML;
        
        echo "<table class='one' style='width:100%'>"; // start a table tag in the HTML
        echo"<tr>";
        $x=0;
        while($row1= mysqli_fetch_array($result_kol)){   //Creates a loop to loop through results
        echo "<td class='two'>" . $row1[0] . "</td>" ;  //$row['index'] the index here is a field name
        $tytul[$x]=$row1[0];
        $x=$x+1;
        
        }
        echo"<tr>";
        //echo "</table>"; //Close the table in HTML 
        /////////////////////
        //echo "<table style='width:100%'"; // start a table tag in the HTML
        // echo "</tr>";
        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        for($i=0;$i<count($tytul);++$i){
            echo "<td class='one'>". $row[$tytul[$i]] . "</td>";  //$row['index'] the index here is a field name
               
        } echo"</tr>";}
        
        echo "</table><br>"; //Close the table in HTML 
        echo "</div>";
        ?>
        <script>
        var output = document.getElementById('output');

        function GetSelectedItem(el) {
            output.innerHTML = el.value;
           }
        </script>
    </body>
</html>
