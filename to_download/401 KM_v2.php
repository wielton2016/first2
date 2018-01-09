<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/401 KM_v2.pdf';
   $filename_PL ='http://wieltonir.c0.pl/saved/401 KM_v2_PL.pdf';
   header("Content-Disposition: attachment; filename='401 KM_v2.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>