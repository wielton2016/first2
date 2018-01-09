<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/1944_RM072017_v5.pdf';
   header("Content-Disposition: attachment; filename='1944_RM072017_v5.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>