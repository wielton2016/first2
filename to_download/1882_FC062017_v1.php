<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wieltonir.c0.pl/saved/1882_FC062017_v1.pdf';
   $filename_PL ='http://wieltonir.c0.pl/saved/1882_FC062017_v1_PL.pdf';
   header("Content-Disposition: attachment; filename='1882_FC062017_v1.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>