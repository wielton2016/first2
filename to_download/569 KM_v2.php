<!DOCTYPE html>
<?php
header('Content-Type: application/pdf');
   $filename ='http://wielon.c0.pl/saved/569 KM_v2.pdf';
   $filename_PL ='http://wielon.c0.pl/saved/569 KM_v2_PL.pdf';
   header("Content-Disposition: attachment; filename='569 KM_v2.pdf'");
 readfile($filename);
  ?>  
  <html>
<head>
</head>
<body>
</body>
</html>