<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wielon.c0.pl/saved/566 KM_v1.pdf';
   $filename_PL ='http://wielon.c0.pl/saved/566 KM_v1_PL.pdf';
   header("Content-Disposition: attachment; filename='566 KM_v1_PL.pdf'");
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>