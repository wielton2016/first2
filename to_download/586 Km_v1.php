<!DOCTYPE html>

<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/586 Km_v1.pdf';
   header('Content-Disposition: attachment; filename="586 Km_v1.pdf"' );
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>