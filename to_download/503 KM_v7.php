<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/503 KM_v7.pdf';
   header("Content-Disposition: attachment; filename='503 KM_v7.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>