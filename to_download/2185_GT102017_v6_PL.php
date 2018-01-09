<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wielon.c0.pl/saved/2185_GT102017_v6.pdf';
   $filename_PL ='http://wielon.c0.pl/saved/2185_GT102017_v6_PL.pdf';
   header("Content-Disposition: attachment; filename='2185_GT102017_v6_PL.pdf'");
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>