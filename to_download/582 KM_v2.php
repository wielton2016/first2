<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/582 KM_v2.pdf';
   header("Content-Disposition: attachment; filename='582 KM_v2.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>