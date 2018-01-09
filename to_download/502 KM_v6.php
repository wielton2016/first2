<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/502 KM_v6.pdf';
   header("Content-Disposition: attachment; filename='502 KM_v6.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>