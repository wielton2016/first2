<!DOCTYPE html>
<?php
   $filename_PL ='http://wieltonir.c0.pl/saved/2214_MB112017_v5_PL.pdf';
   header('Content-Disposition: attachment; filename="2214_MB112017_v5_PL.pdf"' );
   header('Content-Type: application/pdf');
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>