<!DOCTYPE html>

<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/2178_FP102017_v5.pdf';
   header('Content-Disposition: attachment; filename="2178_FP102017_v5.pdf"' );
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>