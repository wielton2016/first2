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
        table.one{
           border-spacing: 0.5rem;
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
            padding: 5px 12px;
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
        
        <form>
        <input type="radio" id="1" name="name" onclick="GetSelectedItem(this);" value="A bg"/>
        <label for="1">One</label>
        <input type="radio" id="2" name="name" onclick="GetSelectedItem(this);" value="B"/>
        <label for="2">Two</label>
        <input type="radio" id="3" name="name" onclick="GetSelectedItem(this);"  value="C"/>
        <label for="3">Three</label>
        
        </form>
        <div id="output"></div>
        
        <?php
        
        
        ?>
        <script>
        var output = document.getElementById('output');

        function GetSelectedItem(el) {
            output.innerHTML = el.value;
            var tes1="jo";
        }
        </script>
        
    </body>
</html>
