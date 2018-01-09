<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/2127_GT102017_v4.pdf';
   header("Content-Disposition: attachment; filename='2127_GT102017_v4.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>