<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Equipment</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
#container1{
   border:2px solid #a94123;
   margin-left:330px;
   margin-top:110px;
   width:210px;
   height:100px;  
   	z-index: 400;
}

#container2{
   border:1px solid #cccccc;
    margin-left:330px;
    margin-top:80px;
   width:500px;
   height:100px;   
}

#block1{
    /* background-color:#cccccc; */
    width: 70px;
    height:70px;
    position:absolute; 
    z-index: 500;       
}


#block2{
    /* background-color:#999999; */
    width: 70px;
    height:50px;  
    position:absolute;    
}

</style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
$('#block1').draggable({
axis: 'x',
    containment: '#container1',
    drag: function() {
        $('#block2').css('left',$(this).position().left); 
    },
    
    stop: function(){
        $('#block2').css('left',$(this).position().left);  
    }
     
});
});
  </script>
</head>
<body bgcolor="#d2d8cf">
 <iframe src="http://wielon.c0.pl/elementy.php"></iframe> 

</body>
</html>