<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename_PL ='http://wieltonir.c0.pl/saved/549 KM_v2_PL.pdf';
   header("Content-Disposition: attachment; filename='549 KM_v2_PL.pdf'");
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>