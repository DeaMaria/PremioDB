<?php
$enlace = '$/xampp/htdocs/PremioDB/PremDB/cartaCompromiso/CartaCompromiso.pdf';
header("Content-disposition: attachment; filename='CartaCompromiso.pdf'");
header("Content-type: application/octet-stream");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);
?>