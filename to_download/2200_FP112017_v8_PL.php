<!DOCTYPE html>
<?php
   $filename_PL ='http://wieltonir.c0.pl/saved/2200_FP112017_v8_PL.pdf';
   header('Content-Disposition: attachment; filename="2200_FP112017_v8_PL.pdf"' );
   header('Content-Type: application/pdf');
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>