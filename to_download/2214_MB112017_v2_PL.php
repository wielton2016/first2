<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename_PL ='http://wieltonir.c0.pl/saved/2214_MB112017_v2_PL.pdf';
   header("Content-Disposition: attachment; filename='2214_MB112017_v2_PL.pdf'");
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>