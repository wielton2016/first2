<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename_PL ='http://wieltonir.c0.pl/saved/2207_GT112017_v9_PL.pdf';
   header('Content-Disposition: attachment; filename="2207_GT112017_v9_PL.pdf"' );
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>