<?php
header("Content-disposition: attachment; cartaCompromiso/CartaCompromiso.pdf");
header("Content-type: application/pdf");
readfile("nombre_del_archivo.extension");
?>