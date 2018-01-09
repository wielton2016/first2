<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wielon.c0.pl/saved/1882_FC062017_v1.pdf';
   $filename_PL ='http://wielon.c0.pl/saved/1882_FC062017_v1_PL.pdf';
   header("Content-Disposition: attachment; filename='1882_FC062017_v1_PL.pdf'");
 readfile($filename_PL);  
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>