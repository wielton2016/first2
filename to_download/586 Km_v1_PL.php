<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename_PL ='http://wieltonir.c0.pl/saved/586 Km_v1_PL.pdf';
   header('Content-Disposition: attachment; filename="586 Km_v1_PL.pdf"' );
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>