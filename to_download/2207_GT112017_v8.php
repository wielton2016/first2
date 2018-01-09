<!DOCTYPE html>

<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/2207_GT112017_v8.pdf';
   header('Content-Disposition: attachment; filename="2207_GT112017_v8.pdf"' );
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>