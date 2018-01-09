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
        float:top;
        padding:5px;
        position: relative;
        }
         #section {
       margin-left: 450px;
        height:100%;
      
        }
        .floating-menu {
        font-family: sans-serif;
        background: yellowgreen;
        padding: 5px;;
        width: 130px;
        z-index: 100;
        position: fixed;
        }
        #header {

        height:10%;
      
        }
      
    table.one1{

          margin:0 0 0 500px;   
         

 
        </style>
        
    </head>
    <body>
        <div id='header'>Tabela</div>
        <?php
        $name = "";
        
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = filter_input(INPUT_POST,"name");
   
   echo "<div id='section'>";
    include 'Tabela_1.php';
    tabla('Tank 10500');
    echo "</div>";
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
     }}   
         ?>
        <div id="nav">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        Name: <input type="text" name="name" value="<?php echo $name;?>">
         <br><br>
           <input type="submit" name="submit" value="Submit">  
        
        
  </form>
        
        <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo "<div id='section'>";

    echo "</div>";
?>
    </div>
        <script>


        </script>
    </body>
</html>
