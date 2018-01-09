<?php
require_once("dompdf/dompdf_config.inc.php"); 
$html = <<<'ENDHTML'
<html>
 <body>
  <h1>Hello Dompdf</h1>
 </body>
</html>
ENDHTML;
//generate some PDFs!
$dompdf = new Dompdf();  //if you use namespaces you may use new \DOMPDF()
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf", array("Attachment"=>0));
?>