<!DOCTYPE html>
<?php
   $filename ='http://wieltonir.c0.pl/saved/2227_FP112017_v5.pdf';
   header('Content-Type: application/pdf');
   header('Content-Disposition: inline; filename="2227_FP112017_v5.pdf"' );
   header('Content-Transfer-Encoding: binary');  
   readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>