<?php

$nombre=$_POST["nombre"];
$nombres_tutor=$_POST["nombres_tutor"];
$Dia=$_POST["Dia"];
$Mes=$_POST["Mes"];
$Hora=$_POST["Hora"];
$Semestre=$_POST["Semestre"];
$Grupo=$_POST["Grupo"];

include'plantilla1.php';
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
$pdf->Cell( 0, 9, 'TEZIUTLAN, PUE.', 0, 1, 'R');
$pdf->Cell(0,9,date('d/m/Y'),0,1,'R'); 

$pdf->MultiCell( 0, 10,utf8_decode('C.').utf8_decode($nombres_tutor= $_POST["nombres_tutor"]),0,'L') ;
$pdf->Cell( 0, 7, 'Padre de familia o tutor. ', 0, 1, 'L');
$pdf->Cell( 0, 7, 'PRESENTE. ', 0, 1, 'L');

$pdf->MultiCell( 0, 7,utf8_decode('Por medio del presente, me permito citarlo el dia '.utf8_decode($nombres_tutor= $_POST["Dia"]).' del mes de ').utf8_decode($Mes=$_POST["Mes"]).utf8_decode(' del año presente, a las ').utf8_decode($Hora=$_POST["Hora"]).utf8_decode(' horas, en las instalaciones del plantel, para tratar asuntos relacionados con su hijo(A) ').utf8_decode($nombre=$_POST["nombre"]).utf8_decode(' alumno(A) del ').utf8_decode($Semestre=$_POST["Semestre"]).utf8_decode('Semestre, grupo, ').utf8_decode($Grupo=$_POST["Grupo"]).utf8_decode(' para la cual solicito acuda puntualmente.'),0,'J');
$pdf->Cell(0,10, 'Atentamente', 0,1,'C');

$pdf->Cell(0,25, '_______________________________________', 0,1, 'C');
$pdf->Cell( 0, 4, utf8_decode('LIC.RICARDO CHIÑAZ.'), 0, 1, 'C');
$pdf->Cell(0, 9, 'DIRECTOR DEL PLANTEL',0,1,'C');

$pdf->Output();

$pdf->Output();

 ?>


?>