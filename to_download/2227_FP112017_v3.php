<!DOCTYPE html>

<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/2227_FP112017_v3.pdf';
   header('Content-Disposition: attachment; filename="2227_FP112017_v3.pdf"' );
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>