<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
      $("p").on("click",function(){
       alert("The paragraph was clicked.");
       $("body").append("<p id='new'>Now click on this paragraph</p>");
    });
    $(document).on("click","#new",function(){
       alert("On really works.");
      });
    });

</script>
</head>
<body>

<h2 >This is a heading</h2>

<p id="as">This is a paragraph.</p>
<div><p>This is another paragraph.</p></div>

<button>Click me to hide paragraphs</button>

</body>
</html>
