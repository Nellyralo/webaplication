<!DOCTYPE html>
<html>
<head>
	<title>ALTA</title>
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
    }
  ?>
	<div id="latest-post" class="post">
	<h1 class="title"></h1>
	<div class="entry">
	<center>
	<h1> Alta</h1></br>


<?php
$matricula=$_POST['matricula'];
$nombres_alumno=$_POST['nombres_alumno'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$celular=$_POST['celular'];
$email_alumno=$_POST['email_alumno'];
$curp=$_POST['curp'];
$no_seguro=$_POST['no_seguro'];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
$nombres_tutor=$_POST['nombres_tutor'];
$apellidos_tutor=$_POST['apellidos_tutor'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];
$domicilio=$_POST['domicilio'];
$email_tutor=$_POST['email_tutor'];

if (!get_magic_quotes_gpc())
{
	$matricula=addslashes($matricula);
	$nombres_alumno=addslashes($nombres_alumno);
	$apellido_paterno=addslashes($apellido_paterno);
	$apellido_materno=addslashes($apellido_materno);
	$celular=addslashes($celular);
	$email_alumno=addslashes($email_alumno);
	$curp=addslashes($curp);
	$no_seguro=addslashes($no_seguro);
	$foto=addslashes($foto);
	$nombres_tutor=addslashes($nombres_tutor);
	$apellidos_tutor=addslashes($apellidos_tutor);
	$telefono1=addslashes($telefono1);
	$telefono2=addslashes($telefono2);
	$domicilio=addslashes($domicilio);
	$email_tutor=addslashes($email_tutor);

}

require('../../conexion/conexion1.php');
$query = "insert into t_datos (matricula,nombres_alumno,apellido_paterno,apellido_materno,celular,email_alumno,curp,no_seguro,foto,nombres_tutor,apellidos_tutor,telefono1,telefono2,domicilio,email_tutor) values ('". $matricula . "','" .$nombres_alumno. "','" . $apellido_paterno . "', '" . $apellido_materno . "',  '" . $celular . "', '" . $email_alumno . "', '" . $curp . "', '" . $no_seguro . "','" . $destino . "', '" . $nombres_tutor. "', '" . $apellidos_tutor . "', '" . $telefono1 . "', '" . $telefono2 . "', '" . $domicilio . "','" . $email_tutor . "' )" ;
	
	$result= $db->query($query);
	if(!$result)
	{

	?>
	<center><h2>
		<div class="alert">

			No es posible agregar el registro
			<a href="Altaform.php">
       			 Regresar
      </a>
		</div>
		</h2></center>
		<?php
	}
	else
	{
	?>
		<center><h2><div class="alert Success">

		Registro agregado exitosamente
		<a href="Altaform.php">
       			 Regresar
      </a>
		</div></h2></center>
		<?php
	}
	$db->close();
?>
</body>
</html>