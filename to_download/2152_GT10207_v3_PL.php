<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename_PL ='http://wieltonir.c0.pl/saved/2152_GT10207_v3_PL.pdf';
   header("Content-Disposition: attachment; filename='2152_GT10207_v3_PL.pdf'");
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>