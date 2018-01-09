<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wielon.c0.pl/saved/565 KM_v2.pdf';
   $filename_PL ='http://wielon.c0.pl/saved/565 KM_v2_PL.pdf';
   header("Content-Disposition: attachment; filename='565 KM_v2.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>