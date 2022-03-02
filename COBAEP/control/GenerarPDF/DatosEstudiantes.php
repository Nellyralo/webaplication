<?php
	include 'plantilla1.php';
	require '../../conexion/conexion1.php';

	$query = "SELECT * FROM t_datos";
	$result = @ $db->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',5);
	$pdf->Cell(15,6,'Matricula',1,0,'C',1);
	$pdf->Cell(20,6,'Nombre del estudiante',1,0,'C',1);
	$pdf->Cell(20,6,'Apellido paterno ',1,0,'C',1);
	$pdf->Cell(20,6,'Apellido materno ',1,0,'C',1);
	$pdf->Cell(20,6,'Celular',1,0,'C',1);
	$pdf->Cell(20,6,'Correo del estudiante',1,0,'C',1);
	$pdf->Cell(40,6,'curp',1,0,'C',1);
	$pdf->Cell(30,6,'Numero de seguro',1,0,'C',1);
	$pdf->Cell(10,6,'Foto',1,0,'C',1);
	$pdf->Cell(30,6,'Nombre del tutor',1,0,'C',1);
	$pdf->Cell(30,6,'Apellidos del tutor',1,0,'C',1);
	$pdf->Cell(30,6,'Telefono 1',1,0,'C',1);
	$pdf->Cell(30,6,'Telefono 2',1,0,'C',1);
	$pdf->Cell(30,6,'Domicilio',1,0,'C',1);
	$pdf->Cell(30,6,'Correo del tutor',1,0,'C',1);
	$pdf->SetFont('Arial','',8);

	while($row = $result->fetch_assoc())
	{
	//	$pdf->Cell(70,6,utf8_decode($row['Id']),1,0,'C');
		$pdf->Cell(15,6,$row['matricula'],0,1,'C');
		$pdf->Cell(20,6,utf8_decode($row['nombres_alumno']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['apellido_paterno']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['apellido_materno']),1,1,'C');
		$pdf->Cell(20,6,utf8_decode($row['celular']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['email_alumno']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['curp']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['no_seguro']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['foto']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['nombres_tutor']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['apellidos_tutor']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['telefono1']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['telefono2']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['domicilio']),1,1,'C');
		$pdf->Cell(70,6,utf8_decode($row['email_tutor']),1,1,'C');

	}
	$pdf->Output();
?>
