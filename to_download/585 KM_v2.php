<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/585 KM_v2.pdf';
   header("Content-Disposition: attachment; filename='585 KM_v2.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>