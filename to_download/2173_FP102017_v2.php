<!DOCTYPE html>

<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/2173_FP102017_v2.pdf';
   header('Content-Disposition: attachment; filename="2173_FP102017_v2.pdf"' );
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>