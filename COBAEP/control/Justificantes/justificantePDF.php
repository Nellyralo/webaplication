<?php 

$alumno= $_POST["alumno"];
$grupo= $_POST["grupo"];
$semestre=$_POST["semestre"];
$Dias= $_POST["Dias"];
$Motivo= $_POST["Motivo"];
$Fecha= $_POST["Fecha"];
include 'plantilla1.php';
$pdf = new PDF(); 
$pdf->AddPage();
$pdf->SetFont('Arial','B',12 );

$size=20;

$absx=(210-$size)/2;

//$pdf->Image("../PIE.jpeg",$absx,5,$size);

$pdf->Cell( 0, 7,"",0, 1, 'C');
$pdf->Cell( 0, 10, 'COLEGIO DE BACHILLERES DEL ESTADO DE PUEBLA. ', 0, 1, 'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell( 0, 10, 'ORGANISMO PUBLICO DECENTRALIZADO. ', 0, 1, 'C');
$pdf->Cell( 0, 10, 'PLANTEL 9  TEZIUTLAN, PUE. ', 0, 1, 'C');

$pdf->Cell( 0, 9, 'A LOS CC. PROFESORES ', 0, 1, 'L');
$pdf->Cell( 0, 9, 'PRESENTES', 0, 1, 'L');
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(177,6, utf8_decode('SE LES SOLICITA JUSTIFICACION LAS INACISTENCIAS DEL ALUMNO:'  ).utf8_decode($alumno= $_POST["alumno"] ). utf8_decode(" ").utf8_decode($semestre=$_POST["semestre"]).utf8_decode(' SEMESTRE, GRUPO, ').utf8_decode($grupo=$_POST["grupo"]).utf8_decode(' POR ').utf8_decode($Dias= $_POST["Dias"]). utf8_decode(' DIAS(S),'). utf8_decode('YA QUE POR CAUSA DE: '). utf8_decode($Motivo= $_POST["Motivo"]). utf8_decode(' NO PUDO ASISTIR A LAS CLASES EL(LOS)DIA(S)').utf8_decode($Fecha= $_POST["Fecha"]),0,'J') ;

$pdf->Cell( 0, 9, 'TEZIUTLAN, PUE.', 0, 1, 'C');
$pdf->Cell(0,9,date('d/m/Y'),0,1,'C'); 
$pdf->SetXY(100, 130);
$pdf->Cell(10, 5, '_______________________________________', 0,1, 'C');
$pdf->Cell( 0, 20, '  DIERECTOR DEL PLANTEL .', 0, 1, 'C');
$pdf->SetXY(13, 153);
$pdf->Cell( 0, 0, utf8_decode('LIC.RICARDO CHIÑAZ.'), 0, 1, 'C');
$pdf->Output();

 ?>