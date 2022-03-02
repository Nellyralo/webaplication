<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
	</head>
<body>
<?php session_start();
if (isset($_SESSION['user_id']))
    {
    require('encabezadoAltas.inc');
    }
  else
  {
  session_destroy();
  echo'<script type="text/javascript"> window.location="../../loginform.html"; </script>';
  }		?>
<div id="latest-post" class="post">
<h1 class="title"></h1>
<div class="entry">
<center>
<h1> Modificar Permiso</h1></br>
<?php
	$tipoBusqueda='tipoBusqueda';
	$terminobusqueda='terminobusqueda';

	$matricula=$_POST['matricula'];
	$nombres_alumno=$_POST['nombres_alumno'];
	$apellido_paterno=$_POST['apellido_paterno'];
	$apellido_materno=$_POST['apellido_materno'];
	$celular=$_POST['celular'];
	$email_alumno=$_POST['email_alumno'];
	$curp=$_POST['curp'];
	$no_seguro=$_POST['no_seguro'];
	$foto=$_POST['foto'];
	$nombres_tutor=$_POST['nombres_tutor'];
	$apellidos_tutor=$_POST['apellidos_tutor'];
	$telefono1=$_POST['telefono1'];
	$telefono2=$_POST['telefono2'];
	$domicilio=$_POST['domicilio'];
	$email_tutor=$_POST['email_tutor'];

	require('../../conexion/conexion1.php');

	$query = "UPDATE t_datos SET matricula='$matricula', nombres_alumno='$nombres_alumno', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', celular='$celular', email_tutor='$email_alumno', curp='$curp', no_seguro='$no_seguro', foto='$foto', nombres_tutor='$nombres_tutor', apellidos_tutor='$apellidos_tutor', telefono1='$telefono1', telefono2='$telefono2', domicilio='$domicilio', email_tutor='$email_tutor' WHERE matricula='$matricula'";
	$result= $db->query($query);
	if($result = $terminobusqueda){
	?>
		<center><h2>
		<div class="alert">

			Modificaión Exitosa
			<a href="ModificarDatos.php">
       			 Regresar</a>
		</div>
	</h2></center>
		<?php
	}
	else
	{
	?>
		<center><h2><div class="alert Success">

			Modificación No Exitosa
				<a href="ModificarDatos.php">
       			 Regresar</a>

		</div></h2></center>
		<?php
	}
	$db->close();
	?>
</div></div>
</body></html>
