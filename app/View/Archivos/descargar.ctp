
<?php

		// Vista Por Julio
App::import('Vendor','xtcpdf'); 
$tcpdf = new XTCPDF();
$textfont = 'freesans';

$tcpdf->SetAuthor("");
$tcpdf->SetAutoPageBreak( false );
$tcpdf->setHeaderFont(array($textfont,'',10));
$tcpdf->xheadercolor = array(255,255,255);
$tcpdf->xheadertext = 'Fecha: '. date('d-m-Y',time());
$tcpdf->xfootertext = 'www.pedroventura.com';

// Ahora imprimimos el contenido de la pagina en una posición determinada
// estos datos son un ejemplo, y en mi ejemplo hay un pequeño texto y una imagen.
$tcpdf->AddPage();
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'B',10);
$tcpdf->Cell(10,20,'Nombre:', 0, 0);
// configuramos la calidad de JPEG
$tcpdf->setJPEGQuality(100);
$tcpdf->Image($imagen, 0, 50, 200, 200, '', '', '', false, 150);  

// se pueden asignar mas datos, ver la documentación de TCPDF

echo $tcpdf->Output('mi_archivo.pdf', 'D'); //el pdf se muestra en el navegador
//echo $tcpdf->Output('mi_archivo.pdf', 'I'); //el pdf se descarga

?>