<!DOCTYPE html>
<?php
   $filename ='http://wieltonir.c0.pl/saved/2200_FP112017_v8.pdf';
   header('Content-Type: application/pdf');
   header('Content-Disposition: inline; filename="2200_FP112017_v8.pdf"' );
   header('Content-Transfer-Encoding: binary');  
   readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>